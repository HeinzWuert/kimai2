<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Tests\Controller;

/**
 * @coversDefaultClass \App\Controller\ActivityController
 * @group integration
 */
class ActivityControllerTest extends ControllerBaseTest
{

    public function testIsSecure()
    {
        $this->markTestSkipped('no public route available');
    }
}
