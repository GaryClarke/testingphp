<?php declare(strict_types=1); # /tests/CartTest.php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected Cart $cart;

    protected function setUp(): void
    {
        Cart::setTax(1.2);
        $this->cart = new Cart();
    }

    public function testTheCartTaxValueCanBeChangedStatically(): void
    {
        // Setup
        $this->cart->setPrice(10);

        // Do something
        Cart::setTax(1.5);
        $netPrice = $this->cart->getNetPrice();

        // Make assertions
        $this->assertEquals(15, $netPrice);
    }

    public function testNetPriceIsCalculatedCorrectly(): void
    {
        // Setup
        $this->cart->setPrice(10);

        // Do something
        $netPrice = $this->cart->getNetPrice();

        // Make assertions
        $this->assertEquals(12, $netPrice);
    }

    public function testErrorHappensWhenPriceIsSetAsString(): void
    {
        try {

            $this->cart->setPrice('5.99');

            $this->fail('Price can not be a float');
        } catch (\Throwable $throwable) {
            $this->assertStringContainsString('must be of type float', $throwable->getMessage());
        }
    }
}
