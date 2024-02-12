<?php

function urlIs($uri){
    return $_SERVER['REQUEST_URI'] == $uri;
}
