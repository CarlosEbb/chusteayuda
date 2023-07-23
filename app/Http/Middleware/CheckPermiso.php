<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\Permisologia;
class CheckPermiso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $permiso)
    {
        
        if((Auth::user()->rol_id == 1) or (Auth::user()->rol_id == 4)){
            return $next($request);    
        }else{
            
            if($permiso == 1){
                if(Auth::user()->rol_id == 9){
                    return $next($request);    
                }
            }

            
            if($permiso == 2){
                if((Auth::user()->rol_id == 2 or Auth::user()->rol_id == 4) and ($permiso == 2)){
                    return $next($request);    
                }
            }

            if($permiso == 3){
                if((Auth::user()->rol_id == 5) and ($permiso == 3)){
                    return $next($request);    
                }
            }

            if($permiso == 4){
                if((Auth::user()->rol_id == 6) and ($permiso == 4)){
                    return $next($request);    
                }
            }

            if($permiso == 5){
                if((Auth::user()->rol_id == 7) and ($permiso == 5)){
                    return $next($request);    
                }
            }

            if($permiso == 'reportes'){
                if(Permisologia::where('user_id',Auth::user()->id)->where('tipo_reporte_id','!=',null)->count() >= 1){
                    return $next($request);    
                }
            }
            
            if(Permisologia::where('user_id',Auth::user()->id)->where('view_permisologia_id',$permiso)->count() >= 1){
                return $next($request);    
            }
        }
        // opción 1
        abort(404, 'No tienes autorización para ingresar.');
        // Opción 2
        //return redirect('home');
        
    }
}
