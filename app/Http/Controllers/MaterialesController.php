<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Material;
use \App\Models\ImageMaterial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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
            //'foto' => 'required|mimes:jpg,jpeg,bmp,png',
            'file' => 'required|mimes:pdf',
        ]);
       
        if($request->file != null){
            $foto = $request->file("file");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('archivos')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['archivo'] = '/uploads/archivos/'.$foto->getFilename().".".$extension;
        }
        
        $materiales = Material::create($request->all());


        if($request->hasFile('foto')) {
            $fotos = $request->file('foto');
            foreach ($fotos as $foto) {
                $extension = $foto->getClientOriginalExtension();
                $ruta = Str::uuid() . '.' . $extension;
                Storage::disk('materiales')->put($ruta, File::get($foto));

                ImageMaterial::create([
                    'material_id' => $materiales->id,
                    'ruta' => '/uploads/materiales/'.$ruta,
                ]);
            }
        }

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
        $material = Material::find($id);
        if($material != null){
            return view('admin.materiales.editarMateriales', compact('material'));
        }
        
        return back();
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
        $materiales = Material::find($id);

        
        $arrayValidate = [
            'nombre' => 'required',
            'descripcion' => 'required',
        ];
        if($request->file != null){
            $arrayValidate['file'] = 'required|mimes:pdf';
        }
        //if($request->foto != null){
            //$arrayValidate['foto'] = 'required|mimes:jpg,jpeg,bmp,png';
        //}
        
        $datos = $this->validate(request(), $arrayValidate);
       
        if($request->file != null){
            $foto = $request->file("file");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('archivos')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['archivo'] = '/uploads/archivos/'.$foto->getFilename().".".$extension;
        }


        // Obtener todas las imágenes relacionadas con el material
        $imagenes = ImageMaterial::where('material_id', $materiales->id)->get();

        // Eliminar cada imagen y su archivo asociado
        foreach ($imagenes as $imagen) {
            $location = 'materiales';
            Storage::disk($location)->delete(str_replace('/uploads/'.$location.'/','',$imagen->ruta));
            $imagen->delete();
        }


        if($request->hasFile('foto')) {
            $fotos = $request->file('foto');
            foreach ($fotos as $foto) {
                $extension = $foto->getClientOriginalExtension();
                $ruta = Str::uuid() . '.' . $extension;
                Storage::disk('materiales')->put($ruta, File::get($foto));

                ImageMaterial::create([
                    'material_id' => $materiales->id,
                    'ruta' => '/uploads/materiales/'.$ruta,
                ]);
            }
        }

        $materiales = Material::find($id);
        $materiales->fill($request->all())->save();


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
        $user = Material::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }
}
