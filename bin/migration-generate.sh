#!/bin/bash
./vendor/bin/phalcon migration generate --config=./devtools.php --directory=./ --migrations=./app/Migrations/ --no-auto-increment --force --verbose --log-in-db "$@"
