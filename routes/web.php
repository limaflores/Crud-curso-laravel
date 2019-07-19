<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*//Antigo
Route::get('/', function () {
    return view('home');
});
*/
//Aqui fica a rota do home.
Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);
/*
//Primeiro exercício.
Route::get('/contato/{id?}', function($id = null){
    return "Contato id $id = $id";
});

Route::post('/contato', function(){
    //Esse mostra o valor da variável.
    //var_dump($_POST);
    //Mostra o valor da variável e para aqui. É mais elegante.
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function(){
    return "Contato PUT";
});
*/

//Segundo exercício de controller.
Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);


//Criando login 1.
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

//Segundo exercício de controller.
Route::post('/contato',['uses'=>'ContatoController@criar']);

//Segundo exercício de controller.
Route::put('/contato',['uses'=>'ContatoController@editar']);


//Aqui fica as rotas para quem tem login.
Route::group(['middleware'=>'auth'],function(){
    //Construção do crud. Será uma lista com todos os cursos.
    Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);
    //Construção do crud. Acrescentar o método adicionar.
    Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);
    //Construção do crud. Acrescentar o método savar.
    Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);
    //Construção do crud. Acrescentar o método editar.
    Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
    //Construção do crud. Acrescentar o método atualizar.
    Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);
    //Construção do crud. Acrescentar o método deletar.
    Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);
});