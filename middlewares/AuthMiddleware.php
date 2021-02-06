<?php


namespace shan\mvcPhpCore\middlewares;


use shan\mvcPhpCore\Application;
use shan\mvcPhpCore\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions;

    /**
     * AuthMiddleware constructor.
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }




    public function execute()
    {
        if(Application::isGuest()){
            if(empty($this->actions) || in_array(Application::$app->controller->actions, $this->actions)){
                throw new ForbiddenException();
            }
        }
    }
}