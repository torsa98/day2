<?php
$string='abcdefghijklop0123456978';
$string_shuffled=str_shuffle($string);
$half = substr($string_shuffled,0,5);
echo $half;
?>
