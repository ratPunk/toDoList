<?php

$file = 'list.txt';
$fileOpen = fopen($file,'a');

if( $file ) {
    $taskDescription = "<span class='opisanie'>" . "Описание задачи: " . "</span>" . $_POST['taskDescription'] . "<br>" . "\n";
    $task = "<span class='zadacha'>" . "Задача: " . "</span>" . $_POST['task'] . "<br>" . "\n";

    $record = fwrite($fileOpen, $taskDescription);
    $record = fwrite($fileOpen, $task);

    fclose($fileOpen);

    if( $record == false ) {
        die('ошибка');
    }else{
        header('Location: index.php');
    }
}