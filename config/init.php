<?php
define("DEBUG",1); // constant for debug 0 or 1
define("ROOT",dirname(__DIR__));// constant fot dir path
define("WWW",ROOT.'/public');//cat public site files
define("APP",ROOT.'/app');//main cat for mvc
define("CORE",ROOT.'/vendor/fullstack/core');//cat for core files
define("LIBS",ROOT.'/vendor/fullstack/core/libs');// cat for libs
define("CACHE",ROOT.'/tmp/cache');// cat for temp files
define("CONF",ROOT.'/config');//cat for configuration files
define("VENDOR",ROOT.'/vendor');//vendor cat path
define("LAYOUT",'default');
//http://fullstack.of.by/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://fullstack.of.by/public/i
$app_path = preg_replace("#[^/]+$#",'',$app_path);
//http://fullstack.of.by
$app_path = str_replace('/public/','',$app_path);

define("PATH",$app_path);//const domen path
define("ADMIN",PATH.'/admin');// admin cat const path
require_once VENDOR.'/autoload.php';// include composer autoload
