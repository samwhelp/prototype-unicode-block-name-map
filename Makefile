
THE_MAKEFILE_FILE_PATH := $(abspath $(lastword $(MAKEFILE_LIST)))
THE_BASE_DIR_PATH := $(abspath $(dir $(THE_MAKEFILE_FILE_PATH)))
#THE_BIN_DIR_PATH := $(THE_BASE_DIR_PATH)
THE_BIN_DIR_PATH := $(THE_BASE_DIR_PATH)/bin
.PHONY: map json

default:
	$(THE_BIN_DIR_PATH)/usage.sh

map:
	$(THE_BIN_DIR_PATH)/map.php

json:
	$(THE_BIN_DIR_PATH)/json.php
