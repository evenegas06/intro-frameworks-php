<?php


namespace App\Http\Controllers; //1.

class ContactController {
    public function index(){
        //con el backslash al principio, comienza desde la carpeta raiz
        // return new \App\Http\Response('contact'); //1.

          // aplicando la configuración del archivo helpers.php
          return view('contact');
        
    }
}

?>