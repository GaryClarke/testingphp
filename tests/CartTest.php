<?php # /tests/CartTest.php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testNetPriceIsCalculatedCorrectly(): void
    {
        // Setup
        $cart = new Cart();
        $cart->price = 10;

        // Do something
        $netPrice = $cart->getNetPrice();

        // Make assertions
        $this->assertEquals(12, $netPrice);
    }
}
