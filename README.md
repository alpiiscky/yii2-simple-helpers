Simple Helpers
============
Подборка статичных классов для работы

Установка
------------
Выполните 

```
composer require alpiiscky/yii2-simple-helpers "*"
```

или добавьте

```
"alpiiscky/yii2-simple-helpers": "*"
```

в раздел require вашего файла `composer.json`.

Использование
-----

AdminHelper - для вывода массивов и объектов:

```php
<?php
    alpiiscky\simplehelpers\AdminHelper::pre('1');
    alpiiscky\simplehelpers\AdminHelper::code('1');
?>
```

RegularHelper - регулярки и примеры:

```php
<?php
    alpiiscky\simplehelpers\RegularHelper::pregMatch($expression, $str);
?>
```

UrlHelper - формирование урла:

```php
<?php
    alpiiscky\simplehelpers\UrlHelper::createSlug($str);
?>
```