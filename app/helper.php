<?php 

if(!function_exists('formated_data'))
{
    function formated_data($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    };
}