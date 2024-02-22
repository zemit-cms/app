<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace App;

use App\Config\Config;

class Bootstrap extends \Zemit\Bootstrap
{
    final public function initialize(): void
    {
        $this->setConfig(new \App\Config\Config());
    }
}
