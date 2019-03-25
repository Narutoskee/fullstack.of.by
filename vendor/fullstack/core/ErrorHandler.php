<?php
/**
 * Created by PhpStorm.
 * User: narutoskee
 * Date: 023 23 03 19
 * Time: 18:05
 */

namespace fullstack;


class ErrorHandler
{
    public function __construct()
    {
        if (DEBUG):
            error_reporting(-1);
        else:
            error_reporting(0);
            endif;
            set_exception_handler($this, 'exceptionHandler');
    }
    public function exceptionHandler($error){

    }
    protected  function logErrors( $message ='', $file ='', $line =''){
    error_log("[". date('Y-m-d H:i:s') ."] Текст ошибки:{$message} | Файл: {$file} | Строка: {$line}\n***********************\n ",3,ROOT.'/tmp/erros.log');
    }
    protected function displayError($errrno,$errstr,$errline, $responce=404){
    http_response_code($responce);
    if ($responce== 404 && !DEBUG):
        require WWW.'/errors/404.php';
    endif;
    }

}