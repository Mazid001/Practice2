<?php
$myfile = fopen("savings.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("savings.txt"));
fclose($myfile);
?>