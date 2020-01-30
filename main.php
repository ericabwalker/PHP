<?php 
require 'constants.php';

$array = array("first_name"=>"Erica", "nickname"=>"America", "language"=>"PHP", "int_one"=>1, "int_two"=>2);

$result = $array['int_two'] * $array['int_one'];

echo 'The result of ' . $array['int_two'] . ' * ' . $array['int_one'] . ' is: ' . $result . "\n";

$keytar = "keytar";
$hot_chicken = "hot chicken";
$aesthetic = "aesthetic";
$meditation = "meditation";
$bitters = "bitters";

$multiline_str = <<<EOD
Lorem ipsum dolor amet synth farm-to-table $keytar distillery. Activated charcoal skateboard pinterest waistcoat vice. 
Kitsch organic tilde, kombucha $hot_chicken direct trade. Chambray copper mug kombucha, celiac brooklyn kickstarter 
biodiesel waistcoat hexagon butcher tousled viral. Williamsburg actually portland, 90's ugh.

Squid meh listicle banjo roof party. Locavore poke meggings enamel pin health goth tbh edison bulb kickstarter tilde 
cliche listicle snackwave. Next level $aesthetic lo-fi, migas kombucha mlkshk. Vice activated charcoal 
$meditation seitan mixtape chillwave.

Tofu everyday carry gochujang. Sustainable flannel $bitters 8-bit hammock craft beer prism. DIY edison bulb readymade. 
Typewriter stumptown, irony ugh polaroid waistcoat pinterest meditation pork belly bespoke.
EOD;

echo $multiline_str;
?>