<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Orange\Number;

use FSDV\Validator\ValidatorInterface;

/**
 * Interface NumberValidatorInterface
 * @package FSDV\Orange\Number
 */
interface OrangeNumberValidatorInterface
{
    /**
     * @param string $number numéro de télephone à vérifier s'il est valide et s'agit d'un numéro d'orange
     * @return bool|false|int
     */
    public static function isOrange(string $number);
}