#!/bin/bash
./vendor/bin/phalcon migration run --config=./devtools.php --directory=./ --migrations=./app/Migrations/ --no-auto-increment --force --verbose --log-in-db "$@"
