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

namespace SmileSolutions\SwissAddress\Plugin;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

class ReorderAddressFields
{
    /**
     * Reposition postcode to be above city input, and country drop down to be above region
     *
     * @param LayoutProcessor $processor
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(LayoutProcessor $processor, $jsLayout)
    {
        foreach ($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']
                 ['children']['payments-list']['children'] as $name => $child) {

            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']
            ['children']['payments-list']['children'][$name]['children']['form-fields']['children']
            ['postcode']['sortOrder'] = 71;

            $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']
            ['children']['payments-list']['children'][$name]['children']['form-fields']['children']
            ['country_id']['sortOrder'] = 81;

        }

        return $jsLayout;
    }
}