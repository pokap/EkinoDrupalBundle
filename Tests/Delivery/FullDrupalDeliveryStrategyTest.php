<?php

/*
 * This file is part of the Ekino Drupal package.
 *
 * (c) 2011 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\Bundle\DrupalBundle\Tests\Delivery;

use Ekino\Bundle\DrupalBundle\Delivery\FullDrupalDeliveryStrategy;

/**
 * @author Thomas Rabaix <thomas.rabaix@ekino.com>
 */
class FullDrupalDeliveryStrategyTest extends \PHPUnit_Framework_TestCase
{

    public function testIsFound()
    {
        $drupal = $this->getMock('Ekino\Bundle\DrupalBundle\Drupal\DrupalInterface');

        $drupal->expects($this->once())->method('isFound')->will($this->returnValue(true));
        $drupal->expects($this->once())->method('buildContent');
        $drupal->expects($this->once())->method('render');

        $strategy = new FullDrupalDeliveryStrategy;
        $strategy->buildResponse($drupal);
    }
}