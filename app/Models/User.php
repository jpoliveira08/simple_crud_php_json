<?php

namespace App\Models;
/**
 * All methods of CRUD operations will be here
 */
class User
{
    /**
    * Reading json file  
    */
    public static function getUsers()
    {
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