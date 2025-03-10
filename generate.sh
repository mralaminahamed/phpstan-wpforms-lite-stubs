#!/usr/bin/env bash
#
# Generate WPForms stubs from the source directory.
#

HEADER=$'/**\n * Generated stub declarations for WPForms.\n * @see https://wpforms.com\n * @see https://github.com/mralaminahamed/phpstan-wpforms-stubs\n */'

FILE="wpforms-stubs.stub"
FILE_CONSTANTS="wpforms-constants-stubs.stub"

set -e

test -f "$FILE" || touch "$FILE"
test -f "$FILE_CONSTANTS" || touch "$FILE_CONSTANTS"
test -d "source/wpforms-lite"

# Exclude globals, constants.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"

# Exclude functions, classes, interfaces, traits and globals.
"$(dirname "$0")/vendor/bin/generate-stubs" \
    --include-inaccessible-class-nodes \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --constants \
    --out="$FILE_CONSTANTS"
