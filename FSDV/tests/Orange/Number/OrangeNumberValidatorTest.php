<?php


namespace FSDV\Orange\Number;


use FSDV\Validator\Validator;
use PHPUnit\Framework\TestCase;

class OrangeNumberValidatorTest extends TestCase
{
    public function testValidNumber()
    {
        $this->assertTrue(Validator::isOrange('0022656000000'));
        $this->assertTrue(Validator::isOrange('57000000'));
        $this->assertTrue(Validator::isOrange('77000000'));
    }

    public function testInvalidNumber()
    {
        $this->assertFalse(Validator::isOrange('0022650000000'));

        $this->assertFalse(Validator::isOrange('51000000'));
        $this->assertFalse(Validator::isOrange('78000000'));
    }
}