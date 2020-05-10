<?php


namespace FSDV\Onatel\Number;

/**
 * Interface OnatelNumberValidatorInterface
 * @package FSDV\Onatel\Number
 */
interface OnatelNumberValidatorInterface
{
    /**
     * Permet de vérifier si un numéro e
     * @param string $number
     * @return bool
     */
    public static function isTelmob(string $number): bool;
}