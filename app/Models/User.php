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
    public static function getUserById($id)
    {
        $users = User::getUsers();
        foreach ($users as $user) {
            if($user['id'] == $id){
                return $user;
            }
        }
        return null;
    }

    /**
     * This functions will be contain the json commands
     *
     */
    public static function updateUser($data, $id)
    {
        $users = User::getUsers();
        foreach($users as $i => $user){
            if($user['id'] == $id){
                $users[$i] = array_merge($user, $data);
            }
        }
        file_put_contents(__DIR__.'/users.json', json_encode($users));
    }

    public function delete($id)
    {

    }
}