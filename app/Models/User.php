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
        $users = self::getUsers();
        foreach ($users as $user) {
            if($user['id'] == $id){
                return $user;
            }
        }
        return null;
    }

    /**
     * This functions update a user
     *
     */
    public static function updateUser($data, $id)
    {
        $users = self::getUsers();
        foreach($users as $i => $user){
            if($user['id'] == $id){
                $users[$i] = array_merge($user, $data);
            }
        }
        self::putJson($users);
    }
    /**
     * This function create a user
     *
     */
    public static function createUser($data)
    {
        $users = self::getUsers();
        $data['id'] = rand(100, 1000);

        $users[] = $data;

        self::putJson($users);
    }
    /**
     * This function delete a user
     *
     */
    public static function deleteUser($id)
    {
        $users = self::getUsers();
        foreach($users as $i => $user){
            if($user['id'] == $id){
                unset($users[$i]);
            }
        }
        self::putJson($users);
    }

    /**
     * This function will apply changes into json file
     *
     */
    public static function putJson($users)
    {
        file_put_contents(__DIR__.'/users.json', json_encode($users, JSON_PRETTY_PRINT));
    }
}