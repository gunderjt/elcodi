<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Bundle\CartBundle\Tests\Functional\EventDispatcher;

use Elcodi\Bundle\TestCommonBundle\Functional\WebTestCase;

/**
 * Class OrderLineStateEventDispatcherTest
 */
class OrderLineStateEventDispatcherTest extends WebTestCase
{
    /**
     * Schema must be loaded in all test cases
     *
     * @return array Load schema
     */
    protected function loadSchema()
    {
        return false;
    }

    /**
     * Returns the callable name of the service
     *
     * @return string service name
     */
    public function getServiceCallableName()
    {
        return [
            'elcodi.core.cart.event_dispatcher.order_line_state',
            'elcodi.order_line_state_event_dispatcher',
        ];
    }
}