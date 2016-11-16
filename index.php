<?php
/**
 * Created by PhpStorm.
 * User: emilio
 * Date: 16/11/16
 * Time: 15:28
 */

require_once "vendor/autoload.php";

$app = new \Emilio\UERJ\HelloPackage();

echo $app->getHello();

