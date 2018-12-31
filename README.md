# Zemit App

[![Travis Build Status](https://secure.travis-ci.org/zemit-official/cms.png)](http://travis-ci.org/zemit-official/cms?branch=master)
[![CircleCI Build Status](https://circleci.com/gh/zemit-official/cms.png)](https://circleci.com/gh/zemit-official/cms)
[![Coverage Status](https://coveralls.io/repos/zemit-official/cms/badge.png)](https://coveralls.io/r/zemit-official/cms)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zemit-official/cms/badges/quality-score.png)](https://scrutinizer-ci.com/g/zemit-official/cms/)
[![Latest Stable Version](https://poser.pugx.org/zemit-official/cms/v/stable.png)](https://packagist.org/packages/zemit-official/cms)
[![Total Downloads](https://poser.pugx.org/zemit-official/cms/downloads.png)](https://packagist.org/packages/zemit-official/cms)

Zemit App is our default project to start from, this package includes the backend (Zemit Core) and the frontend (Zemit Workspace) with our SDKs.

## Contents

- [Get Started](#get-started)
- [Requirements](#requirements)
- [External Links](#external-links)
- [Contributing](#contributing)
- [Sponsors](#sponsors)
- [Backers](#backers)
- [License](#license)
  
## Get Started

Zemit is using both [Composer](https://getcomposer.org/) and [NodeJS](https://nodejs.org/en/) package managers ([NPM](https://www.npmjs.com/)) for setups and deployments.
Zemit Workspace is using [Angular CLI](https://angular.io/) and [Gulp] which is written in [TypeScript](https://www.typescriptlang.org/).
Zemit Core is using the [Phalcon Framework](https://phalconphp.com) which is written in [Zephir/C](https://zephir-lang.com/).
- [Install Composer](https://getcomposer.org/download/) from the official documentation
- [Install NPM](https://www.npmjs.com/get-npm) from the official documentation
- [Install Angular](https://angular.io/guide/quickstart) from the official documentation
- [Install TypeScript](https://www.typescriptlang.org/docs/handbook/typescript-in-5-minutes.html) from the official documentation
- [Install Gulp](https://gulpjs.com/) from the official documentation
- [install Phalcon](https://docs.phalconphp.com/en/4.0/installation) from the official documentation

If you want to create a new project from scratch, you can run the following commands, replacing `<new-project-name>` by your project name.

    composer create-project zemit-official/cms <new-project-name>;
    cd <new-project-name>/;
    npm install;
    ng build;
    

## Requirements

In order to run Zemit Core, you have to use multiple PHP extensions. We strongly suggest to use `composer` as it will check the requirements in order to run Zemit Core correctly.

#### Languages & compatibilities
- [PHP](https://secure.php.net/) >=7.2
- [MySQL](https://www.mysql.com/) >=5.7
- [PhalconPHP](https://phalconphp.com/) ~4.0
- [V8JS (PHP)](https://github.com/phpv8/v8js/) ~2.1

## Contributing

See [CONTRIBUTING.md](https://github.com/zemit-official/zemit/blob/master/CONTRIBUTING.md) for details.

## External Links

* [Zemit Website](https://www.zemit.com)
* [Zemit Documentation](https://docs.zemit.com)
* [Zemit Support](https://forum.zemit.com)
* [Phalcon Framework](https://phalconphp.com)
* [Zephir Language](https://zephir-lang.com)
* [Twitter](https://twitter.zemit.com)
* [Facebook](https://facebook.zemit.com)


## License

Zemit is open source software licensed under the BSD 3-Clause License.
Copyright © 2017-present, Zemit Team.<br>
See the [LICENSE.txt](https://github.com/zemit-official/zemit/blob/master/LICENSE.txt) file for more.