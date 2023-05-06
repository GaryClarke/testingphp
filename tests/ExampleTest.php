<?php // /tests/Example.test

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTwoStringsAreTheSame(): void
    {
        $string1 = 'garyclarketech';
        $string2 = 'garyclarketek';

        $this->assertFalse($string1 === $string2);
    }
}
