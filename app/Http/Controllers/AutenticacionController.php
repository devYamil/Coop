<?php

namespace Coop\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JWTAuth; // NECESITO LA CLASE JWTAUTH ALIAS
use Tymon\JWTAuth\Exceptions\JWTException; // NECESITO LA CLASE JWTException
use Coop\User;
class AutenticacionController extends Controller
{
    public function autenticar(Request $request){
        $credenciales = $request->only('email', 'password');
        try{
            if (!$token = JWTAuth::attempt($credenciales)){
                return response()->json(['error'=>'credenciales invalidas'], 401);
            }
        }catch (JWTException $e){
            return response()->json(['error'=>'no se creo el tocken'], 500);
        }
        //$currentUser = Auth::user();
        $currentUser = Auth::user();
        return response()->json(['token'=> $token, 'current_user' => $currentUser], 201);
    }
    /*
     * REGISTRAR USUARIOS
     * TIPOS DE USUARIOS .-
     * 0 NORMALES
     * 1 USUARIOS PRESIDENTES DE CADA COOPERATIVA
     * 2 SUPER ADMIN
     * USUARIOS NORMALES ESTARAN CON ID COOPERATIVA 0 PORQUE PUEDEN VER TODAS LAS COOPERATIVAS
     */
    public function registrar(Request $request){
        if($request->json()){
            $name = $request->input('name');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $user = User::where('email', '=', $email)->first();
            if ($user === null) {
                $usuario = User::create([
                    'name' => $name,
                    'id_cooperativa' => 0,
                    'type_user' => 0,
                    'email' => $email,
                    'password' => $password
                ]);
                $token = JWTAuth::fromUser($usuario);
                return response()->json(['token'=>$token], 201);
            }else{
                return response()->json(['error'=>'You user already in use', 'code' => 1000], 400);
            }
        }else{
            return response()->json(['error'=>'Your request not is json', 'code'=> 1001], 400);
        }
    }
    public function getUserData(){
        //code
    }
}
