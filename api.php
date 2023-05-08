<?php
$text = file_get_contents('./data.json');

$php_array = json_decode($text, true);
// var_dump($php_array);

if (isset($_POST['toDoItem'])) {
    $new_to_do_item = array('name' => $_POST['toDoItem']);
    array_push($php_array, $new_to_do_item);
    file_put_contents('./data.json', json_encode($php_array));
}

header('Content-Type: application/json');
echo json_encode($php_array);