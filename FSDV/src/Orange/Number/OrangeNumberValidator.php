<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */
namespace FSDV\Orange\Number;

use FSDV\Helpers\Extractor\NumberExtractor;
use FSDV\Number\NumberValidator;

/**
 * Class NumberValidator
 * @package FSDV\Orange\Number
 */
class OrangeNumberValidator extends NumberValidator implements OrangeNumberValidatorInterface
{

    private const ORANGE_BF_NUMBER_REGEX = '/^(54|55|56|57|74|75|76|77|64|65|66|67|07)/';

    /**
     * Permet de vérifier s'il s'agit d'un numéro Orange Burkina
     * @param string $number le numéro à vérifier
     * @return bool|false|int
     */
    public static function isOrange(string $number)
    {
        //0022667000000 => [67000000]
        $number = NumberExtractor::extract($number);
        if (isset($number)){
            return preg_match(self::ORANGE_BF_NUMBER_REGEX, $number) === 1;
        }

        return false;
    }

}