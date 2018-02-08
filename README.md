# Magento2-Create-New-Module
Learn how to create a hello world module in Magento 2
## Special commands while creating a custom modules

To show all the modules with status in Magento 2
```php
php bin/magento module:status
```
To enable a module in Magento 2
```php
php bin/magento module:enable <NameSpace_ModuleName>
```
After you enable the module, you have to run the following command
```php
php bin/magento setup:upgrade
```
