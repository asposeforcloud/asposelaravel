[![PHP version](https://badge.fury.io/ph/aspose%2Fcloud-laravel.svg)](http://badge.fury.io/ph/aspose%2Fcloud-laravel)

#Aspose Cloud for Laravel

This package allows you to work with Aspose Cloud SDK in your Laravel 4 & 5 applications quickly and easily. 


Installation
----------------------------------

Add the following line to your composer.json file.

```json
require: {	
		"aspose/cloud-laravel": "~1.0"
}
```

Run from terminal.
```
composer update
```

Laravel 4 Integration
----------------------------------

Add package to the list of providers. In `config/app.php`, add the following line to the providers array.
```
'Aspose\Cloud\CloudServiceProvider',
```

Publish config file from the terminal.
```
php artisan config:publish aspose/cloud-laravel
```

Edit the new config file in the `config/packages/aspose/cloud-laravel`, enter `appSID` & `appKey`.
```php
return array(
	'baseUri' => 'http://api.aspose.com/v1.1',
	'appSID' => '',
	'appKey' => ''
);
```

In `config/packages/aspose`, rename `cloud-laravel` to `cloud`

Laravel 5 Integration
----------------------------------
Add package to the list of providers. In `config/app.php`, add the following line to the providers array.
```
'Aspose\Cloud\CloudServiceProvider',
```

Publish config file from the terminal.
```
php artisan vendor:publish
```

Edit the new config file in the `config/asposecloud.php`, enter `appSID` & `appKey`.
```php
return array(
	'baseUri' => 'http://api.aspose.com/v1.1',
	'appSID' => '',
	'appKey' => ''
);
```

Usage
----------------------------------

Anywhere in your application when you need to access class, just do:
```
$object = Aspose::get($moduleName, $className, $fileName);
```

This will return you object of class and you can access properties and methods of class.

In Larave 5, use following namespace at the top of your file.
```php
use Aspose;
```

Please visit [Wiki](https://github.com/asposeforcloud/asposelaravel/wiki) for articles and examples.

Documentation
----------------------------------
For most complete documentation of the plugin, please visit [Docs Wiki](http://www.aspose.com/docs/display/totalcloud/1.+Aspose.Total+Cloud+for+Laravel).


Start a Free Trail Today
========================

Start a free trial today – all you need is to [sign up](https://cloud.aspose.com/SignUp) with Aspose for Cloud service. Once you have signed up, you are ready to try powerful file processing features offered by Aspose for Cloud.
