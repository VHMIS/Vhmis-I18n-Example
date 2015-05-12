<?php

require_once 'loader.php';

use Vhmis\I18n\DateTime\DateTime;

// Department time: 2015-08-02 22:00 in Vietnamese time
$departmentTime = new DateTime('Asia/Ho_Chi_Minh', 'gregorian', 'vi_VN');
$departmentTime->setDate(2015, 8, 2)->setTime(22, 30);

// Arrival time: after 4h25m flight duration in Korean Time
$arrivalTime = $departmentTime->createNewWithSameI18nInfo();
$arrivalTime->addHour(4)->addMinute(25);
$arrivalTime->setTimeZone('Asia/Seoul');

// Display info
echo 'Flight info for 2nd Group of 2nd Training Period' . "\n";
echo 'Asiana 756' . "\n";
echo 'Department: DAD - ' . $departmentTime->format(0, 'en_US') . "\n";
echo 'Arrival   : INC - ' . $arrivalTime->format(0, 'en_US') . "\n";
