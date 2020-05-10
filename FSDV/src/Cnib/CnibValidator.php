<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */


namespace FSDV\Cnib;

/**
 * Class CnibValidator
 * @package FSDV\Cnib
 */
class CnibValidator implements CnibValidatorInterface
{
    private const CNIB_NUMBER_REGEX = '/^(B\d{7})$/';

    /**
     * @inheritDoc
     */
    public static function validate(string $cnib): bool
    {
        return preg_match(self::CNIB_NUMBER_REGEX, $cnib);
    }
}