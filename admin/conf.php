<?php
/**
 * Created by PhpStorm.
 * User: fcmam5
 * Date: 5/19/16
 * Time: 1:07 AM
 */
 $dsn = 'mysql:host=localhost;dbname=shop';
 $user = 'root';
 $pass = '';
 $option = array(
     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
 );

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Failed to Connect" . $e->getMessage();
}
;