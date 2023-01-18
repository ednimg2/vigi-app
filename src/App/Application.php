<?php

namespace VigiApp\App;

class Application
{
    private string $controllerName;
    private string $controllerMethod;

    public function __construct(string $controllerName, string $controllerMethod)
    {
        $this->controllerName = $controllerName;
        $this->controllerMethod = $controllerMethod;
    }

    public function loadController(): AbstractController
    {
        $namespace = 'VigiApp\\Controller\\';
        $controller = $namespace . ucfirst($this->controllerName) . 'Controller';

        // new VigiApp\Controlller\UserController()
        return new $controller();
    }
}