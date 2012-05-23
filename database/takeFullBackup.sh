#!/bin/sh

PASSWORD=$1
DATABASE=$2

mysqldump -u zf -p$PASSWORD $DATABASE > $DATABASE.sql
