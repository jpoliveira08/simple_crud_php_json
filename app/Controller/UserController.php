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
    public function update()
    {

    }
    
    public function delete($data)
    {

    }
}