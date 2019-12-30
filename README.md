Yii2 Nestable
=============
Yii2 Nestable

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist toir427/yii2-nestable "*"
```

or add

```
"toir427/yii2-nestable": "*"
```

to the require section of your `composer.json` file.


Screenshot
----
<img src="https://github.com/toir427/yii2-nestable/raw/master/nestable.png">

Usage
-----

Basic nestables :

```php
<?php use toir427\nestable\Nestable; ?>
<?= Nestable::widget([
               'items' => [
                   [
                       'id'      => 1,
                       'content' => 'Item # 1',
                   ],
                   [
                       'id'      => 2,
                       'content' => 'Item # 2',
                   ],
                   [
                       'id'      => 3,
                       'content' => 'Item # 3',
                   ],
                   [
                       'content'  => 'Item # 4 with children',
                       'id'       => 4,
                       'children' => [
                           [
                               'id'      => 5,
                               'content' => 'Item # 4.1',
                           ],
                           [
                               'id'      => 6,
                               'content' => 'Item # 4.2',
                           ],
                           [
                               'id'      => 7,
                               'content' => 'Item # 4.3',
                           ],
                       ],
                   ],
               ],
           ]); ?>
```

Usage
-----

Drag handler :

```php
<?php use toir427\nestable\Nestable; ?>
<?= DragNestable::widget([
               'items' => [
                   [
                       'id'      => 1,
                       'content' => 'Item # 1',
                   ],
                   [
                       'id'      => 2,
                       'content' => 'Item # 2',
                   ],
                   [
                       'id'      => 3,
                       'content' => 'Item # 3',
                   ],
                   [
                       'content'  => 'Item # 4 with children',
                       'id'       => 4,
                       'children' => [
                           [
                               'id'      => 5,
                               'content' => 'Item # 4.1',
                           ],
                           [
                               'id'      => 6,
                               'content' => 'Item # 4.2',
                           ],
                           [
                               'id'      => 7,
                               'content' => 'Item # 4.3',
                           ],
                       ],
                   ],
               ],
           ]); ?>
```