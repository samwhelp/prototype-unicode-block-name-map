#!/usr/bin/env bash

THE_BASE_DIR_PATH=$(cd -P -- "$(dirname -- "$0")" && pwd -P)

usage()
{
	echo ""
	echo "Usage: make [command]"
	echo
	cat <<EOF
Ex:
$ make json
$ make map
EOF
}

usage
