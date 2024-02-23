<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Unit;

use App\Config\Config;

class AppTest extends AbstractUnit
{
    public function testApp(): void
    {
        $this->assertInstanceOf(Config::class, $this->getConfig());
    }
}
