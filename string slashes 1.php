<?php
$string='this is a <img src="E:\Pictures\Flowers\1.JPG"> string.';
$string_slashes = htmlentities($string);
echo $string_slashes;
?>