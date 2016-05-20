<?php
/**
 * Created by PhpStorm.
 * User: fcmam5
 * Date: 5/19/16
 * Time: 12:16 AM
 */
include 'conf.php';
//Routes
$tpl = 'includes/templates/'; //Template directory
$css = 'layout/css/'; //CSS dirrectory
$js = 'layout/js/'; //JS directory
$lang = 'includes/languages/'; //Language directory

//Include the important files
include $lang . 'english.php';
include $tpl . "header.inc";
//Include navbar on all pages expeect the one with $noNavbar variable
if(!isset($noNavbar)){
    include $tpl . 'navbar.inc';
}