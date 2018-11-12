<?php

namespace uvm\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use View;
use Auth;
use Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function validarReferencia(Request $request){
        $credentials = $this->validate(request(),[
            'referencia' => 'required|string',
            'password' => 'required|string',
        ]);

        $usuario = $request->session()->get('usuario');

        $user=NULL;
        $datosReservacionUsuario=NULL;
        if($usuario){
            $user = DB::table('alumno')
            ->where('no_cuenta', $usuario)
            ->where('pass', $credentials['password'])
            ->first();

            if($user)
            $datosReservacionUsuario = DB::table('reservacion')
            ->join('alumno', 'alumno.id', '=', 'reservacion.id_alumno')
            ->where('alumno.id', $user->id)
            ->where('reservacion.id', $credentials["referencia"])
            ->select('alumno.*', 'reservacion.*', 'reservacion.id as id_reservacion')
            ->get();
        }
        
        if($user && $datosReservacionUsuario){
            require_once "libs/Mobile_Detect.php";
            $detect = new Mobile_Detect;
            
            // Any mobile device (phones or tablets).
            if ( $detect->isMobile() ) {
                echo 'movil detectado';
            }
            
            // Any tablet device.
            if( $detect->isTablet() ){
                echo 'tablet detectada';
            }
            return View::make('copia', ['datosReservacionUsuario' => $datosReservacionUsuario]);
        }else{
            return back()->withErrors(['error'=> trans('auth.failed')])
            ->withInput(request($credentials['referencia']));
        }
    }
}
