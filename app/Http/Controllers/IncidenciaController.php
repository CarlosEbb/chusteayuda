<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\User;

use App\Models\Reporte;

use App\Models\Respuesta;
use App\Models\Respuesta_dos;

use App\Models\Cargo;

use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Support\Facades\Mail;

class IncidenciaController extends Controller
{
    private $db = [
        '1' => array('Evaluación del Desarrollo', 1),
    ];

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
        
        $excepto = [];
        $reporte = Reporte::create($request->all());

        $tipo = $request['tipo_id'];


        unset($request['_token']);
        unset($request['nombre_empleado']);
        unset($request['documento_empleado']);
        unset($request['telefono']);
        unset($request['cargo']);
        unset($request['correo']);
        unset($request['lugar']);
        unset($request['cliente_id']);
        unset($request['tipo_id']);

        if($request->imagen != null){
            $foto = $request->file("imagen");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('foto_reporte')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto'] = '/uploads/foto_reporte/'.$foto->getFilename().".".$extension;
        }

        if(($request->imgbase != 'Para los que saben que es esto:')  and ($request->imgbase != null)){
            $img = $this->getB64Image($request->imgbase);
            $img_extension = $this->getB64Extension($request->imgbase);
            $img_name = 'firma'. time() . '.' . $img_extension;
            Storage::disk('images_base64')->put($img_name, $img);
            $request['firma'] = '/uploads/images_base64/'.$img_name;
        }

        if(($request->imgbase2 != 'Para los que saben que es esto:')  and ($request->imgbase2 != null)){
            $img2 = $this->getB64Image($request->imgbase2);
            $img_extension2 = $this->getB64Extension($request->imgbase2);
            $img_name2 = 'firma2'. time() . '.' . $img_extension2;
            Storage::disk('images_base64')->put($img_name2, $img2);
            $request['firma2'] = '/uploads/images_base64/'.$img_name2;
        }

        unset($request['imagen']);
        unset($request['imgbase']);
        unset($request['imgbase2']);

        foreach($request->file() as $name => $doc){
            if($request->$name != null){
                $foto = $request->file($name);
                $extension = $foto->getClientOriginalExtension();
                $url = Storage::disk('foto_reporte')->put($foto->getFilename().".".$extension, File::get($foto));
                $request[$name.'_file'] = '/uploads/foto_reporte/'.$foto->getFilename().".".$extension;
                $excepto[] = $name;
            }
        }

        foreach($request->except($excepto) as $key => $variable){//se le quito el all
            if(($key != 'imagen')){
                if(is_array($variable)){
                    foreach($variable as $sub){
                        if(array_key_exists($tipo, $this->db))
                            if($this->db[$tipo][1] == 1){
                                Respuesta::create([
                                    'reportes_id' => $reporte->id,
                                    'name' => $key,
                                    'respuesta' => $sub,
                                ]);
                            }elseif($this->db[$tipo][1] == 2){
                                Respuesta_dos::create([
                                    'reportes_id' => $reporte->id,
                                    'name' => $key,
                                    'respuesta' => $sub,
                                ]);
                            }

                    }
                }else{
                    if($this->db[$tipo][1] == 1){
                        Respuesta::create([
                            'reportes_id' => $reporte->id,
                            'name' => $key,
                            'respuesta' => $variable,
                        ]);
                    }elseif($this->db[$tipo][1] == 2){
                        Respuesta_dos::create([
                            'reportes_id' => $reporte->id,
                            'name' => $key,
                            'respuesta' => $variable,
                        ]);
                    }

                }
            }
        }

        if(env('APP_EMAIL')){
            $this->correo($reporte->id);
        }

        return redirect('/reporte-finalizado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $excepto = [
            20,
            21,
            22,
            23,
        ];

        $incidencias = Reporte::where('cliente_id',$id)->whereNotIn('tipo_id', $excepto)->get();
        if($request->filtro != null){
            $incidencias = $incidencias->where('tipo_id', $request->filtro);
        }

