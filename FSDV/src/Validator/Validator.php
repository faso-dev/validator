<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Validator;


use FSDV\Cnib\CnibValidator;
use FSDV\Number\NumberValidator;
use FSDV\Onatel\Number\OnatelNumberValidator;
use FSDV\Orange\Number\OrangeNumberValidator;
use FSDV\Orange\Transaction\TransactionValidator;
use FSDV\Telecel\Number\TelecelNumberValidator;

/**
 * Class Validator
 * @package FSDV\Validator
 */
class Validator
{
    /**
     * @param string $number
     * @return bool|false|int
     */
    public static function isOrange(string $number)
    {
        return OrangeNumberValidator::isOrange($number);
    }

    /**
     * @param string $number
     * @return bool|false|int
     */
    public static function isTelecel(string $number)
    {
        return TelecelNumberValidator::isTelecel($number);
    }

    /**
     * @param string $number
     * @return bool|false|int
     */
    public static function isTelmob(string $number)
    {
        return OnatelNumberValidator::isTelmob($number);
    }

    /**
     * @param string $number
     * @return bool
     */
    public static function isAValidNumber(string $number)
    {
        return NumberValidator::validate($number);
    }

    /**
     * @param string $cnib_number
     * @return bool
     */
    public static function isACnibNumber(string $cnib_number)
    {
        return CnibValidator::validate($cnib_number);
    }

    /**
     * @param string $transaction_number
     * @return bool
     */
    public static function isOrangeTransactionNumber(string $transaction_number)
    {
        return TransactionValidator::validate($transaction_number);
    }
}