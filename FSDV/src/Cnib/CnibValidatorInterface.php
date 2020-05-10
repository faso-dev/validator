<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Cnib;

use FSDV\Validator\ValidatorInterface;

/**
 * Interface CnibValidatorInterface
 * @package FSDV\Cnib
 */
interface CnibValidatorInterface extends ValidatorInterface
{
    /**
     * Permet de vérifier si un numero de CNIB répond au norme de la CNIB BURKINABE
     * @param string $cnib
     * @return bool
     */
    public static function validate(string $cnib): bool ;
}