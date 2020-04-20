<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Consulta;

class MicontroladorMail extends Controller
{
    public function store(Request $request){
        $usuario=new \stdClass();
        $usuario->Nombre=$request->Nombre;
        $usuario->Email=$request->Correo;
        $usuario->Msg=$request->Mensaje;
        //return view('emails.bienvenido',compact('usuario')); 
        $mail=new Consulta($usuario);
        $obj= new \stdClass();
        $obj->respuesta=false;
        Mail::to('hipepay257@hubopss.com')->send($mail);
        if (count(Mail::failures()) > 0){
            $obj->respuesta=true;
            return json_encode($obj);
        }else{
            return json_encode($obj);
        }
    }
    public function contacto(){
        return view('contacto');
    }
}
