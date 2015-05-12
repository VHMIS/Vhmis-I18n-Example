<?php

require_once 'loader.php';

use Vhmis\I18n\Formatter\Number;

$formatterNumber = new Number;
$number = 43565.56;
$percent = 0.1;
$fee = 7245000;
$feeCurrency = 'KRW'; // Korea Won

// Format number
echo $number;
echo ' | Việt: ' . $formatterNumber->format($number, 'vi_VN');
echo ' | Mỹ: ' . $formatterNumber->format($number, 'en_US');
echo ' | Hàn: ' . $formatterNumber->format($number, 'ko_KR');
echo "\n";

// Format percent number
echo $percent;
echo ' | Việt: ' . $formatterNumber->formatInPercent($percent, 'vi_VN');
echo ' | Mỹ: ' . $formatterNumber->formatInPercent($percent, 'en_US');
echo ' | Hàn: ' . $formatterNumber->formatInPercent($percent, 'ko_KR');
echo "\n";

// Format currency number
echo $fee;
echo ' | Việt: ' . $formatterNumber->formatInCurrency($fee, $feeCurrency, 'vi_VN');
echo ' | Mỹ: ' . $formatterNumber->formatInCurrency($fee, $feeCurrency, 'en_US');
echo ' | Hàn: ' . $formatterNumber->formatInCurrency($fee, $feeCurrency, 'ko_KR');
echo "\n";

// Format number in string
echo $fee . ' bằng chữ trong Tiếng Việt: ' . $formatterNumber->formatInString($fee, 'vi_VN') . "\n";
echo $fee . ' bằng chữ trong Tiếng Anh: ' . $formatterNumber->formatInString($fee, 'en_US') . "\n";
echo $fee . ' bằng chữ trong Tiếng Hàn: ' . $formatterNumber->formatInString($fee, 'ko_KR') . "\n";
echo "\n";
