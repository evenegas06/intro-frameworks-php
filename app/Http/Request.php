<?php

// estructura de carpetas donde vive mi clase
namespace App\Http;

class Request {
    //propiedades de la clase 
    protected $segments = [];
    protected $controller;
    protected $method;

    // constructor de la clase al inicializarla
    public function __construct(){
        $this->segments = explode('/', $_SERVER['REQUEST_URI']); // explode: convertir string en array

        // var_dump($_SERVER['REQUEST_URI']); // imprime la url ignorando el nombre del dominio /controller 
        // var_dump($this->segments);

        $this->setController();
        $this->setMethod();
    }

    //definir el controlador
    public function setController(){
        // si la ruta despues del dominio (segmento 4 en este caso) esta vacia, por defecto redireccionará a 'home'; si no redirecciona a dominio/segmanto[4](controlador)
        $this->controller = empty($this->segments[4])
        ? 'home'
        : $this->segments[4];
    }

    // definir el metodo
    public function setMethod(){
        // si la ruta despues del dominio y controlador esta vacia por defecto redirecciona a index; si no redirecciona a dominio/controlador/segmento[5](metodo)
        $this->method = empty($this->segments[5])
        ? 'index'
        : $this->segments[5];
    }

    // Obtener el controlador
    public function getController(){
        // si obtenemos 'home', el resultado sería 'HomeController'
        $controller = ucfirst($this->controller); // Colocar la primera letra en mayuscula

        return "App\Http\Controllers\\{$controller}controller";
    }

    // Obtener el metodo
    public function getMethod(){
        return $this->method;
    }

    // Metodo para accionar toda la configuración anterior
    public function send(){
        $controller = $this->getController();
        $method = $this->getMethod();

        // Disparar y ejecutar un controlador 
        $response = call_user_func([
            new $controller, 
            $method
        ]); // función para ejecutar archivos y metodos
        
        $response->send();
    }
}

?>