<?php

require_once 'loader.php';

use Vhmis\I18n\Translator\Translator;
use Vhmis\I18n\Translator\Loader\PhpArray;

$loader = new PhpArray;
$loader->setPath('data');

$translator = new Translator();
$translator->setLoader($loader);
$translator->setFallbackLocale('en_US');

echo 'Dịch "It is raining" sang' . "\n";

// Translate to Vietnamese, default locale vi_VN
echo 'Tiếng Việt: ' . $translator->translate('It is raining') . "\n";

// Translate to Korean
echo 'Tiếng Hàn: ' . $translator->translate('It is raining', null, 'Default', 'ko_Kr') . "\n";

// Translate to Russian, but not found, fallback to English
echo 'Tiếng Nga (không có trong dữ liệu): ' . $translator->translate('It is raining', null, 'Default', 'ru_RU') . "\n";

// Translate with params
echo 'Tiếng Việt: ' . $translator->translate('Hi! xxx', ['Lê Nhật Anh']) . "\n";
echo 'Tiếng Hàn: ' . $translator->translate('Hi! xxx', ['Lê Nhật Anh'], 'Default', 'ko_Kr') . "\n";

// Plural translation
echo '1: ' . $translator->translateCardinalPlural('xxx tin nhắn mới', 1, [1], 'Default', 'vi_VN') . "\n";
echo '0: ' . $translator->translateCardinalPlural('xxx tin nhắn mới', 0, [0], 'Default', 'vi_VN') . "\n";
echo '1: ' . $translator->translateCardinalPlural('xxx tin nhắn mới', 1, [1], 'Default', 'en_US') . "\n";
echo '0: ' . $translator->translateCardinalPlural('xxx tin nhắn mới', 0, [0], 'Default', 'en_US') . "\n";