<?php
if(!empty($_POST['text'])){
    $data =  PHP_EOL . "<div class='card blue-grey darken-1'><div class='card-content white-text'><span class='card-title'>" . $_POST['text'] . "</span></div><div class='card-content'><p>";
    $file = file_put_contents('ul.txt', $data, FILE_APPEND | LOCK_EX);
    }
?>