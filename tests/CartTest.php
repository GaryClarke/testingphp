<?php # /tests/CartTest.php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    protected Cart $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    public function testNetPriceIsCalculatedCorrectly(): void
    {
        // Setup
        $this->cart->price = 10;

        // Do something
        $netPrice = $this->cart->getNetPrice();

        // Make assertions
        $this->assertEquals(12, $netPrice);
    }

    public function testTheCartTaxValueCanBeChangedStatically(): void
    {
        // Setup
        $this->cart->price = 10;

        // Do something
        Cart::setTax(1.5);
        $netPrice = $this->cart->getNetPrice();

        // Make assertions
        $this->assertEquals(15, $netPrice);
    }
}
