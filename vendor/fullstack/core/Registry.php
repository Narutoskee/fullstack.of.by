<?php
/**
 * Created by PhpStorm.
 * User: narutoskee
 * Date: 023 23 03 19
 * Time: 17:23
 */

namespace fullstack;


class Registry
{
    use Tsingletone; // copy paste cod for singletone patern
    protected static $properties =[];
    public function setProperty($name,$value){
        self::$properties[$name] = $value; // put prop name into value
    }
    public function getProperty($name){
        if (isset(self::$properties[$name])):
            return self::$properties[$name]; // return prop if find
            endif;
        return null; // nothing to show
    }

    public function getProperties(){
        return self::$properties;
    }
}