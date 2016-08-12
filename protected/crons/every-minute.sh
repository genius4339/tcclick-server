#!/bin/bash

PHP="/usr/bin/php"
if [ -f "/etc/php.ini" ]; then
  PHP="$PHP -c /etc/php.ini"
fi

cd $(dirname $0)
BASEDIR=$(dirname $(dirname `pwd`))


$PHP -d 'date.timezone=Asia/shanghai' $BASEDIR/api/analyze.php
$PHP -d 'date.timezone=Asia/shanghai' $BASEDIR/api/recalculate_daily_counter_android_info.php




