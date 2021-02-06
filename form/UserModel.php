<?php


namespace shan\mvcPhpCore\form;


abstract class UserModel extends \shan\mvcPhpCore\DbModel
{

    abstract public function getDisplayName(): string;
}