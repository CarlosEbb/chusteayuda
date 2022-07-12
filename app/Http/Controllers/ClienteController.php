<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;


class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->rol_id == 1)
            return view('admin.clientes.registrarClientes');
        else
            return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datos = $this->validate(request(), [
            'email' => 'email|required|string|unique:users',
            'password' => 'required|string',
            //'name' => 'required|string',
        ]);



        if($request->check_l == 'on'){
            $request['check_logo'] = 1;
        }
        if($request->check_e == 'on'){
            $request['check_encabezado'] = 1;
        }
        if($request->check_n == 'on'){
            $request['check_name'] = 1;
        }else{
            $request['check_name'] = 0;
        }

        $request['rol_id'] = 2;
        $request['password'] = bcrypt($request->password);

        if($request->logo_vista != null){
            $foto = $request->file("logo_vista");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('logo')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['logo'] = '/uploads/logo/'.$foto->getFilename().".".$extension;
        }

        if($request->foto_encabezado_vista != null){
            $foto = $request->file("foto_encabezado_vista");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('foto_encabezado')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto_encabezado'] = '/uploads/foto_encabezado/'.$foto->getFilename().".".$extension;
        }

            $user = User::create($request->all());
            $request['user_id'] = $user->id;

            $cliente = Cliente::create($request->all());

            Session::flash('mensaje','Registrado correctamente');
            //return back();
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if(Auth::user()->rol_id == 1){

            $cliente = Cliente::find($id);
            return view('admin.clientes.editarClientes')->with(compact('cliente'));

        }elseif(Auth::user()->rol_id == 4){
            if($id == Auth::user()->cliente->id){
                $cliente = Auth::user()->cliente;
                return view('admin.clientes.editarClientes')->with(compact('cliente'));
            }else{
                return back();
            }
        }else{
            return back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $user = $cliente->user;
        $datos = $this->validate(request(), [
            'email' => 'email|required|string|unique:users,email,'.$cliente->user->id,
        ]);

        if($request->password ==! null){
            $this->validate($request, [
                'password' => 'required|string',
            ]);
            $request['password'] = bcrypt($request->password);
        }else{
            unset($request['password']);
        }

        if($request->check_l == 'on'){
            $request['check_logo'] = 1;
        }else{
            $request['check_logo'] = 0;
        }
        if($request->check_e == 'on'){
            $request['check_encabezado'] = 1;
        }else{
            $request['check_encabezado'] = 0;
        }
        if($request->check_n == 'on'){
            $request['check_name'] = 1;
        }else{
            $request['check_name'] = 0;
        }

        if($request->logo_vista != null){
            $foto = $request->file("logo_vista");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('logo')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['logo'] = '/uploads/logo/'.$foto->getFilename().".".$extension;
        }

        if($request->foto_encabezado_vista != null){
            $foto = $request->file("foto_encabezado_vista");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('foto_encabezado')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto_encabezado'] = '/uploads/foto_encabezado/'.$foto->getFilename().".".$extension;
        }

        $cliente->user->fill($request->all())->save();

        $cliente->fill($request->all())->save();


        Session::flash('mensaje','Actualizado correctamente');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $user = User::find($cliente->user_id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }

}
