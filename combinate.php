<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiary = __DIR__ . '/apiary.apib';
$readme = __DIR__ . '/README.md';
file_put_contents($apiary, '');

foreach (\Nette\Utils\Finder::findFiles('*.md')->in(__DIR__ . '/markdown/') as $key=>$file) {
  $content = file_get_contents($key);
  file_put_contents($apiary, $content ."\n\n", FILE_APPEND);
}

file_put_contents($readme, file_get_contents($apiary));



