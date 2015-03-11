Yii2 Material Design and Bootstrap Theme
=================
Theme for Yii2 Web Application

Installation
------------

```
php composer.phar require --prefer-dist kongoon/yii2-theme-material "*"
```

or add 

```
"kongoon/yii2-theme-material": "*"
```
to the require section of your composer.json file.

Usage
-----

Open your layout views/layouts/main.php and add

```
use kongoon\theme\material;

material\MaterialAsset::register($this);
```
