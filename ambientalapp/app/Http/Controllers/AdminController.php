<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Escuela;
use App\Models\Municipio;
use App\Models\Contenido;
use App\Models\Categoria;
use Excel;
use App\Imports\EscuelaImport;

class AdminController extends Controller{
    
    //ALUMNOS
    public function index(){
        return view('admin.index');
    }

    public function indexAlumnos(){
        $alumnos = User::all();
        $escuelas = Escuela::all();
        return view('admin.crudAlumnos')->with('alumnos',$alumnos)->with('escuelas',$escuelas);
    }

    public function createAlumno(){ 
        $escuelas= Escuela::all();
        $municipios= Municipio::all();
        return view('admin.registroAlumnos')->with('escuelas',$escuelas)->with('municipios',$municipios);
    }

    public function storeAlumno(Request $request){

        $this->validate(request(),[
            
            'password'=>'confirmed',
            
            
        ]);

        $alumno =  new User();
        $alumno->nombre = $request->get('nombre');
        $alumno->apellido = $request->get('apellido');
        $alumno->email = $request->get('email');
        $alumno->password = $request->get('password');
        $alumno->rol = 'alumno';
        $alumno->municipio = $request->get('municipio');
        $alumno->nivelEducativo = $request->get('nivelEducativo');
        $alumno->edad = $request->get('edad');
        $alumno->sexo = $request->get('sexo');
        $alumno->idEscuela = $request->get('escuela');
        $alumno->save();
    
        return redirect()->to('/admin/alumnos');
        
    }

    public function editAlumno($id){
        $alumno = User::find($id);
        
        $escuelaSelect = Escuela::find($alumno->idEscuela);
        $escuelas= Escuela::all();
        $municipios= Municipio::all();
        return view('admin.editAlumno')->with('alumno',$alumno)->with('escuelaSelect',$escuelaSelect)->with('escuelas',$escuelas)->with('municipios',$municipios);
    }

    public function updateAlumno(Request $request, $id){
        $alumno =  User::find($id);
        $alumno->nombre = $request->get('nombre');
        $alumno->apellido = $request->get('apellido');
        $alumno->email = $request->get('email');
        $alumno->password = $request->get('password');
        $alumno->municipio = $request->get('municipio');
        $alumno->nivelEducativo = $request->get('nivelEducativo');
        $alumno->edad = $request->get('edad');
        $alumno->sexo = $request->get('sexo');
        $alumno->idEscuela = $request->get('escuela');

        $alumno->save();
    
        return redirect()->to('/admin/alumnos');
    }

    public function deleteAlumno($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin/alumnos');
    }


    //ESCUELAS
    public function indexEscuelas(){
        
        $escuelas = Escuela::all();
        return view('admin.crudEscuelas')->with('escuelas',$escuelas);
    }

    public function createEscuela(){ 
        
        $municipios= Municipio::all();
        return view('admin.registroEscuelas')->with('municipios',$municipios);
    }

    public function storeEscuela(Request $request){

        $escuela =  new Escuela();
        $escuela->nombre = $request->get('nombre');
        $escuela->municipio = $request->get('municipio');
        $escuela->save();
    
        return redirect()->to('/admin/escuelas');
    }

    public function editEscuela($id){
        $escuela = Escuela::find($id);
        $municipios= Municipio::all();
        return view('admin.editEscuela')->with('escuela',$escuela)->with('municipios',$municipios);
    }

    public function updateEscuela(Request $request, $id){
        $escuela =  Escuela::find($id);
        $escuela->nombre = $request->get('nombre');
        $escuela->municipio = $request->get('municipio');

        $escuela->save();
    
        return redirect()->to('/admin/escuelas');
    }

    public function deleteEscuela($id)
    {
        $escuela =  Escuela::find($id);
        $escuela->delete();

        return redirect()->to('/admin/escuelas');
    }

    public function importEscuelaExcel(Request $request){

        $file = $request->file('cargaMasivaEscuelas');
        Excel::import(new EscuelaImport,$file);

        return back()->with('message','Importación de escuelas completada');
    }


