#!/bin/bash
if [ !$1 ]
then
    echo "No commit message, no add and no push."
else
    git add *
    git commit -m $1
    git push origin master
fi