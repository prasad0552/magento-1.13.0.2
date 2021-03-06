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
 * @category    Enterprise
 * @package     Enterprise_Rma
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */

/** @var $installer Enterprise_Rma_Model_Resource_Setup */
$installer = $this;

/**
 * Add new field to 'enterprise_rma/rma_shipping_label'
 */
$installer->getConnection()
    ->addColumn(
        $installer->getTable('enterprise_rma/rma_shipping_label'),
        'is_admin',
        array(
            'TYPE' => Varien_Db_Ddl_Table::TYPE_SMALLINT,
            'LENGTH' => 6,
            'COMMENT' => 'Is this Label Created by Merchant',
        )
    );

/**
 * Add new field 'protect_code' to RMA table
 */
$installer->getConnection()
    ->addColumn(
        $installer->getTable('enterprise_rma/rma'),
        'protect_code',
        array(
            'TYPE' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'LENGTH' => 255,
            'COMMENT' => 'Protect Code',
        )
    );
