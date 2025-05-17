<?php

namespace App\Core;

class Request
{

    function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, "?");

        if ($position) {
            return substr($path, 0, $position);
        }

        $baseFolder = '/Upskilling/Tasks/mohamedAshraf/task16/public';
        $path = str_replace($baseFolder, '', $path);

        return $path ?: '/';
    }

    function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}