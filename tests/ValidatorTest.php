<?php

require './vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use shfarzam\DataValidation\Validator as Validator;

class ValidatorTest extends TestCase
{
    public function testEmailValidation()
    {
        $this->assertTrue(Validator::validateEmail('example@example.com'));
        $this->assertFalse(Validator::validateEmail('invalid_email'));
    }

    public function testURLValidation()
    {
        $this->assertTrue(Validator::validateURL('https://www.example.com'));
        $this->assertFalse(Validator::validateURL('invalid_url'));
    }

    public function testPasswordValidation()
    {
        $this->assertTrue(Validator::validatePassword('123456798', 8));
        $this->assertFalse(Validator::validatePassword('invalid_pass', 20));
        $this->assertTrue(Validator::validatePassword('Aa654321@', 8, true));
        $this->assertFalse(Validator::validatePassword('aa654321@', 8, true));
        $this->assertFalse(Validator::validatePassword('Aa654321', 8, true));
    }
}
