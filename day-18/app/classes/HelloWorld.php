<?php

namespace app\classes;

class HelloWorld
{
    public $message;
    public function index()
    {
        echo $this->message = 'Hello World';
    }

}