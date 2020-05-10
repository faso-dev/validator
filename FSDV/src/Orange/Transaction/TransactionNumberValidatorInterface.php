<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Orange\Transaction;


use FSDV\Validator\ValidatorInterface;

/**
 * Interface TransactionNumberValidatorInterface
 * @package FSDV\Orange\Transaction
 */
interface TransactionNumberValidatorInterface extends ValidatorInterface
{
    /**
     * Vérifie si un numéro de transaction Orange Money correspond au norme
     * @param string $transaction_number le numéro de la transaction à vérifier
     * @return bool
     */
    public static function validate(string $transaction_number): bool;
}