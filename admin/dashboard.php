<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/20/16
 * Time: 10:26 AM
 */
session_start();
$noNavbar ='';
if (isset($_SESSION['Username'])) {
    include 'init.php';
    echo "Welcome";
    include $tpl . 'footer.inc';
} else {
    header('Location: index.php');
    exit();
}
