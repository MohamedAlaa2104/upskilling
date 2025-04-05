<?php

require_once 'Traits/InteractWithFiles.php';

class User
{
    use InteractWithFiles;
    public function __construct(private string $name)
    {
    }

//    public function uploadFile($file)
//    {
//        echo 'File uploaded successfully' . '<br>';
//    }
}
