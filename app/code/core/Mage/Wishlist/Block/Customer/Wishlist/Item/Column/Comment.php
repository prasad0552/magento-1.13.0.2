<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Wishlist
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/**
 * Wishlist block customer item cart column
 *
 * @category    Mage
 * @package     Mage_Wishlist
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Wishlist_Block_Customer_Wishlist_Item_Column_Comment
    extends Mage_Wishlist_Block_Customer_Wishlist_Item_Column
{
    /**
     * Retrieve column javascript code
     *
     * @return string
     */
    public function getJs()
    {
        return parent::getJs() . "
        function focusComment(obj) {
            if( obj.value == '" . $this->helper('wishlist')->defaultCommentString() . "' ) {
                obj.value = '';
            } else if( obj.value == '' ) {
                obj.value = '" . $this->helper('wishlist')->defaultCommentString() . "';
            }
        }
        ";
    }
}
