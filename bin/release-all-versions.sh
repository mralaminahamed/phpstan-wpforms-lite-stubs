#!/usr/bin/env bash
#
# Generate WPForms Lite stubs starting from version 1.8.
#

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

set -e

PLUGIN_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/wpforms-lite.json")"

MIN_VERSION="1.8"
OUTPUT_FILE="$ROOT_DIR/wpforms_versions.txt"
> "$OUTPUT_FILE"

VERSIONS=$(jq -r '."versions" | keys[]' <<<"$PLUGIN_JSON" | grep -v "trunk" | sort -V)

collect_versions=false
for VERSION in $VERSIONS; do
    if $collect_versions || [[ "$VERSION" == "$MIN_VERSION"* ]]; then
        collect_versions=true
        echo "$VERSION" >> "$OUTPUT_FILE"
    fi
done

if git -C "$ROOT_DIR" show-ref --tags | grep -q "refs/tags/vtrunk"; then
    git -C "$ROOT_DIR" tag -d vtrunk
fi

while IFS= read -r VERSION; do
    echo "Processing version ${VERSION} ..."

    if git -C "$ROOT_DIR" rev-parse "refs/tags/v${VERSION}" >/dev/null 2>&1; then
        echo "Tag exists for version ${VERSION}!"
        continue
    fi

    git -C "$ROOT_DIR" status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty rm -rf

    wget -q -P "$ROOT_DIR/source/" "https://downloads.wordpress.org/plugin/wpforms-lite.${VERSION}.zip"
    unzip -q -d "$ROOT_DIR/source/" "$ROOT_DIR/source/wpforms-lite.${VERSION}.zip"
    rm "$ROOT_DIR/source/wpforms-lite.${VERSION}.zip"

    echo "Generating stubs ..."
    "$SCRIPT_DIR/generate.sh"

    if [ -n "$(git -C "$ROOT_DIR" status --porcelain)" ]; then
        git -C "$ROOT_DIR" add .
        git -C "$ROOT_DIR" commit -m "Generate stubs for WPForms ${VERSION}"
        git -C "$ROOT_DIR" tag "v${VERSION}"
    else
        echo "No changes to commit for version ${VERSION}"
    fi
done < "$OUTPUT_FILE"

echo "All versions processed."
