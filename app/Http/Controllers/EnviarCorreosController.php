<?php
namespace Coop\Http\Controllers;
use Coop\Mail\PongaseEnContacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EnviarCorreosController extends Controller
{
    public function enviarPongaseEnContacto(Request $request){

        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $mensaje = $request->input('mensaje');

        Mail::to('knt_277@hotmail.es')->send(new PongaseEnContacto($nombre, $correo, $mensaje));
    }
}

?>