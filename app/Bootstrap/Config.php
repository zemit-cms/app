<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace App\Bootstrap;

/**
 * Class Config
 * @package App\Bootstrap
 */
class Config extends \Zemit\Bootstrap\Config
{
    public function __construct($config = array())
    {
        parent::__construct(array(
            'modules' => array(
                'frontend' => [
                    'className' => APP_NAMESPACE . '\\Frontend\\Module',
                    'path' => APP_PATH . '/Modules/Frontend/Module.php'
                ],
            ),
            'bootstrap' => [
                'config' => Config::class,
                'router' => Router::class,
                'service' => Services::class,
            ],
        ));
        if (!empty($config)) {
            $this->merge(new \Phalcon\Config($config));
        }
    }
}
