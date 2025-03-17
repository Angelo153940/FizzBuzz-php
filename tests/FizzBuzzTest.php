<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function multipleOfThreeIsFizz()
    {
        $fizzBuzz = new fizzBuzz(3);
        $this->assertTrue("Fizz" == $fizzBuzz->calculateFizzBuzz());
    }

    /**
     * @test
     */
    public function numberHasAThreeIsFizz()
    {
        $fizzBuzz = new fizzBuzz(13);
        $this->assertTrue("Fizz" == $fizzBuzz->calculateFizzBuzz());
    }

    /**
     * @test
     */
    public function multipleOfFiveIsBuzz()
    {
        $fizzBuzz = new fizzBuzz(5);
        $this->assertTrue("Buzz" == $fizzBuzz->calculateFizzBuzz());
    }

    /**
     * @test
     */
    public function numberHasAFiveIsBuzz()
    {
        $fizzBuzz = new fizzBuzz(59);
        $this->assertTrue("Buzz" == $fizzBuzz->calculateFizzBuzz());
    }

    /**
     * @test
     */
    public function multipleOfThreeAndFiveIsFizzBuzz()
    {
        $fizzBuzz = new fizzBuzz(15);
        $this->assertTrue("FizzBuzz" == $fizzBuzz->calculateFizzBuzz());
    }
}
