# Magento Starter Plugin

Setup your Magento Plugin - Step By Step Guide ( * Work In Progress * )

## Expectations
This README is a work in progress as well - The Instructions will grow and evolve - Below is all example README 

## Getting Started
### Register Plugin

Edit registraton.php - Change 'Starter_Example'  

```
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Starter_Example',
    __DIR__
);
```
### Module

Edit Module - etc/module.xml - Change 'Starter_Example' and setup_version (if applicalble)

```
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="Starter_Example" setup_version="0.0.1">
    </module>
</config>
```

### Composer

Edit Composer File - Put Your Plugin Name in the name property and in the autoload / psr4 section


## Routes

Routes are registered through XML

Go to etc/frontend/routes

frontName will be part of your route -- Once again , change module name

```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="standard">
        <route id="example" frontName="example">
            <module name="Starter_Example" />
        </route>
    </router>
</config>
```


## Database

In the Setup Folder change table name to your new table 

```
$table = $setup->getConnection()->newTable($setup->getTable('starter_slc'))
```

Add Your Columns - This is an id column
```
->addColumn(
    'id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
    'id'
)
```

