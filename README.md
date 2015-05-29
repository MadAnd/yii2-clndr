# CLNDR asset for Yii2
Provides the asset bundle for easy integration of [CLNDR](https://github.com/kylestetz/CLNDR) into your Yii2 application.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "madand/yii2-clndr:*"
```

or add

```
"madand/yii2-clndr": "*"
```

to the `require` section of your `composer.json` file.


## Usage

In the view file register the asset:

```php
\madand\clndr\ClndrAsset::register($this);
```


## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
