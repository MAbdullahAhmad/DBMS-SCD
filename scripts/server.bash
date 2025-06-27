#!/bin/bash
CURR_DIR="$(realpath $(dirname ${BASH_SOURCE[0]}))"
ROOT=$(dirname $CURR_DIR);
cd $ROOT

# ------
# Config
# ------

HOST='127.0.0.1'
PORT=8000

# Start MySQL
sudo service mysql start
echo Started MySQL server

# Start Server
cd public
php -S $HOST:$PORT &>/dev/null &
PID=$!
echo Server started at http://$HOST:$PORT PID = $PID

# Open in Browser
vivaldi http://$HOST:$PORT &>/dev/null&
echo Openned in browser

# Store PID in scripts/tmp/pid.txt for kill_server.bash
cd $CURR_DIR
mkdir -p tmp
echo $PID > tmp/pid.txt


