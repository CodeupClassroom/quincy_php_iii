<?php

function inputHas($key)
{
    return isset($_REQUEST[$key]);
}

function inputGet($key, $default = "")
{
    if(inputHas($key)) {
        return $_REQUEST[$key];
    } else {
        return $default;
    }
}

function escape($input)
{
    if(!is_string($input)) {
        return false;
    } 

    return htmlspecialchars(strip_tags($input));
}