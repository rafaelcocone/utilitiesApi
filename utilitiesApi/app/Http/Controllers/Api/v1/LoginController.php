<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
*/
use App\Models\User;

class LoginController extends Controller
{
    
    public function store(Request $request){

       /* $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'devise_name' => 'required',
        ]);
*/
        $user = User::where('email',$request->email)->first();

        return $user;

        /*if(!$user || Hash::check($request->password, $user->password )){
            return resonse()->json([
                'mensaje' => "LAs credenciales son incorrectas" //422
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }*/
/*
        return renspose()->json([
            'data' => [
                'atributes' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'token' => $token->createToken($request->devise_name)->plainTextToken,
            ]
        ]);
*/
    }
}
