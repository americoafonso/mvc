<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }

    public function AddAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();
                //redirect para home
               $this->redirect('/');
            }
        }
         //redirect para /novo
         $this->redirect('/novo');
    }

    public function edit($args) {

    }

    public function del($args) {
        
    }
}