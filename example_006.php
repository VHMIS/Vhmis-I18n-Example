<?php

require_once 'loader.php';

use Vhmis\I18n\Plural\Plural;

$number = 0;

echo $number . ' có kiểu số nhiều: ';
echo 'trong tiếng Việt: ' . Plural::getCardinalType($number, 'vi') . ' - ';
echo 'trong tiếng Anh: ' . Plural::getCardinalType($number, 'en') . ' - ';
echo 'trong tiếng Nga: ' . Plural::getCardinalType($number, 'ru') . "\n";

$number = 1;

echo $number . ' có kiểu số nhiều: ';
echo 'trong tiếng Việt: ' . Plural::getCardinalType($number, 'vi') . ' - ';
echo 'trong tiếng Anh: ' . Plural::getCardinalType($number, 'en') . ' - ';
echo 'trong tiếng Nga: ' . Plural::getCardinalType($number, 'ru') . "\n";

$number = 2;

echo $number . ' có kiểu số nhiều: ';
echo 'trong tiếng Việt: ' . Plural::getCardinalType($number, 'vi') . ' - ';
echo 'trong tiếng Anh: ' . Plural::getCardinalType($number, 'en') . ' - ';
echo 'trong tiếng Nga: ' . Plural::getCardinalType($number, 'ru') . "\n";
