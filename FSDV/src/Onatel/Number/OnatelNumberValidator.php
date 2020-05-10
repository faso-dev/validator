<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\Onatel\Number;


use FSDV\Helpers\Extractor\NumberExtractor;
use FSDV\Number\NumberValidator;

/**
 * Class OnatelNumberValidator
 * @package FSDV\Onatel\Number
 */
class OnatelNumberValidator extends NumberValidator implements OnatelNumberValidatorInterface
{
    private const TELMOB_NUMBER_REGEX = '/^(01|51|52|53|60|61|62|63|70|71|72|73)/';

    /**
     * @inheritDoc
     */
    public static function isTelmob(string $number): bool
    {
        //0022670000000 => [70000000]
        $number = NumberExtractor::extract($number);
        if (isset($number)){
            return preg_match(self::TELMOB_NUMBER_REGEX, $number);
        }

        return false;
    }
}