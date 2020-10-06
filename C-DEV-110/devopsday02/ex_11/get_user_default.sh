#!/bin/bash

users = $(sed 's/\([^:]*\).*/\1/' /etc/passwd)
if [ ! $1 ]
then
    echo "Error."
else
    if [ grep $1 users ]
    then
        echo "Yes"
    fi
fi