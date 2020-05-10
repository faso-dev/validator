<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */


namespace FSDV\Helpers\Extractor;

/**
 * Interface NumberExtractorInterface
 * @package FSDV\Helpers\Extractor
 */
interface NumberExtractorInterface
{
    /**
     * Permet d'extraire uniquement le numéro
     * @param string $full_number le numéro dans son format complet
     * @return string
     */
    public static function extract(string $full_number): string ;
}