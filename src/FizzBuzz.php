<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    private int $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    function isFizz() : boolean
    {
        return (this->number % 3 == 0);
    }

    function isBUzz() : boolean
    {
        return (this->number % 5 == 0);
    }

    function isFizzBuzz() : boolean
    {
        return ($this->number % 3 == 0 && $this->number % 5 == 0);
    }

    function showNumber() : void
    {
        if(isFizz()){
            echo "Fizz" . "<br>";
            return;
        }
        if(isBuzz()){
            echo "Buzz" . "<br>";
            return;
        }
        if(isFizzBuzz()){
            echo "FizzBuzz" . "<br>";
            return;
        }
        echo $this->number . "<br>";
    }
}

// En phpStorm correr tests en consola