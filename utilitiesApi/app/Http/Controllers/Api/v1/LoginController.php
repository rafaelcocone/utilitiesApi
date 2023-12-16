<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;

class LoginController extends Controller
{
    
    public function store(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'devise_name' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();

        if(!$user || Hash::check($request->password, $user->password )){
         
            return response()->json([
                'mensaje' => "LAs credenciales son incorrectas" //422
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return response()->json([
            'data' => [
                'atributes' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ],
                'token' => $user->createToken($request->devise_name)->plainTextToken,
            ]
        ]);

    }
}
