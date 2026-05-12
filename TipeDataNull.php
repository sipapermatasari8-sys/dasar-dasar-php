<?php 

$name = "martin";
$name = null;

$age = null;

echo "name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "martin";
unset($contoh);

$contoh = "edwards";
$contoh = null;

var_dump(isset($contoh));
?>