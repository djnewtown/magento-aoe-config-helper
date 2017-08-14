<?php
/**
 * This file is part of magento-aoe-config-helper for Magento.
 *
 * @package     magento-aoe-config-helper
 * @copyright   Copyright (c) 2017 Newtown-Web OG (http://www.newtown.at)
 * @author      Ingo Fabbri <if@newtown.at>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if (Mage::helper('core')->isModuleEnabled('AvS_ScopeHint')) {
    class Aoe_ConfigHelper_Block_Adminhtml_System_Config_Form_Field_Compatibility
        extends AvS_ScopeHint_Block_AdminhtmlSystemConfigFormField
    {
    }
} else {
    class Aoe_ConfigHelper_Block_Adminhtml_System_Config_Form_Field_Compatibility
        extends Mage_Adminhtml_Block_System_Config_Form_Field
    {
    }
}