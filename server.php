<?php

$discLists = json_decode(file_get_contents('discList.json'), true);


if (isset($_GET['discInfo'])) {
    $discInfo = $_GET['discInfo'];
    //var_dump($discInfo);

    $discLists = $discLists[$discInfo];
}





//var_dump($discLists);  //arriva array associativo corretto
header('Content-type: application/json');

echo json_encode($discLists);
