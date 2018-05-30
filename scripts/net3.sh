#!/bin/bash

if ping -q -c 2 -w 2 192.168.88.191 >> /dev/null 2>&1; then
    echo "1";
else
    echo "0";
    gpio write 3 1 & sleep 0.8; gpio write 3 0 | echo "Computer 3 reset.";
fi

