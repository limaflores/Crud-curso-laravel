<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Você pode deixar a informação que irá utilizar dos models. Assim poderá utilizar apenas Contato em qualquer lugar.
use App\Contato;


class ContatoController extends Controller
{
    //Exercício de rotas. Método index - get.
    public function index(){
        //return "Esse é o index do ContatoController";

        $contatos = [
            //["nome"=>"Maria","tel"=>"6564773"],
            //["nome"=>"Pedro","tel"=>"6444444"]

            //Usando como objeto.
            (object)["nome"=>"Maria","tel"=>"6564773"],
            (object)["nome"=>"Pedro","tel"=>"6444444"]
        ];
        /*
        //$contato = new \App\Contato();
        $contato = new Contato();
        dd($contato->lista());
        */
        //Assim é possível mostrar apenas o nome.
        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        //O método compact pega o $contatos
        return view('contato.index', compact('contatos'));
    }

    //Exercício de rotas. Método criar - post.
    public function criar(Request $req){
        //dd($req['nome']);
        dd($req ->all());
        return "Esse é o criar do ContatoController";
    }

    //Exercício de rotas. Método editar - put.
    public function editar(){
        return "Esse é o editar do ContatoController";
    }
}
