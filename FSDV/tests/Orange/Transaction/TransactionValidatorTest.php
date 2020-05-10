<?php


namespace FSDV\Orange\Transaction;


use FSDV\Validator\Validator;
use PHPUnit\Framework\TestCase;

class TransactionValidatorTest extends TestCase
{
    public function testValidNumberTransaction()
    {
        $this->assertTrue(Validator::isOrangeTransactionNumber('CO200505.1245.P94288.'));
        $this->assertTrue(Validator::isOrangeTransactionNumber('BO200505.3456.Z94798.'));
        $this->assertTrue(Validator::isOrangeTransactionNumber('PPO20005.9086.B94008.'));
    }

    public function testInvalidNumberTransaction()
    {
        $this->assertFalse(Validator::isOrangeTransactionNumber('MYI7982989-MSPPQK_Ç0'));
        $this->assertFalse(Validator::isOrangeTransactionNumber('PPO200505.9086.B94008'));
        $this->assertFalse(Validator::isOrangeTransactionNumber('ZZO200505.9086..B94008'));
    }
}