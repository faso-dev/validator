<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */


namespace FSDV\Validator;


/**
 * Interface ValidatorInterface
 * @package FSDV\Validator
 */
interface ValidatorInterface
{

    /**
     * Permet de vérifier si la chaine réçu obéit au règle
     * @param string $str
     * @return bool
     */
    public static function validate(string $str): bool ;
}