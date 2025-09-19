<?php
$x = array(1, 2, 3, 4, 5);
var_dump($x);

unset($x[3]); // remove element at index 3 (value 4)
$x = array_values($x); // reindex
var_dump($x);
?>
