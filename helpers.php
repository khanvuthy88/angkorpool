<?php

if (! function_exists('inputArrayExist')) {
    /**
     * [inputValueExist description]
     * @param  Array    $input
     * @param  String   $name
     * @param  Any      $search_value
     * @return Boolean
     */
    function inputValueExist(Array $input, $name, $search_value)
    {
        return isset($input[$name])
                && collect($input[$name])->search($search_value) !== false;
    }
}
