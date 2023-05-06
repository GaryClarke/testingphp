<?php // /tests/Example.test

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTwoStringsAreTheSame(): void
    {
        $string1 = 'garyclarketech';
        $string2 = 'garyclarketek';

        $this->assertFalse($string1 === $string2);
    }

    public function testProductFunction(): void
    {
        require 'example-functions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }
}
