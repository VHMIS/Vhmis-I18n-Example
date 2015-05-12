<?php

require_once 'loader.php';

use Vhmis\I18n\Resource\Resource;

$word = 'week';

echo Resource::getDateField('week', 'vi')['displayName'] . ' - ';
echo Resource::getDateField('week', 'en')['displayName'] . ' - ';
echo Resource::getDateField('week', 'ko')['displayName'] . "\n";

$month = 12;

echo Resource::getCalendarField('months', $month, 'wide', 'stand-alone', 'gregorian', 'vi') . ' - ';
echo Resource::getCalendarField('months', $month, 'wide', 'stand-alone', 'gregorian', 'en') . ' - ';
echo Resource::getCalendarField('months', $month, 'wide', 'stand-alone', 'gregorian', 'ko') . "\n";