        if (Auth::check()) {

            if(Auth::user()->rol_id != 1){
                $cliente = Cliente::find(Auth::user()->cliente->id);
                if($id == Auth::user()->cliente->id){
                    return view('incidencias')->with(compact('incidencias','id', 'cliente','excepto'));
                }else{
                    return back();
                }
            }else{
                $cliente = Cliente::find($id);
                foreach($incidencias as $inc){
                    $inc->fill(['notificado' => true])->save();
                }
                return view('incidencias')->with(compact('incidencias','id', 'cliente','excepto'));
            }
        }else{

            return redirect('login');
        }


    }

    public function incidencia($id)
    {
        $reporte = Reporte::find($id);
            if($reporte->tipo_id == 1)
                return view('admin.incidencias.consultar_reportes.ConsultarInformeEvaluacionDelDesarrollo')->with(compact('reporte'));
            
    }

    public function incidenciaEditar($id)
    {
        $reporte = Reporte::find($id);

        if($reporte->tipo_id == 18)
            return view('admin.incidencias.editar_reportes.ConsultarInformeEvaluacionDelDesarrollo')->with(compact('reporte'));

    }

    public function incidenciaPDF($id)
    {
            $reporte = Reporte::find($id);
            if($reporte->tipo_id == 1){
                $pdf = \PDF::loadView('pdf.InformeEvaluacionDelDesarrollo', compact('reporte'));
                //return $pdf->download('ReporteInspeccionPreoperacionalVehiculos.pdf');
                return $pdf->stream('InformeEvaluacionDelDesarrollo.pdf');

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


        $excepto = [];

        $reporte = Reporte::find($id);
        $reporte->fill($request->all())->save();

        foreach($reporte->respuestas as $respuestas){
            $respuestas->delete();
        }
        $tipo = $request['tipo_id'];


        unset($request['_token']);
        unset($request['nombre_empleado']);
        unset($request['documento_empleado']);
        unset($request['telefono']);
        unset($request['cargo']);
        unset($request['correo']);
        unset($request['lugar']);
        unset($request['cliente_id']);
        unset($request['tipo_id']);

        if($request->imagen != null){
            $foto = $request->file("imagen");
            $extension = $foto->getClientOriginalExtension();
            $url = Storage::disk('foto_reporte')->put($foto->getFilename().".".$extension, File::get($foto));
            $request['foto'] = '/uploads/foto_reporte/'.$foto->getFilename().".".$extension;
        }

        if(($request->imgbase != 'Para los que saben que es esto:')  and ($request->imgbase != null)){
            $img = $this->getB64Image($request->imgbase);
            $img_extension = $this->getB64Extension($request->imgbase);
            $img_name = 'firma'. time() . '.' . $img_extension;
            Storage::disk('images_base64')->put($img_name, $img);
            $request['firma'] = '/uploads/images_base64/'.$img_name;
        }

        if(($request->imgbase2 != 'Para los que saben que es esto:') and ($request->imgbase2 != null)){
            $img2 = $this->getB64Image($request->imgbase2);
            $img_extension2 = $this->getB64Extension($request->imgbase2);
            $img_name2 = 'firma2'. time() . '.' . $img_extension2;
            Storage::disk('images_base64')->put($img_name2, $img2);
            $request['firma2'] = '/uploads/images_base64/'.$img_name2;
        }
        unset($request['imagen']);
        unset($request['imgbase']);
        unset($request['imgbase2']);

        foreach($request->file() as $name => $doc){
            if($request->$name != null){
                $foto = $request->file($name);
                $extension = $foto->getClientOriginalExtension();
                $url = Storage::disk('foto_reporte')->put($foto->getFilename().".".$extension, File::get($foto));
                $request[$name.'_file'] = '/uploads/foto_reporte/'.$foto->getFilename().".".$extension;
                $excepto[] = $name;
            }
        }

        foreach($request->except($excepto) as $key => $variable){//se le quito el all
            if(($key != 'imagen')){
                if(is_array($variable)){
                    foreach($variable as $sub){
                        if(array_key_exists($tipo, $this->db))
                            if($this->db[$tipo][1] == 1){
                                Respuesta::create([
                                    'reportes_id' => $reporte->id,
                                    'name' => $key,
                                    'respuesta' => $sub,
                                ]);
                            }elseif($this->db[$tipo][1] == 2){
                                Respuesta_dos::create([
                                    'reportes_id' => $reporte->id,
                                    'name' => $key,
                                    'respuesta' => $sub,
                                ]);
                            }

                    }
                }else{
                    if($this->db[$tipo][1] == 1){
                        Respuesta::create([
                            'reportes_id' => $reporte->id,
                            'name' => $key,
                            'respuesta' => $variable,
                        ]);
                    }elseif($this->db[$tipo][1] == 2){
                        Respuesta_dos::create([
                            'reportes_id' => $reporte->id,
                            'name' => $key,
                            'respuesta' => $variable,
                        ]);
                    }

                }
            }
        }

        if(env('APP_EMAIL')){
            $this->correo($reporte->id);
        }

        return redirect('/reporte-finalizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Reporte::find($id)->delete();
        Session::flash('mensaje','Eliminado correctamente');
        return back();
    }

    public function SolicitarEliminarReporteEmail($id)
    {
        $reporte = Reporte::find($id);

        $data=array('empresa'=> $reporte->cliente->user->name, 'nombre_empleado' => $reporte->nombre_empleado, 'tipo' => $reporte->tipo_id, 'reporte' => $reporte);

        Mail::send('correos.SolicitudEliminarReporte',$data,function($mensaje) use ($data){
            $mensaje->from(env('MAIL_USERNAME'),'Notificación');
            $mensaje->to(env('MAIL_USERNAME'))->subject('Solicitud para eliminar reporte');
        });

        Session::flash('mensaje','Solicitud enviada correctamente');
        return back();
    }


    public function correo($id)
    {
        $reporte = Reporte::find($id);
        $data=array('empresa'=> $reporte->cliente->user->name, 'nombre_empleado' => $reporte->nombre_empleado, 'tipo' => $reporte->tipo_id, 'reporte' => $reporte);

        Mail::send('correos.incidencia',$data,function($mensaje) use ($data){
            $mensaje->from(env('MAIL_USERNAME'),'Notificación');
            $mensaje->to(env('MAIL_USERNAME'))->subject('Notificación Sistemas de Gestión de Seguridad
            y Salud en el trabajo.');
        });

        Session::flash('mensaje','Enviado correctamente');
        return back();
    }

    public function qr($id)
    {
        $clientes = Cliente::where('id', $id)->get();
        return view('admin.incidencias.consultarCodigoQR')->with(compact('clientes'));;
    }


    public function getB64Image($base64_image){
        // Obtener el String base-64 de los datos
        $image_service_str = substr($base64_image, strpos($base64_image, ",")+1);
        // Decodificar ese string y devolver los datos de la imagen
        $image = base64_decode($image_service_str);
        // Retornamos el string decodificado
        return $image;
   }

   public function getB64Extension($base64_image, $full=null){
        // Obtener mediante una expresión regular la extensión imagen y guardarla
        // en la variable "img_extension"
        preg_match("/^data:image\/(.*);base64/i",$base64_image, $img_extension);
        // Dependiendo si se pide la extensión completa o no retornar el arreglo con
        // los datos de la extensión en la posición 0 - 1
        return ($full) ?  $img_extension[0] : $img_extension[1];
    }
}
