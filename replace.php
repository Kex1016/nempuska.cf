<?php
function replaceThis() {
    include 'ul.txt';
    include 'oldal-php-eredeti.html';
    $file = file_get_contents('ul.txt');
    return $file;
}
$content = file_get_contents("index.php");
$content = str_replace("{{TEXT_TO_REPLACE}}", replaceThis(), $content);
echo $content;
?>