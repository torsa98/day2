<?php
$string_one='This is my essay. I\'m going to be taking about php.';
$string_two='This is my essay. I will be taking about the subject php.';
similar_text($string_one, $string_two,$result);
echo 'The similarity between is, ',$result;
?>
