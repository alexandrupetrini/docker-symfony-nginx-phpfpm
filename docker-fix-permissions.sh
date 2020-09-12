#! /bin/bash
DIR_PATH="$@"
if [ -z "$DIR_PATH" ]; then DIR_PATH=$(pwd); fi
sudo chown -R $USER:$USER "$DIR_PATH"
