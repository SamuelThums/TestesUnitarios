<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEven()
    {
        $this->assertTrue(Funcoes::isEven(2));
        $this->assertFalse(Funcoes::isEven(3));
    }

    public function testFactorial()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialNegative()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama"));
        $this->assertTrue(Funcoes::isPalindrome("Madam"));
        $this->assertFalse(Funcoes::isPalindrome("php")); 
        $this->assertFalse(Funcoes::isPalindrome("Ronaldo")); 
    }

    public function testFahrenheitToCelsius()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    }

    public function testCalculateDiscount()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountNegative()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-50, 10);
    }
}