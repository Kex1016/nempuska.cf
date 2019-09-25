<?php
if(!empty($_POST['title']) && !empty($_POST['content'])) {
    $data = PHP_EOL . "<div class='card blue-grey darken-1'><div class='card-content white-text'><span class='card-title'>" . $_POST['title'] . "</span></div><hr><div class='card-content white-text'><p>" . $_POST['content'] . "</p></div></div>{{SEPARATOR}}";
    $filename = "ul.txt";
    if (!file_exists($filename)) {
        $fh = fopen($filename, 'w') or die("Can't create file");
    }
    $ret = file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Hiba az elküldéskor.<script type="text/javascript">setTimeout(() => {window.location=\'bekuld.php\';}, 3000);</script>');
    }
    else {
        echo 'Siker! <script type="text/javascript">setTimeout(() => {window.location=\'index.php\';}, 3000);</script>';
    }
}
else {
    die('Írj be valamit! <script type="text/javascript">setTimeout(() => {window.location=\'bekuld.php\';}, 3000);</script>');
    exit();
}
?>