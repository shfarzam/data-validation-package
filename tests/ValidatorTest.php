<?php

use DataValidation\Validator;
use PHPUnit\Framework\TestCase;

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
}