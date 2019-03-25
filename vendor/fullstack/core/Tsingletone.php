<?php
/**
 * Created by PhpStorm.
 * User: narutoskee
 * Date: 023 23 03 19
 * Time: 17:25
 */

namespace fullstack;


trait Tsingletone
{

    private static $instance;
    public static function instance(){
        if(self::$instance === null):
            self::$instance = new self;
        endif;
        return self::$instance;
    }
}