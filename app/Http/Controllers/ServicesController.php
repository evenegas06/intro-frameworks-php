<?php


namespace App\Http\Controllers; //1.
// use App\Http\Response; // 2.

class ServicesController {
    public function index(){
        //con el backslash al principio, comienza desde la carpeta raiz
        return new \App\Http\Response('services'); //1.
        // return Response('home'); // 2.
        
    }
}

?>