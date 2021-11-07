<?php

namespace App\Models;

class Users
{

    public function getUsers()
    {
        /**
         * Reading json file  
         */
        return json_decode(file_get_contents(__DIR__ . '/users.json'), true);

    }
    
    /**
     * Will be use for update and delete
     */
    public function getUserById($id)
    {

    }

    public function createUser($data)
    {

    }

    public function updateUser($data, $id)
    {

    }
    
    public function delete($id)
    {

    }
}