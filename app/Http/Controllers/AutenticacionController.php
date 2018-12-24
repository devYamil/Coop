<?php

namespace Coop\Http\Controllers;
use Illuminate\Http\Request;
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

        return response()->json(['token'=> $token], 201);
    }
    public function registrar(Request $request){
        if($request->json()){
            $name = $request->input('name');
            $email = $request->input('email');
            $password = bcrypt($request->input('password'));
            $user = User::where('email', '=', $email)->first();
            if ($user === null) {
                $usuario = User::create([
                    'name' => $name,
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
