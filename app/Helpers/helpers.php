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

if(! function_exists('authUser'))
{
    function authUser()
    {
        return auth()->user();
    }
}

if(! function_exists('employee'))
{
    function employee()
    {
        if(! is_null($user = auth()->user()) && $user->user_type === 'CAN')
        {
            return $user->employee;
        }

        return null;
    }
}

if(! function_exists('employer'))
{
    function employer()
    {
        if(! is_null($user = auth()->user()) && $user->user_type === 'EMP')
        {
            return $user->employer;
        }

        return null;
    }
}