<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function FormularioCadastroNoticia(){
        return view('cadastrarNoticia');
    }

    public function MostrarEditarNoticia(Request $request){

        $dadosNoticias = Noticias::all();
        //dd($dadosNoticias);

        $dadosNoticias = Noticias::query();
        $dadosNoticias->when($request->topico,function($query, $v1){
            $query->where('topico','like','%'.$v1.'%');
        });

        $dadosNoticias = $dadosNoticias->get();
        return view('editarNoticia', [
            'registrosNoticia' => $dadosNoticias
        ]);
        
    }


    public function SalvarBancoNoticia(Request $request){
        $dadosNoticia = $request->validate([
            'topico' => 'string|required',
            'titulo' => 'string|required',
            'duvida' => 'string|required'
        ]); 

        Noticias::create($dadosNoticia);
        return Redirect::route('home');
    }



    public function ApagarBancoNoticia(Noticias $registrosNoticias){
        // dd($registrosNoticias);
         $registrosNoticias->delete();
         return Redirect::route('editar-noticia');
     }
 


     public function MostrarAlterarNoticia(Noticias $registrosNoticias){
        return view('alterarNoticia',['registrosNoticias' => $registrosNoticias]); 
    }


    public function AlterarBancoNoticia(Noticias $registrosNoticias, Request $request){
        $banco = $request->validate([
            'topico' => 'string|required',
            'titulo' => 'string|required',
            'duvida' => 'string|required'
   
        ]);

        $registrosNoticias->fill($banco);
        $registrosNoticias->save();

        //dd($registrosNoticias);

        return Redirect::route('editar-noticia');
    }


    







    public function AlterarVerNoticia(Noticias $registrosNoticias, Request $request){
        $banco = $request->validate([
            'topico' => 'string|required',
            'titulo' => 'string|required',
            'duvida' => 'string|required'
   
        ]);

        $registrosNoticias->fill($banco);
        $registrosNoticias->save();

        //dd($registrosNoticias);

        return Redirect::route('ver-noticia');
    }





    public function MostrarVerNoticia(Request $request){

        $dadosNoticias = Noticias::all();
        //dd($dadosNoticias);

        $dadosNoticias = Noticias::query();
        $dadosNoticias->when($request->topico,function($query, $v1){
            $query->where('topico','like','%'.$v1.'%');
        });

        $dadosNoticias = $dadosNoticias->get();
        return view('verNoticia', [
            'registrosNoticia' => $dadosNoticias
        ]);
        
    }











    
    

    
}

