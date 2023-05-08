<?php // /tests/example-functions.php

function product(int $a, int $b): int
{
    return $a * $b;
}

function quotient(int $a, int $b): int|float
{
    return $a / max($b, 1);
}