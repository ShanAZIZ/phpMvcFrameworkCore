<?php


namespace shan\mvcPhpCore\exception;


class NotFoundException extends \Exception
{
    protected $message = "page not found";
    protected $code = 404;
}