<?php

class NumbersStorage
{
    private $numbers = [];

    final public function getNumbers(): array
    {
        return $this->numbers;
    }

    final public function setNumbers(array $numbers): self
    {
        $this->numbers = [];
        foreach ($numbers as $number) {
            $this->addNumber($number);
        }

        return $this;
    }

    final public function addNumber(int $number): self
    {
        if (is_int($number) && $number < 0) {
            throw new InvalidArgumentException("The number isn't a natural number");
        }

        $this->numbers[] = $number;

        return $this;
    }

    final public function getOddAndEvenNumbersData(): string
    {
        $oddNumbersCounter = 0;
        $evenNumbersCounter = 0;

        foreach ($this->getNumbers() as $number) {
            if ($number % 2 == 0) {
                $evenNumbersCounter++;
            } else {
                $oddNumbersCounter++;
            }
        }

        return $this->compareQuantities($oddNumbersCounter, $evenNumbersCounter);
    }

    private function compareQuantities(int $oddNumbersCounter, int $evenNumbersCounter): string
    {
        if (3 * $evenNumbersCounter > 2 * $oddNumbersCounter) {
            return '3 times quantity of even numbers is bigger than 2 times quantity of odd numbers';
        } else {
            return '2 times quantity of odd numbers is bigger than 3 times quantity of even numbers';
        }
    }
}
