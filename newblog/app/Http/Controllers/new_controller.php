<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class new_controller extends Controller
{
    public function inicio (){
        return view('welcome');
    }
    public function control_fotos (){
        return view('fotos');
    }
    public function control_blog (){
        return view('blog');
    }
    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }
    public function control_nosotros($nombre = null){
        $equipo = ['Aaron', 'Aysen', 'Greymar'];
        $notas = App\Nota::all();
        console.log($notas);
        //return view('nosotros',  ['equipo'=>$equipo,'nombre'=>$nombre]);
        return view('nosotros', compact('equipo', 'nombre', 'notas'));
    }
}
