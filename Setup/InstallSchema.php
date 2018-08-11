<?php

namespace Starter\Example\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Create table 'starter_example'
         */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('starter_example'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'id'
            )
            ->addColumn(
                'first_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT    ,
                30,
                ['nullable' => true, 'default' => null],
                'first_name'
            )
            ->setComment("Starter Example table");
        $setup->getConnection()->createTable($table);
    }
}