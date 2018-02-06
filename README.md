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


AdminHelper - для вывода массивов и объектов:
--
```php
<?php
    alpiiscky\simplehelpers\AdminHelper::pre('1');
    alpiiscky\simplehelpers\AdminHelper::code('1');
?>
```

RegularHelper - регулярки и примеры:
--
```php
<?php
    alpiiscky\simplehelpers\RegularHelper::pregMatch($expression, $str);
?>
```

UrlHelper - формирование урла:
--
```php
<?php
    alpiiscky\simplehelpers\UrlHelper::createSlug($str);
?>
```

ArrayHelper - хелпер для массива:
--
```php
<?php
    alpiiscky\simplehelpers\ArrayHelper::mapping($array, 'id', ['code', 'name']);
?>
```

получаем item массивов в виде:
```php
[ 'id' => 'code - name' ]
```