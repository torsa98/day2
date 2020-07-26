<?php
$string='This is am example string & this is a tuitorial .';
$string_word_count = str_word_count($string, 1, '&.');
print_r ( $string_word_count);
?>
