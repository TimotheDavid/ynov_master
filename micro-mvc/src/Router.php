<?php




namespace MVC;

use Exception;

class Router {

  protected $routes = [];


  public function addRoutes(string $route, string $controller, string $action) : void {
    $this->routes[$route] = ['controller' => $controller, 'action' => $action];
  }

  public function dispatch($uri) {

        if(array_key_exists($uri, $this->routes)) {
          $controller = $this->routes[$uri]['controller'];
          $action = $this->routes[$uri]['action'];
          print_r($controller, $action);
          $controller = new $controller();
          $controller->$action();
        } else {
          throw new Exception("not found");
        
        
        }
  }





}