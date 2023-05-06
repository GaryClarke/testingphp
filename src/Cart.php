<?php # /src/Cart.php

namespace App;

class Cart
{
    public float $price;
    private static float $tax = 1.2;

    public function getNetPrice(): float
    {
        return $this->price * self::$tax;
    }

    public static function setTax($tax): void
    {
        self::$tax = $tax;
    }
}
