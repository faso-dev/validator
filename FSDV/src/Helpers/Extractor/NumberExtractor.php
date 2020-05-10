<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */


namespace FSDV\Helpers\Extractor;

/**
 * Class NumberExtractor
 * @package FSDV\Helpers\Extractor
 */
class NumberExtractor implements NumberExtractorInterface
{

    /**
     * @inheritDoc
     */
    public static function extract(string $full_number): string
    {
       $number = explode('00226', $full_number);

       return $number[1] ?? $full_number;
    }
}