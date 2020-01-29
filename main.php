<?php 
require 'constants.php';

$array = array("first_name"=>"Erica", "nickname"=>"America", "language"=>"PHP", "int_one"=>1, "int_two"=>2);

$result = $array['int_two'] * $array['int_one'];

echo "The result of ";
echo $array['int_two'];
echo " * ";
echo $array['int_one'];
echo " is: ";
echo $result;
?>