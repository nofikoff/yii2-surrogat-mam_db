<?php

//
//// для авторизациии
//include('../../wp-load.php');

// в экшены
//if (!is_user_logged_in())
//    return $this->redirect('/wp-admin');

// https://klienti-sm.deti-mama.ru/base/web/site/login


// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
