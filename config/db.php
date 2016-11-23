<?php


if (is_file(__DIR__ . '/db.local.php')) {
    return include(__DIR__ . '/db.local.php');
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
