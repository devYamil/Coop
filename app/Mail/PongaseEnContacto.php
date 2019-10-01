<?php

namespace Coop\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PongaseEnContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $correo, $mensaje)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $email = $this->view('emails.EmailPongaseEnContacto')->subject("Pongase en contacto");

        return $email;
    }
}
