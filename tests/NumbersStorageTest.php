<?php

use PHPUnit\Framework\TestCase;

class NumbersStorageTest extends TestCase
{
    private $values = [2, 2, 2, 3, 3, 3, 3];
    protected static $numbersStorage;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$numbersStorage = new NumbersStorage();
    }

    public function invokeMethod(NumbersStorage $object, string $methodName, array $parameters = [])
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

    public function testGetAndSetNumbers(): void
    {
        self::$numbersStorage->setNumbers($this->values);
        $this->assertEquals($this->values, self::$numbersStorage->getNumbers());
    }

    public function testAddNumber(): void
    {
        $value = 2;
        self::$numbersStorage->addNumber($value);
        $this->assertEquals(self::$numbersStorage->getNumbers()[0], $value);

        $this->expectException(InvalidArgumentException::class);
        $badValue = -1.2;
        self::$numbersStorage->addNumber($badValue);
    }

    public function testCompareQuantities(): void
    {
        $result = $this->invokeMethod(self::$numbersStorage, 'compareQuantities', [2, 2]);
        $this->assertEquals(
            $result,
            '3 times quantity of even numbers is bigger than 2 times quantity of odd numbers'
        );

        $result = $this->invokeMethod(self::$numbersStorage, 'compareQuantities', [5, 2]);
        $this->assertEquals(
            $result,
            '2 times quantity of odd numbers is bigger than 3 times quantity of even numbers'
        );
    }

    public function testGetOddAndEvenNumbersData(): void
    {
        self::$numbersStorage->setNumbers($this->values);
        $this->assertEquals(
            self::$numbersStorage->getOddAndEvenNumbersData(),
            '3 times quantity of even numbers is bigger than 2 times quantity of odd numbers'
        );
    }
}
