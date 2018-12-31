<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

return function () {
    return array(
        'debug' => false,
        'profiler' => true,
        'logger' => false,
        'application' => array(
            'baseUri' => '/'
        ),
        'database' => array(
            'host' => 'localhost',
            'dbname' => 'zemit',
            'username' => 'zemit',
            'password' => 'zemit',
        ),
    );
};
