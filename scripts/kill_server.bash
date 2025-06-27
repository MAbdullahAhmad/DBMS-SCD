#!/bin/bash
CURR_DIR="$(realpath $(dirname ${BASH_SOURCE[0]}))"
ROOT=$(dirname $CURR_DIR);
cd $ROOT

# ------
# Config
# ------

PID_FILE="$CURR_DIR/tmp/pid.txt"

if [ ! -f "$PID_FILE" ]; then
  echo "PID file not found. Server may not be running."
  exit 1
fi

PID=$(cat "$PID_FILE")

# Kill the server process
if kill -0 $PID 2>/dev/null; then
  kill $PID
  echo "Server with PID $PID has been killed."
else
  echo "No server process found with PID $PID."
fi