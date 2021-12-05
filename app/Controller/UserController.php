<?php
namespace App\Controller;

use App\Models\User;
@session_start();
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
        $this->redirectToList();
    }

    public function create()
    {
        session_destroy();
        return $this->view('./public/form');
    }
    
    public function save()
    {
        $isValid = true;
        if($_POST){
            if(!$_POST['name']){
                $_SESSION['error']['name'] = 'Name is mandatory';
                $isValid = false;
            }
            if(!$_POST['username'] || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 16){
                $_SESSION['error']['username'] = 'Username is required and it must be more than 6 and less then 16 characters';
                $isValid = false;
            }
            if($_POST['email'] && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $_SESSION['errors']['email'] = 'This must be a valid email address';
                $isValid = false;
            }
            if(!filter_var($_POST['phone'], FILTER_VALIDATE_INT)){
                $_SESSION['errors']['phone'] = 'This must be a valid phone number';
                $isValid = false;
            }
            if(!$isValid){
                $this->redirectToForm();
            }
            User::createUser($_POST);
            
        }
        session_destroy();
        $this->redirectToList();
    }

    public function delete()
    {
        $user = User::getUserById($_POST['id']);
        User::deleteUser($user['id']);
        $this->redirectToList();
    }

    private function redirectToForm(){
        header('Location: ?controller=App\Controller\UserController&method=create');
        exit;
    }

    private function redirectToList(){
        header('Location: ?controller=App\Controller\UserController&method=toList');
        exit;
    }
}