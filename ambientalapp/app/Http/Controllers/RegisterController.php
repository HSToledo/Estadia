<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Municipio;
use App\Models\Escuela;
class RegisterController extends Controller{
    public function create(){
        $municipios= Municipio::all();
        return view('auth.register')->with('municipios',$municipios);
    }

    public function store(){

        $this->validate(request(),[
            
            'password'=>'confirmed',
            
            
        ]);

        $user = User::create(request(['nombre','apellido','email','password','rol','municipio','nivelEducativo','edad','sexo','idEscuela']));

        if($user->rol == 'alumno'){
            $municipios= Municipio::all();
            $escuelas= Escuela::all();
            return view('auth.registerAlumno')->with('municipios',$municipios)->with('escuelas', $escuelas)->with('user',$user);
            
        }else{
            if($user->rol == 'profesor'){
                $municipios= Municipio::all();
                $escuelas= Escuela::all();
                return view('auth.registerProfesor')->with('municipios',$municipios)->with('escuelas', $escuelas)->with('user',$user);
                
            }
        }

        // auth()->login($user);
        // if($user->rol == 'admin'){
        //     return redirect()->to('/admin');
        // }else{
        //     if($user->rol == 'alumno'){
        //         return redirect()->to('/alumno');
        //     }else{
        //         if($user->rol == 'profesor'){
        //             return redirect()->to('/profesor');
        //         }
        //     }
        // }
        
    }



    public function storeAlumno(Request $request){

        

        $alumno =  User::find($request->get('user'));
        $alumno->municipio = $request->get('municipio');
        $alumno->nivelEducativo = $request->get('nivelEducativo');
        $alumno->edad = $request->get('edad');
        $alumno->sexo = $request->get('sexo');
        $alumno->idEscuela = $request->get('escuela');

        $alumno->save();
    
        auth()->login($alumno);
        return redirect()->to('/alumno');
            
        
    }

    public function storeProfesor(Request $request){
        $profe =  User::find($request->get('user'));
        $profe->municipio = $request->get('municipio');
        $profe->edad = $request->get('edad');
        $profe->sexo = $request->get('sexo');
        $profe->idEscuela = $request->get('escuela');

        $profe->save();
    
        auth()->login($profe);
        return redirect()->to('/profesor');
    }



    public function createProfesor(){
        $municipios= Municipio::all();
        $escuelas= Escuela::all();
        return view('auth.register2')->with('municipios',$municipios)->with('escuelas', $escuelas);
    }

    
}
