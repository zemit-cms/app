#!/bin/bash
rm -rf ./app/Models/Abstracts/Abstract*.php && ./vendor/bin/phalcon all-models --config=./devtools.php --get-set --camelize --mapcolumn --abstract --doc --directory=./ --output=./app/Models/Abstracts --relations --fk --force --namespace=App\\Models\\Abstracts --extends=\\App\\Models\\AbstractModel "$@"
find ./app/Models/Abstracts/ -type f -exec sed -i -e '/$this->setSchema/i \        parent::initialize();' {} \;
find ./app/Models/Abstracts/ -type f -exec sed -i -e 's/ $this->setSchema/ \/\/ $this->setSchema/g' {} \;
find ./app/Models/Abstracts/ -type f -exec sed -i -e 's/public function initialize()/public function initialize() :void/g' {} \;
./vendor/bin/phpcbf ./app/Models/Abstracts/
