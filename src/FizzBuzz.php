<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    private int $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function setFizzBuzz($number): void
    {
        $this->number = $number;
    }

    private function itHasAThree(): bool
    {
        return str_contains((string) $this->number, '3');
    }

    private function itHasAFive(): bool
    {
        return str_contains((string) $this->number, '5');
    }

    private function isMultipleOfThree(): bool
    {
        return ($this->number % 3 == 0);
    }

    private function isMultipleOfFive(): bool
    {
        return ($this->number % 5 == 0);
    }

    private function isFizz(): bool
    {
        return $this->itHasAThree() || $this->isMultipleOfThree();
    }

    private function isBuzz(): bool
    {
        return $this->itHasAFive() || $this->isMultipleOfFive();
    }

    private function isFizzBuzz(): bool
    {
        return ($this->isFizz() && $this->isBuzz());
    }

    public function calculateFizzBuzz(): string
    {
        if ($this->isFizzBuzz()) {
            return "FizzBuzz";
        }
        if ($this->isFizz()) {
            return "Fizz";
        }
        if ($this->isBuzz()) {
            return "Buzz";
        }
        return (string)$this->number;
    }
}
