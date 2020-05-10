<?php declare(strict_types=1);

namespace FSDV\Cnib;

use FSDV\Validator\Validator;
use PHPUnit\Framework\TestCase;

/**
 * Class CnibValidatorTest
 */
final class CnibValidatorTest extends TestCase
{
    public function testValidCnibNumber()
    {
        $this->assertTrue(Validator::isACnibNumber('B0000000'));
    }

    public function testInvalidCnibNumber()
    {
        $this->assertFalse(Validator::isACnibNumber('B000000M'));
        $this->assertFalse(Validator::isACnibNumber('B000000M0'));
        $this->assertFalse(Validator::isACnibNumber('B000000090'));
    }
}