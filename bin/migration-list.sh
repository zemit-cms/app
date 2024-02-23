#!/bin/bash
./vendor/bin/phalcon migration list --config=./devtools.php --directory=./ --migrations=./app/Migrations/ --log-in-db "$@"
