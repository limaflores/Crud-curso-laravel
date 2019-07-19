<?php

use Illuminate\Database\Seeder;
//Criado no curso.
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //Para criar um usuário.
        $usuario = new User;
        $usuario->name = "gui";
        */

        $dados= [
            'name'=>"admin",
            'email'=>"admin@mail.com",
            'password'=>bcrypt("123456"),
        ];
        
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
          }else{
            User::create($dados);
            echo "Usuario Criado!";
          }

    }
}

