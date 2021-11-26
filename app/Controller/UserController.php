<?php
namespace App\Controller;

use App\Models\User;

class UserController extends Controller
{
    //Meio de campo
    /**
     * Listar – O controller deve buscar com a Model uma lista de contatos e enviar para View.
     */

    public function toList()
    {
        $users = User::getUsers();
        return $this->view('./public/grade', ['users' => $users]);
    }
    public function toListInd($data)
    {
        $user = User::getUserById($data['id']);
        return $this->view('./public/viewUser', ['user' => $user]);
        
    }
    public function edit($data)
    {
        $user = User::getUserById($data['id']);
        return $this->view('./public/updateUser', ['user' => $user]);
    }

    public function update($data)
    {
        $user = User::getUserById($data['id']);
        if($_POST){
            User::updateUser($_POST, $user['id']);
        }
        header('Location: ?controller=App\Controller\UserController&method=toList');
        exit;
    }

    public function create()
    {
        return $this->view('./public/form');
    }
    
    public function save()
    {
        if($_POST){
            User::createUser($_POST);
        }
        header('Location: ?controller=App\Controller\UserController&method=toList');
        exit;
    }
    public function delete($data)
    {
        $user = User::getUserById($data['id']);
        
    }
}