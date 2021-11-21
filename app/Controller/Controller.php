<?php

namespace App\Controller;

class Controller
{

    public function view($archive, $array = null)
    {
        if(!is_null($array)){
            foreach ($array as $var => $value) {
                ${$var} = $value;
            }
        }
        ob_start();
        include "{$archive}.php";
        ob_flush();
    }
}