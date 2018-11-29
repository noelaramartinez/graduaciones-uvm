<?php

namespace uvm\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Auth;
use Log;

class ReferenciaContorller extends Controller
{
    //

    public function validarReferencia(Request $request){
        $credentials = $this->validate(request(),[
            'referencia' => 'required|string',
            'password' => 'required|string',
        ]);

        $usuario = $request->session()->get('usuario');
        $datosReservacionUsuario = $request->session()->get('datosReservacionUsuario');

        $user = DB::table('alumno')
        ->where('no_cuenta', $usuario)
        ->where('pass', $credentials['password'])
        ->first();
        
        if($user){
            return View::make('copia', ['datosReservacionUsuario' => $datosReservacionUsuario]);
        }else{
            return back()->withErrors(['error'=> trans('auth.failed')])
            ->withInput(request($usuario));
        }
    }
    
    public function haciacontacto(Request $request){

        $nombres = "";
        $email = "";
        $alumnouvm = "s";
        $nivelacad = "Licenciatura";
        $movil = "";
        $campus = "";
        $comentarios = "";
        $fechacita = "";
        $responsedata = [];

        
        $nombres = $request->input('nombres');
        array_push($responsedata,$nombres);
        $email = $request->input('email');
        array_push($responsedata,$email);
        $alumnouvm = $request->input('alumnouvm');
        array_push($responsedata,$alumnouvm);
        if($alumnouvm!="si"){
            $nivelacad = "";
            $campus = "";
            array_push($responsedata,$nivelacad);
            array_push($responsedata,$campus);
        }else{
            $nivelacad = $request->input('nivel');
            $campus = $request->input('campus');
            array_push($responsedata,$nivelacad);
            array_push($responsedata,$campus);
        }
        $movil = $request->input('telmovil');
        array_push($responsedata,$movil);
        $comentarios = $request->input('comentarios');
        if($comentarios==NULL){
            $comentarios = "";
        }
        array_push($responsedata,$comentarios);
        $fechacita = $request->input('fechacita');
        if($fechacita==NULL){
            $fechacita = '01/01/1900';
        }
        array_push($responsedata,$fechacita);

        Log::info("parametro nonmbre obtenido: " . $nombres);

        //echo "response data nombres: " . $responsedata[1];
        //echo "response data es uvm: " . $responsedata[2];

        //return redirect()->route('contacto', ['responsedata' => $responsedata]);
        return View::make('contacto', ['responsedata' => $responsedata]);
    }
}