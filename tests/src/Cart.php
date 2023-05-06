<?php # src/Cart.php

class Cart
{
    public float $price;
    public static float $tax = 1.2;

    public function getNetPrice(): float
    {
        return $this->price * self::$tax;
    }
}
