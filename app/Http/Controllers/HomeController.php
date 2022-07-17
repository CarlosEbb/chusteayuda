<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;
use \App\Models\Reporte;

use Illuminate\Support\Facades\Mail;
use Session;
use Auth;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function contacto(Request $request)
    {
        $datos = $this->validate(request(), [
            'email' => 'required|string',
            'mensaje' => 'required|string',
            'nombre' => 'required|string',
            'asunto' => 'required|string',
            //'name' => 'required|string',
        ]);
        $data=array('to'=> $request->email, 'mensaje' => $request->mensaje, 'nombre' => $request->nombre, 'email' => $request->email, 'asunto' => $request->asunto);

        Mail::send('correos.contacto',$data,function($mensaje) use ($data){
            $mensaje->from(env('MAIL_USERNAME'),'Notificación de Reporte');
            $mensaje->to(env('MAIL_USERNAME_INFO'))->subject('Contacto');
        });

        Session::flash('mensaje','Enviado correctamente');
        return back();
    }

 
}
