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
        return $this->view('grade', ['users' => $users]);
    }
    public function update()
    {

    }
    
    public function delete($data)
    {

    }
}