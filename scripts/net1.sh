#!/bin/bash

if ping -q -c 2 -w 2 192.168.88.188 >> /dev/null 2>&1; then
    echo "1";
else
    echo "0";
    gpio write 0 1 & sleep 0.8; gpio write 0 0 | echo "Computer 1 reset.";
fi

     
