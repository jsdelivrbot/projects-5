<?php
clearstatcache();
$myFile = "../".$_POST["url"];
//var_dump($myFile);die;
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $_POST["data"];
//var_dump($stringData);die;
fwrite($fh, $stringData);
fclose($fh)
?>