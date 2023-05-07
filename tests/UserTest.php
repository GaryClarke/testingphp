<?php // tests/UserTest.php

namespace App\Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testExceptionsAreThrownForShortPasswords(): void
    {
        $user = new User();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('8 valid characters');

        $user->setPassword('sh0rt');
    }

    public function testExceptionThrownIfPasswordContainsExcludedChars(): void
    {
        try {

            $user = new User();

            $user->setPassword('p@55w0rd');

            $this->fail('A InvalidArgumentException should have been thrown');

        } catch (\InvalidArgumentException $exception) {

            $this->assertStringContainsString('8 valid characters',
                $exception->getMessage());
        }
    }
}
