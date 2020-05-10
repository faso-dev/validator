<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Telecel\Number;

use FSDV\Helpers\Extractor\NumberExtractor;
use FSDV\Number\NumberValidator;

/**
 * Class TelecelNumberValidator
 * @package FSDV\Telecel\Number
 */
class TelecelNumberValidator extends NumberValidator implements TelecelNumberValidatorInterface
{
    private const TELECEL_NUMBER_REGEX = '/^(58|68|69|78|79)/';

    /**
     * @inheritDoc
     */
    public static function isTelecel(string $number)
    {
        //0022667800000 => [78000000]
        $number = NumberExtractor::extract($number);
        if (isset($number)){
            return preg_match(self::TELECEL_NUMBER_REGEX, $number);
        }

        return false;
    }
}