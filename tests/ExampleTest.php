<?php # /tests/ExampleTest.php

namespace App\Tests;

use App\Cart;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTwoStringsAreTheSame(): void
    {
        $string1 = 'garyclarketech';
        $string2 = 'garyclarketek';

        $this->assertFalse($string1 == $string2);
    }

    public function testProductIsCalculatedCorrectly(): void
    {
        require 'example-functions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }

    public function testSomeAssertions(): void
    {
        // assertArrayHasKey
        $testArray = ['foo' => 'bar'];
        $this->assertArrayHasKey('foo', $testArray);

        $this->assertArrayNotHasKey('zoo', $testArray);

        // assertContains
        $this->assertContains('bar', $testArray);

        $this->assertNotContains('baz', $testArray);

        // assertStringContainsString
        $string = json_encode([
            'price' => '8.99',
            'date'  => '2021-12-04',
        ]);

        $this->assertStringContainsString('"date":"2021-12-04"', $string);

        // assertInstanceOf
        $cart = new Cart();
        $this->assertInstanceOf(Cart::class, $cart);

        // assertCount
        $this->assertCount(5, [1, 2, 3, 4, 5]);

        // assertEquals / assertSame
        $value = 21;
        $this->assertEquals('21', $value);

        // assertGreaterThan (or equal)
        $this->assertGreaterThanOrEqual(21, $value);

        // assertIsArray
        $this->assertTrue(is_array(321), 'Failed asserting that 321 is an array');
    }
}
