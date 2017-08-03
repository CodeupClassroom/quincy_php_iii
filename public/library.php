<?php

function first($input)
{
    if(is_array($input) || is_string($input)) {
        return $input[0];
    }

    return false;
}

function last($input)
{
    if(is_array($input)) {
        return $input[count($input) - 1];
    } else if(is_string($input)) {
        return $input[strlen($input) - 1];
    } else {
        return false;
    }
}