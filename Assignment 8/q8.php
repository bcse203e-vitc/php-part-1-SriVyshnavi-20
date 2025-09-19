<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($age);
echo "Ascending by value:<br>";
print_r($age);

ksort($age);
echo "<br>Ascending by key:<br>";
print_r($age);

arsort($age);
echo "<br>Descending by value:<br>";
print_r($age);

krsort($age);
echo "<br>Descending by key:<br>";
print_r($age);
?>
