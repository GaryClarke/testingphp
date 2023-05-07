<?php // src/User.php

namespace App;

class User
{
    private string $password;
    private const EXCLUDED_CHARS = '@';

    public function setPassword(string $password): void
    {
        if (strlen($password) < 8
            || str_contains($password, self::EXCLUDED_CHARS)) {

            throw new \InvalidArgumentException(
                'The password must be at least 8 valid characters');
        }

        $this->password = $password;
    }
}
