<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SessionsController extends Controller{
    
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o contraseña son incorrectos, por favor intenta de nuevo',
            ]);
        }else{
            if(auth()->user()->rol == 'admin'){
                return redirect()->route('admin.index');
            }else{
                if(auth()->user()->rol == 'profesor'){
                    return redirect()->route('profesor.index');
                }else{
                    if(auth()->user()->rol == 'alumno'){
                        return redirect()->route('alumno.index');
                    }else{
                        return redirect()->route('main');
                    }
                }
            }
        }

        
        
    }

    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
