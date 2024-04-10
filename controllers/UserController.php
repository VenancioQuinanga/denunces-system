<?php

class UserController extends RenderView{

    public function home(){

        $user = new user();
        $this->loadView('home',
        ['title'=>'Home',
        'user'=>$user->index()
        ]);
    }

    public function sign_up(){
        $user = new user();

        $this->loadView('users/sign_up',
        ['title'=>'Registrar',
        'user'=>$user->index()
        ]);
    }

    public function login(){
        $user = new user();

        $this->loadView('users/login',
        ['title'=>'Entrar',
        'user'=>$user->index()
        ]);
    }

    public function resetPass(){

        $user = new user();
        $this->loadView('users/reset_pass',
        ['title'=>'Redifinir Senha',
        'user'=>$user->index()
        ]);
    }
    public function account(){

        $user = new user();
        $this->loadView('users/account',
        ['title'=>'Minha conta',
        'user'=>$user->index()
        ]);
    }
    public function dashboard(){

        $user = new user();
        $this->loadView('dashboard',
        ['title'=>'Dashboard',
        'user'=>$user->index()
        ]);
    }

    public function denunce(){

        $user = new user();
        $this->loadView('denunce',
        ['title'=>'Denunciar',
        'user'=>$user->index()
        ]);
    }

    public function test(){

        $user = new user();
        $this->loadView('test',
        ['title'=>'Testes',
        'user'=>$user->index()
        ]);
    }

}