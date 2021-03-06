Fabriciorabelo Modules
===================
[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square)](http://laravel.com)
[![Source](http://img.shields.io/badge/source-fabriciorabelo/modules-blue.svg?style=flat-square)](https://github.com/fabriciorabelo/modules)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

Fabriciorabelo Modules is a simple package to allow the means to separate your Laravel 5 application out into modules. Each module is completely self-contained allowing the ability to simply drop a module in for use.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

Documentation
-------------
You will find user friendly and updated documentation in the wiki here: [Fabriciorabelo Modules Wiki](https://github.com/fabriciorabelo/modules/wiki)

Quick Installation
------------------
Begin by installing the package through Composer.

```
composer require "fabriciorabelo/modules=~1.0.1"
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider

```php
Fabriciorabelo\Modules\ModulesServiceProvider::class,
```

#### Facade

```php
'Module' => Fabriciorabelo\Modules\Facades\Module::class,
```

And that's it! With your coffee in reach, start building out some awesome modules!
