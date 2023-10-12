<?php


$discLists = json_decode(file_get_contents('discList.json'), true);

//var_dump($discLists);  //arriva array associativo corretto

header('Content-type: application/json');

echo json_encode($discLists);
