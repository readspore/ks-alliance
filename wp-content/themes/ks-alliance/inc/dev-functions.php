<?php 
if (! function_exists('dd')) {
    function dd(...$args){
        echo "<pre>";
        echo "<hr>";
        foreach ($args as $val) {
            echo "<hr>";
            var_dump($val);
            echo "<hr>";
        }
        echo "</pre>";
        die;
    }
}

if (! function_exists('d_')) {
    function d_(...$args){
        echo "<pre>";
        echo "<hr>";
        foreach ($args as $val) {
            echo "<hr>";
            var_dump($val);
            echo "<hr>";
        }
        echo "</pre>";
    }
}

if (!function_exists('rs_get_call_phone')) {
    function rs_get_call_phone($phone){
        return preg_replace("/[^0-9]/", '', $phone);
    }
}