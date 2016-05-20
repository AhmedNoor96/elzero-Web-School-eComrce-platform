<?php
/**
 * Created by PhpStorm.
 * User: fcmam5
 * Date: 5/19/16
 * Time: 12:28 AM
 */

function lang($phrase)
{

    static $lang = array(
        //Dashboard phrases
        'HOME_ADMIN' => 'Home',
        'CATEGORIES-ADMIN' => 'Catergories',
        '' => '',
        '' => '',
        '' => '',

    );
    return $lang[$phrase];
}