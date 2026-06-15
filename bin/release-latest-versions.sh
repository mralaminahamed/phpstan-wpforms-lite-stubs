#!/usr/bin/env bash
#
# Generate WPForms Lite stubs from the latest versions.
#

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"

set -e

PLUGIN_JSON="$(wget -q -O- "https://api.wordpress.org/plugins/info/1.0/wpforms-lite.json")"

VERSIONS=(1.1 1.2 1.3 1.4 1.5 1.6 1.7 1.8 1.9)

for V in "${VERSIONS[@]}"; do
    printf -v JQ_FILTER '."versions" | keys[] | select(test("^%s\\\\.%s\\\\.\\\\d+(\\\\.\\\\d+)?$"))' "${V%.*}" "${V#*.}"
    LATEST="$(jq -r "$JQ_FILTER" <<<"$PLUGIN_JSON" | sort -t "." -k 3,4 -g | tail -n 1)"
    if [ -z "$LATEST" ]; then
        echo "No version found for ${V}!"
        continue
    fi

    echo "Releasing version ${LATEST} ..."

    if git -C "$ROOT_DIR" rev-parse "refs/tags/v${LATEST}" >/dev/null 2>&1; then
        echo "Tag v${LATEST} already exists!"
        continue
    fi

    git -C "$ROOT_DIR" status --ignored --short -- source/ | sed -n -e 's#^!! ##p' | xargs --no-run-if-empty rm -rf

    wget -P "$ROOT_DIR/source/" "https://downloads.wordpress.org/plugin/wpforms-lite.${LATEST}.zip"
    unzip -q -d "$ROOT_DIR/source/" "$ROOT_DIR/source/wpforms-lite.${LATEST}.zip"
    rm "$ROOT_DIR/source/wpforms-lite.${LATEST}.zip"

    echo "Generating stubs ..."
    "$SCRIPT_DIR/generate.sh"

    if [ -n "$(git -C "$ROOT_DIR" status --porcelain)" ]; then
        git -C "$ROOT_DIR" add .
        git -C "$ROOT_DIR" commit -m "Generate stubs for WPForms Lite ${LATEST}"
        git -C "$ROOT_DIR" tag "v${LATEST}"
    else
        echo "No changes to commit for version ${LATEST}"
    fi
done

echo "All versions processed."
