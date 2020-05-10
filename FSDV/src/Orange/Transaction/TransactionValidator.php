<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Orange\Transaction;

/**
 * Class TransactionValidator
 * @package FSDV\Orange\Transaction
 */
class TransactionValidator implements TransactionNumberValidatorInterface
{

    private const TRANSACTION_NUMBER_REGEX = '/^([A-Z0-9]{8}\.{1}[0-9]{4}\.{1}[A-Z0-9]{6}\.{1})$/';

    /**
     * @inheritDoc
     */
    public static function validate(string $transaction_number): bool
    {
        return preg_match(self::TRANSACTION_NUMBER_REGEX, $transaction_number);
    }
}