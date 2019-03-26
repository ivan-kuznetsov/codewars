<?php

if (!function_exists('createTask')) {
    function createTask($taskName)
    {
        $classname = "Tasks\\$taskName\\task";
        return new $classname;
    }
}