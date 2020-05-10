<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */
namespace FSDV\Number;

/**
 * Class NumberValidator
 * @package FSDV\Orange\Number
 */
class NumberValidator implements NumberValidatorInterface
{

    private const NUMBER_REGEX = '/^((00226)\d{8})$/';

    /**
     * @inheritDoc
     */
    public static function validate(string $number): bool
    {
        return preg_match(self::NUMBER_REGEX, $number);
    }

}