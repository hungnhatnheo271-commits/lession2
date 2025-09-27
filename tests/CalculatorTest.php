<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {

    private $calc;

    protected function setUp(): void {
        $this->calc = new Calculator();
    }

    /* ----------------- ADD (15 test) ----------------- */
    public function testAddSmallPositives() { $this->assertEquals(5, $this->calc->add(2, 3)); }
    public function testAddSmallNegatives() { $this->assertEquals(-5, $this->calc->add(-2, -3)); }
    public function testAddPositiveAndNegative() { $this->assertEquals(1, $this->calc->add(4, -3)); }
    public function testAddZero() { $this->assertEquals(7, $this->calc->add(7, 0)); }
    public function testAddLargeNumbers() { $this->assertEquals(2000000, $this->calc->add(1000000, 1000000)); }
    public function testAddNegativeAndZero() { $this->assertEquals(-10, $this->calc->add(-10, 0)); }
    public function testAddTwoZeros() { $this->assertEquals(0, $this->calc->add(0, 0)); }
    public function testAddDecimalNumbers() { $this->assertEquals(5.7, $this->calc->add(2.2, 3.5)); }
    public function testAddNegativeDecimal() { $this->assertEquals(-1.3, $this->calc->add(-2.5, 1.2)); }
    public function testAddMixedLargeSmall() { $this->assertEquals(1000003, $this->calc->add(1000000, 3)); }
    public function testAddSameNumbers() { $this->assertEquals(8, $this->calc->add(4, 4)); }
    public function testAddPositiveToNegativeResultNegative() { $this->assertEquals(-1, $this->calc->add(-2, 1)); }
    public function testAddPositiveToNegativeResultPositive() { $this->assertEquals(3, $this->calc->add(-2, 5)); }
    public function testAddNegativeBigAndPositiveSmall() { $this->assertEquals(-999, $this->calc->add(-1000, 1)); }
    public function testAddFloatPrecision() { $this->assertEquals(0.3, $this->calc->add(0.1, 0.2), '', 0.0001); }
    public function testSubtractSmallPositives() { $this->assertEquals(2, $this->calc->subtract(5, 3)); }
    public function testSubtractSmallNegatives() { $this->assertEquals(1, $this->calc->subtract(-2, -3)); }
    public function testSubtractPositiveAndNegative() { $this->assertEquals(7, $this->calc->subtract(4, -3)); }
    public function testSubtractZero() { $this->assertEquals(7, $this->calc->subtract(7, 0)); }
    public function testSubtractLargeNumbers() { $this->assertEquals(0, $this->calc->subtract(1000000, 1000000)); }
    public function testSubtractNegativeAndZero() { $this->assertEquals(-10, $this->calc->subtract(-10, 0)); }
    public function testSubtractTwoZeros() { $this->assertEquals(0, $this->calc->subtract(0, 0)); }
    public function testSubtractDecimalNumbers() { $this->assertEquals(-1.3, $this->calc->subtract(2.2, 3.5)); }
    public function testSubtractNegativeDecimal() { $this->assertEquals(-3.7, $this->calc->subtract(-2.5, 1.2)); }
    public function testSubtractMixedLargeSmall() { $this->assertEquals(999997, $this->calc->subtract(1000000, 3)); }
    public function testSubtractSameNumbers() { $this->assertEquals(0, $this->calc->subtract(4, 4)); }
    public function testSubtractPositiveFromNegative() { $this->assertEquals(-7, $this->calc->subtract(-2, 5)); }
    public function testSubtractNegativeFromPositive() { $this->assertEquals(7, $this->calc->subtract(5, -2)); }
    public function testSubtractBigNegativeSmallPositive() { $this->assertEquals(-1001, $this->calc->subtract(-1000, 1)); }
    public function testSubtractFloatPrecision() { $this->assertEquals(-0.1, $this->calc->subtract(0.1, 0.2), '', 0.0001); }
    public function testMultiplySmallPositives() { $this->assertEquals(6, $this->calc->multiply(2, 3)); }
    public function testMultiplySmallNegatives() { $this->assertEquals(6, $this->calc->multiply(-2, -3)); }
    public function testMultiplyPositiveAndNegative() { $this->assertEquals(-6, $this->calc->multiply(2, -3)); }
    public function testMultiplyWithZero() { $this->assertEquals(0, $this->calc->multiply(7, 0)); }
    public function testMultiplyLargeNumbers() { $this->assertEquals(1000000000000, $this->calc->multiply(1000000, 1000000)); }
    public function testMultiplyNegativeAndZero() { $this->assertEquals(0, $this->calc->multiply(-10, 0)); }
    public function testMultiplyTwoZeros() { $this->assertEquals(0, $this->calc->multiply(0, 0)); }
    public function testMultiplyDecimalNumbers() { $this->assertEquals(7.7, $this->calc->multiply(2.2, 3.5)); }
    public function testMultiplyNegativeDecimal() { $this->assertEquals(-3.0, $this->calc->multiply(-2.5, 1.2)); }
    public function testMultiplyMixedLargeSmall() { $this->assertEquals(3000000, $this->calc->multiply(1000000, 3)); }
    public function testMultiplySameNumbers() { $this->assertEquals(16, $this->calc->multiply(4, 4)); }
    public function testMultiplyNegativeBigPositiveSmall() { $this->assertEquals(-1000, $this->calc->multiply(-1000, 1)); }
    public function testMultiplyOddEven() { $this->assertEquals(15, $this->calc->multiply(3, 5)); }
    public function testMultiplyFloatPrecision() { $this->assertEquals(0.02, $this->calc->multiply(0.1, 0.2), '', 0.0001); }
    public function testMultiplyByOne() { $this->assertEquals(123, $this->calc->multiply(123, 1)); }
    public function testDivideSmallPositives() { $this->assertEquals(2, $this->calc->divide(6, 3)); }
    public function testDivideSmallNegatives() { $this->assertEquals(2, $this->calc->divide(-6, -3)); }
    public function testDividePositiveAndNegative() { $this->assertEquals(-2, $this->calc->divide(6, -3)); }
    public function testDivideWithZeroNumerator() { $this->assertEquals(0, $this->calc->divide(0, 5)); }
    public function testDivideLargeNumbers() { $this->assertEquals(1, $this->calc->divide(1000000, 1000000)); }
    public function testDivideDecimalNumbers() { $this->assertEqualsWithDelta(0.6285, $this->calc->divide(2.2, 3.5), 0.0001); }
    public function testDivideNegativeDecimal() { $this->assertEqualsWithDelta(-2.0833, $this->calc->divide(-2.5, 1.2), 0.0001); }
    public function testDivideMixedLargeSmall() { $this->assertEquals(333333, $this->calc->divide(1000000, 3)); }
    public function testDivideSameNumbers() { $this->assertEquals(1, $this->calc->divide(4, 4)); }
    public function testDivideNegativeByPositive() { $this->assertEquals(-5, $this->calc->divide(-10, 2)); }
    public function testDividePositiveByNegative() { $this->assertEquals(-5, $this->calc->divide(10, -2)); }
    public function testDivideBigNegativeSmallPositive() { $this->assertEquals(-1000, $this->calc->divide(-1000, 1)); }
    public function testDivideFloatPrecision() { $this->assertEqualsWithDelta(0.5, $this->calc->divide(0.1, 0.2), 0.0001); }
    public function testDivideByOne() { $this->assertEquals(123, $this->calc->divide(123, 1)); }
    public function testDivideByZeroThrows() {
        $this->expectException(\DivisionByZeroError::class);
        $this->calc->divide(5, 0);
    }
}
