<?php

namespace App\Http;

class Response {
    // responderemos con una vista 
    protected $view;

    public function __construct($view) {
        $this->view = $view; // home, contact, about...
    }

    // obtener vista
    public function getView() {
        return $this->view;
    }

    public function send(){
        $view = $this->getView();
        
        // función que permite obtener el contenido de ese archivo 
        // por ejemplo: home
        $content = file_get_contents(__DIR__ . "/../../views/$view.php");

        // imprime nuestra plantilla con el contenido dentro 
        require __DIR__ . "/../../views/layout.php";
    }
}

?>