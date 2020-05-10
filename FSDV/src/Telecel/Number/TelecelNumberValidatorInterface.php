<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Telecel\Number;


/**
 * Interface TelecelNumberValidatorInterface
 * @package FSDV\Telecel\Number
 */
interface TelecelNumberValidatorInterface
{
    /**
     * @param string $number numéro de télephone à vérifier s'il d'un numéro Telecel
     * @return bool|false|int
     */
    public static function isTelecel(string $number);
}