<?php

require_once 'loader.php';

use Vhmis\I18n\DateTime\DateTime;

$date = new DateTime('Asia/Ho_Chi_Minh', 'chinese', 'vi_VN');
$date->setDay(1)->setMonth(1);
$date->relatedYear->set(2015);

// Format in Chinese calendar
echo $date->format([0, -1]) . "\n";

// Convert date to Gregorian calendar
$gregorianDate = $date->convert->to('gregorian');

// Format in Gregorian calendar
echo $gregorianDate->format([0, -1]) . "\n\n";

// Convert Vietnamese Kings' Commemoration Day
$date->setDay(10)->setMonth(3);
echo $date->format([0, -1]) . "\n";
$gregorianDate = $date->convert->to('gregorian');
echo $gregorianDate->format([0, -1]) . "\n";
