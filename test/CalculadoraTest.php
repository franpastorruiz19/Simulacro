<?php
use PHPUnit\Framework\TestCase;

include './src/Calculadora.php';
final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(3, 4);
        $this->assertEquals(7, $calc->suma());
    }

    public function testResta(){
        $calc = new Calculadora(4, 4);
        $this->assertEquals(0, $calc->resta());
    }
}
?>