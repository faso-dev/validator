<?php


namespace FSDV\Number;


use FSDV\Validator\Validator;
use PHPUnit\Framework\TestCase;

class NumberValidatorTest extends TestCase
{
    public function testValidNumber()
    {
        $this->assertTrue(Validator::isAValidNumber('0022656000000'));
    }
    public function testInvalidNumber()
    {
        $this->assertFalse(Validator::isAValidNumber('56000000'));
        $this->assertFalse(Validator::isAValidNumber('+22656000000'));
    }
}