#!/usr/bin/env bash
#
# Generate WPForms Lite stubs from all the latest versions.
#

set -e

# Fetch plugin information from WordPress.org.
PLUGIN_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/wpforms-lite.json")"

# Define the list of major.minor versions to check.
VERSIONS=(1.1 1.2 1.3 1.4 1.5 1.6 1.7 1.8 1.9)

for V in "${VERSIONS[@]}"; do
    # Find the latest version including four-param versions.
    printf -v JQ_FILTER '."versions" | keys[] | select(test("^%s\\\\.%s\\\\.\\\\d+(\\\\.\\\\d+)?$"))' "${V%.*}" "${V#*.}"
    LATEST="$(jq -r "$JQ_FILTER" <<<"$PLUGIN_JSON" | sort -t "." -k 3,4 -g | tail -n 1)"
    if [ -z "$LATEST" ]; then
        echo "No version found for ${V}!"
        continue
    fi

    echo "Releasing version ${LATEST} ..."

    # Check if the tag already exists.
    if git rev-parse "refs/tags/v${LATEST}" >/dev/null 2>&1; then
        echo "Tag v${LATEST} already exists!"
        continue
    fi

    # Clean up source/ directory.
    git status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty rm -rf

    # Download and unzip the new version.
    wget -P source/ "https://downloads.wordpress.org/plugin/wpforms-lite.${LATEST}.zip"
    unzip -q -d source/ source/wpforms-lite.${LATEST}.zip
    rm source/wpforms-lite.${LATEST}.zip  # Clean up the downloaded zip file

    # Generate stubs.
    echo "Generating stubs ..."
    ./generate.sh

    # Check if there are changes to commit.
    if [ -n "$(git status --porcelain)" ]; then
        git add .
        git commit -m "Generate stubs for WPForms Lite ${LATEST}"
        git tag "v${LATEST}"
    else
        echo "No changes to commit for version ${LATEST}"
    fi
done

echo "All versions processed."
