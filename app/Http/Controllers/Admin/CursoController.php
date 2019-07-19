<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//Agora tem acesso as informações do curso.
use App\Curso;

class CursoController extends Controller
{
    //Aqui é criado o método que retorna a view index.
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }

    //Aqui é criado o método que retorna a view index.
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    //Aqui é criado o método que salva o arquivo adicionar.
    public function salvar(Request $req)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        //dd($dados); //mostra os valores
        //Aqui trata a imagem antes de inserir. Verificado se há imagem.
        if($req->hasfile('imagem'))
        {
            //Aqui atribui o valor da imagem a uma variável.
            $imagem = $req->file('imagem');
            //É gerado um número entre 1111 e 9999.
            $num = rand(1111,9999);
            //Esse é o diretório onde será salvo o arquivo.
            $dir = "img/cursos/";
            //Método para trazer a extensão da imagem.
            $ex = $imagem->guessClientExtension();
            //Monta o nome da imagem.
            $nomeImagem = "imagem_".$num.".".$ex;
            //Move para o diretório. Precisa de dois parametros o diretório ($dir) e o nome da imagem ($nomeImagem). Se não existir o diretório ele cria.
            $imagem->move($dir,$nomeImagem);
            //Atribuindo o caminho para colocar no banco.
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //Salva no banco de dados. Precisa definir no modelo de curso os campos.
        Curso::create($dados);

        return redirect()->route('admin.cursos');

    }

    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }

    //Aqui é criado o método que salva o arquivo atualizar no banco e diferente do salvar é acrescentado o $id.
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if(isset($dados['publicado']))
        {
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        
        //dd($dados); //mostra os valores
        //Aqui trata a imagem antes de inserir. Verificado se há imagem.
        if($req->hasfile('imagem'))
        {
            //Aqui atribui o valor da imagem a uma variável.
            $imagem = $req->file('imagem');
            //É gerado um número entre 1111 e 9999.
            $num = rand(1111,9999);
            //Esse é o diretório onde será salvo o arquivo.
            $dir = "img/cursos/";
            //Método para trazer a extensão da imagem.
            $ex = $imagem->guessClientExtension();
            //Monta o nome da imagem.
            $nomeImagem = "imagem_".$num.".".$ex;
            //Move para o diretório. Precisa de dois parametros o diretório ($dir) e o nome da imagem ($nomeImagem). Se não existir o diretório ele cria.
            $imagem->move($dir,$nomeImagem);
            //Atribuindo o caminho para colocar no banco.
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //Econtra e atualiza no banco de dados. Precisa definir no modelo de curso os campos.
        Curso::find($id)->update($dados);
        //Aqui envia o usuário para a listagem novamente.
        return redirect()->route('admin.cursos');
    
        //Falta implementar o método para deletar a imagem antiga.
        /*
        $dirr = "img/cursos/";
        unlink($dirr.'/'.$registro);
        */

    }

    public function deletar($id)
    {
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }


}
