<?php


namespace App\Http\Controllers; //1.
// use App\Http\Response; // 2.

class HomeController {
    public function index(){
        //con el backslash al principio, comienza desde la carpeta raiz
        // return new \App\Http\Response('home'); //1.
        // return Response('home'); // 2.

        // aplicando la configuración del archivo helpers.php
        return view('home');
    }
}

?>