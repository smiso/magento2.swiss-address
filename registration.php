<?php
/**
 * smile solutions Swiss Address
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @author      Daniel Kradolfer <kra@smilesolutions.ch>
 * @package     SmileSolutions_SwissAddress
 * @copyright   Copyright (c) 2019 Daniel Kradolfer, smile solutions gmbh <kra@smilesolutions.ch>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'SmileSolutions_SwissAddress',
    __DIR__
);
