#!/usr/bin/env bash
#
# Generate WPForms stubs from all the latest versions starting from 1.8.
#

set -e

# Fetch plugin information from WordPress.org.
PLUGIN_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/wpforms-lite.json")"

# Specify the minimum version to start collecting from.
MIN_VERSION="1.8"

# Prepare output file.
OUTPUT_FILE="wpforms_versions.txt"
> "$OUTPUT_FILE"

# Extract and filter versions.
VERSIONS=$(jq -r '."versions" | keys[]' <<<"$PLUGIN_JSON" | grep -v "trunk" | sort -V)

# Iterate through versions and collect those from 1.8 onwards.
collect_versions=false
for VERSION in $VERSIONS; do
    if $collect_versions || [[ "$VERSION" == "$MIN_VERSION"* ]]; then
        collect_versions=true
        echo "$VERSION" >> "$OUTPUT_FILE"
    fi
done

# Remove the vtrunk tag if it exists.
if git show-ref --tags | grep -q "refs/tags/vtrunk"; then
    git tag -d vtrunk
fi

# Read the collected versions and process each one.
while IFS= read -r VERSION; do
    echo "Processing version ${VERSION} ..."

    if git rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists for version ${VERSION}!"
        continue
    fi

    # Clean up source/ directory
    git status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty rm -rf

    # Download and unzip the new version
    wget -q -P source/ "https://downloads.wordpress.org/plugin/wpforms-lite.${VERSION}.zip"
    unzip -q -d source/ source/wpforms-lite.${VERSION}.zip
    rm source/wpforms-lite.${VERSION}.zip  # Clean up the downloaded zip file

    # Generate stubs
    echo "Generating stubs ..."
    ./generate.sh

    # Check if there are changes to commit
    if [ -n "$(git status --porcelain)" ]; then
        git add .
        git commit -m "Generate stubs for WPForms ${VERSION}"
        git tag "v${VERSION}"
    else
        echo "No changes to commit for version ${VERSION}"
    fi
done < "$OUTPUT_FILE"

echo "All versions processed."
