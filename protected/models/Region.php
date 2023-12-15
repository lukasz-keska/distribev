<?php

/**
 * Created by PhpStorm.
 * User: rafal
 * Date: 08.06.15
 * Time: 12:16
 */
class Region
{

    public static $wojewodztwa = array(
        0 => 'dolnośląskie',
        1 => 'kujawsko-pomorskie',
        2 => 'lubelskie',
        3 => 'lubuskie',
        4 => 'łódzkie',
        5 => 'małopolskie',
        6 => 'mazowieckie',
        7 => 'opolskie',
        8 => 'podkarpackie',
        9 => 'podlaskie',
        10 => 'pomorskie',
        11 => 'śląskie',
        12 => 'świętokrzyskie',
        13 => 'warmińsko-mazurskie',
        14 => 'wielkopolskie',
        15 => 'zachodniopomorskie'
    );


    public static function getArray()
    {
        $array = array();
        foreach(self::$wojewodztwa as $key => $name) {
            $array[$name] = $name;
        }
        return $array;
    }
}