<?php


namespace App\Http\Controllers; //1.
// use App\Http\Response; // 2.

class ContactController {
    public function index(){
        //con el backslash al principio, comienza desde la carpeta raiz
        return new \App\Http\Response('contact'); //1.
        // return Response('home'); // 2.
        
    }
}

?>