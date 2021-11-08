<?php

namespace App\Controller;
/**
 * Quick Fix
 */
class Request
{
    protected $request;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }

    public function __get($name)
    {
        if(isset($this->request['name'])){
            return $this->request[$name];
        }
        return false;
    }
}