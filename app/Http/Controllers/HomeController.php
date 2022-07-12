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
        //$this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            if(Auth::user()->rol_id == 1){
                $clientes = Cliente::all();
                return view('home')->with(compact('clientes'));
            }else
                return back();

        }else{
            return redirect('/');
        }
    }
    
    public function contacto(Request $request)
    {
        $data=array('to'=> $request->email, 'mensaje' => $request->mensaje, 'nombre' => $request->nombre, 'email' => $request->email, 'asunto' => $request->asunto);

        Mail::send('correos.contacto',$data,function($mensaje) use ($data){
            $mensaje->from(env('MAIL_USERNAME'),'Notificación de Reporte');
            $mensaje->to(env('MAIL_USERNAME'))->subject('Contacto');
        });

        Session::flash('mensaje','Enviado correctamente');
        return back();
    }

    public function incidencias(Request $request, $id)
    {
        if($request->tipo == 1)
            return redirect('/evaluacion-del-desarrollo?cliente_id='.$id);

    }
    
}
