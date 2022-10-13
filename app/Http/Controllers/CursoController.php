<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

use App\Http\Requests\StoreCurso;



class CursoController extends Controller
{
    public function index(){
        //return "Bienvenido a la pagina principal de cursos :)";
        
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate();
        
        return view('cursos.index',compact('cursos'));
    }
    
    public function create(){
        //return "En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        //return $request->all();
        /*
        $curso = new Curso();
        $curso -> name = $request -> name;
        $curso -> descripcion = $request -> descripcion;
        $curso -> categoria = $request -> categoria;
        $curso -> save();*/

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }


    public function show(Curso $curso){
        //return "Bienvenido al curso $curso";
        //$curso = Curso::find($id);
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        //$curso = Curso::find($id);
        //return $curso;
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        
        $request->validate([
            'name' => 'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);
        /*
        $curso -> name = $request -> name;
        $curso -> descripcion = $request -> descripcion;
        $curso -> categoria = $request -> categoria;
        $curso->save();
        */

        $curso->update($request->all());

        return redirect()->route('cursos.show',$curso);
        //return view('cursos.show',compact('curso'));
        //return $curso;
    }


    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }



}
