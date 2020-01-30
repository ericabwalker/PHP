<?php 
require 'constants.php';

$array = array("first_name"=>"Erica", "nickname"=>"America", "language"=>"PHP", "int_one"=>1, "int_two"=>2);

$result = $array['int_two'] * $array['int_one'];

echo 'The result of ' . $array['int_two'] . ' * ' . $array['int_one'] . ' is: ' . $result;
?>