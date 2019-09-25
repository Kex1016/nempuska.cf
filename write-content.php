<?php
if(!empty($_POST['text'])){
    $data =  $_POST['text'] . "</p></div></div>";
    $file = file_put_contents('ul.txt', $data, FILE_APPEND | LOCK_EX);
    }
?>