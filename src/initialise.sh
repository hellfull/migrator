#!/bin/bash
# Exec script that gets the ip 
sh getipinfo.sh >&/dev/null
php App/init.php