    //PROFESORES
    public function indexProfesores(){
        $profesores = User::all();
        $escuelas = Escuela::all();
        return view('admin.crudProfesores')->with('profesores',$profesores)->with('escuelas',$escuelas);
    }

    public function createProfesor(){ 
        $escuelas= Escuela::all();
        $municipios= Municipio::all();
        return view('admin.registroProfesores')->with('escuelas',$escuelas)->with('municipios',$municipios);
    }

    public function storeProfesor(Request $request){

        $this->validate(request(),[
            
            'password'=>'confirmed',
            
            
        ]);

        $profesor =  new User();
        $profesor->nombre = $request->get('nombre');
        $profesor->apellido = $request->get('apellido');
        $profesor->email = $request->get('email');
        $profesor->password = $request->get('password');
        $profesor->rol = 'profesor';
        $profesor->municipio = $request->get('municipio');
        $profesor->edad = $request->get('edad');
        $profesor->sexo = $request->get('sexo');
        $profesor->idEscuela = $request->get('escuela');
        $profesor->save();
    
        return redirect()->to('/admin/profesores');
    }

    public function editProfesor($id){
        $profesor = User::find($id);
        
        $escuelaSelect = Escuela::find($profesor->idEscuela);
        $escuelas= Escuela::all();
        $municipios= Municipio::all();
        return view('admin.editProfesor')->with('profesor',$profesor)->with('escuelaSelect',$escuelaSelect)->with('escuelas',$escuelas)->with('municipios',$municipios);
    }

    public function updateProfesor(Request $request, $id){
        $profesor =  User::find($id);
        $profesor->nombre = $request->get('nombre');
        $profesor->apellido = $request->get('apellido');
        $profesor->email = $request->get('email');
        $profesor->password = $request->get('password');
        $profesor->municipio = $request->get('municipio');
        
        $profesor->edad = $request->get('edad');
        $profesor->sexo = $request->get('sexo');
        $profesor->idEscuela = $request->get('escuela');

        $profesor->save();
    
        return redirect()->to('/admin/profesores');
    }

    public function deleteProfesor($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin/profesores');
    }

    
    
    //CONTENIDO
    public function indexContenido(){
        $categorias = Categoria::all();
        return view('admin.crudContenido')->with('categorias',$categorias);
    }

    public function createContenido(){ 
        $categorias = Categoria::all();
        
        return view('admin.registroContenido')->with('categorias',$categorias);
    }



    //Ciudadanos
    public function indexCiudadanos(){
        $ciudadanos = User::all();
        return view('admin.crudCiudadanos')->with('ciudadanos',$ciudadanos);
    }

    public function createCiudadano(){ 
        $municipios= Municipio::all();
        return view('admin.registroCiudadanos')->with('municipios',$municipios);
    }

    public function storeCiudadano(Request $request){

        $ciudadano =  new User();
        $ciudadano->nombre = $request->get('nombre');
        $ciudadano->apellido = $request->get('apellido');
        $ciudadano->email = $request->get('email');
        $ciudadano->rol = 'ciudadano';
        $ciudadano->municipio = $request->get('municipio');
        $ciudadano->edad = $request->get('edad');
        $ciudadano->sexo = $request->get('sexo');
        $ciudadano->save();
    
        return redirect()->to('/admin/ciudadanos');
    }

    public function deleteCiudadano($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin/ciudadanos');
    }

    public function editCiudadano($id){
        $ciudadano = User::find($id);
    
        $municipios= Municipio::all();
        return view('admin.editCiudadano')->with('ciudadano',$ciudadano)->with('municipios',$municipios);
    }

    public function updateCiudadano(Request $request, $id){
        $ciudadano  =  User::find($id);
        $ciudadano->nombre = $request->get('nombre');
        $ciudadano->apellido = $request->get('apellido');
        $ciudadano->email = $request->get('email');
        $ciudadano->municipio = $request->get('municipio');
        
        $ciudadano->edad = $request->get('edad');
        $ciudadano->sexo = $request->get('sexo');

        $ciudadano->save();
    
        return redirect()->to('/admin/ciudadanos');
    }

}
