Terbilang Rupiah
================
Extensions to convert numbers into text in rupiah (Terbilang dalam Rupiah).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dickyermawan/yii2-terbilang-rupiah "~1.0"
```

or add

```
"dickyermawan/yii2-terbilang-rupiah": "~1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```
<?= \dickyermawan\terbilang\Rupiah::terbilang(5500); ?>  // Lima Ribu Lima Ratus
```