#!/bin/bash
# Exec script that gets the ip 
./getipinfo.sh >&/dev/null
php -r 'include "App/Migration.php"; App/Migration::handle();'
