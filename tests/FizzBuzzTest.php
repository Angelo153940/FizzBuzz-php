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
    public function trueAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }

    /**
     * @test
     */
    public function numeroDivisibleEntreTresEsFizz()
    {
        
    }

    /**
     * @test
     */
    public function numeroDivisibleEntreCincoEsBuzz()
    {
        
    }

    /**
     * @test
     */
    public function numeroDivisibleEntreTresYCincoEsFizzBuzz()
    {
        
    }
}
