<?php

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();

}

function urlIs($uri){
    return $_SERVER['REQUEST_URI'] == $uri;
}



