<?php
namespace App\classes;

class HelloWorld
{
    public $message;

    public $firstName, $lastName;

    public $firstNumber, $lastNumber;


    public function __construct()
    {
        $this->message = 'Hello World';

        $this->firstName='Mehedi';
        $this->lastName='Ridoy';
    }

    public function index()
    {
//        echo $this->message;
//        echo $this->firstName.   ' &nbsp; &nbsp;    '  .$this->lastName;
//           echo  gettype($this->firstName);
        /*Arithmetic operator (+,-,*,/,%,++,--)
         * Assigned oprator( =,+=,-=,*=,/=,)
         *
         *
         */

        $this->firstNumber=10;
        $this->lastNumber=20;
//        echo '<br/>';
//        echo $this->firstNumber + $this->lastNumber;//30
//        echo '<br/>';
//        echo $this->firstNumber - $this->lastNumber;//-10
//        echo '<br/>';
//        echo $this->firstNumber * $this->lastNumber;//200
//        echo '<br/>';
//        echo $this->firstNumber / $this->lastNumber;//0.5
//        echo '<br/>';
//        echo $this->firstNumber % $this->lastNumber;//10

        echo '<br/>';
        echo $this->firstNumber++;
        echo '<br/>';
        echo $this->firstNumber;


    }
}