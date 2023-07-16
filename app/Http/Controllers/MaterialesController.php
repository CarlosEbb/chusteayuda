<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Material;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Redirect;
use Session;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png',
            'file' => 'required|mimes:pdf',
        ]);
        
        if($request->file != null){
            $foto = $request->file("file");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('archivos')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['archivo'] = '/uploads/archivos/'.$foto->getFilename().".".$extension;
        }

        if($request->foto != null){
            $foto = $request->file("foto");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('materiales')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['imagen'] = '/uploads/materiales/'.$foto->getFilename().".".$extension;
        }

        $materiales = Material::create($request->all());

        Session::flash('mensaje','Registrado correctamente');
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
        $material = Material::find($id);
        if($material != null){
            return view('showMaterial', compact('material'));
        }
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Material::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }
}
