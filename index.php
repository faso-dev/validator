<?php

use FSDV\Validator\Validator;

require_once __DIR__.'/vendor/autoload.php';

var_dump(Validator::isACnibNumber('0022656000000'));
/*
Validator::isTelmobNumber('0022651000000');
Validator::isTelecelNumber('0022658000000');
Validator::isAValidNumber('0022670000000');
Validator::isAValidCnibNumber('B0000000');
Validator::isOrangeValidTransactionNumber('CO200505.1245.A94288.');*/