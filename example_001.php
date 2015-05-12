<?php

require_once 'loader.php';

use Vhmis\I18n\DateTime\DateTime;

$date = new DateTime('Asia/Ho_Chi_Minh', 'gregorian', 'vi_VN');
$date->setDate(2015, 05, 07)->setTime(16, 14, 15);

// Format by init locale
echo $date->format([1, -1]) . "\n";
echo $date->format(0) . "\n";
echo $date->format('MMMM') . "\n\n";

// Format by other locale
echo $date->format([1, -1], 'en_US') . "\n";
echo $date->format(0, 'en_US') . "\n";
echo $date->format('MMMM', 'en_US') . "\n\n";

echo $date->format([1, -1], 'ko_KR') . "\n";
echo $date->format(0, 'ko_KR') . "\n";
echo $date->format('MMMM', 'ko_KR') . "\n";
