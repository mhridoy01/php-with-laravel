<?php


namespace App\classes;


class HomePage
{
    public function index()
    {
//        echo 'Hello World';
        header('Location: action.php?page=home');
    }
}