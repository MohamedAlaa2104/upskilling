<?php

namespace App\Traits;

trait InteractWithFiles
{
    public function uploadFile($file)
    {
        echo 'File uploaded successfully. Filename: ' . $file . '<br>';
    }
}