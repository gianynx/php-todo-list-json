<?php
$text = file_get_contents('./data.json');

$php_array = json_decode($text, true);
var_dump($php_array);