<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 7/8/2015
 * Time: 10:43 PM
 */

echo("<h3> Perulangan </h3>");


for ($x=0; $x<10; $x++){
    echo("$x <br>");
}
echo("<br>");

for ($x=10; $x>0; $x--){
    echo("$x <br>");
}
echo("<br>");

$music = array("psychedelic","blues","classic");
for ($x=0; $x<count($music); $x++){
    echo $music[$x] ."<br>";
}

echo("<br>");
$food = array('fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea'));

// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2
echo "<br>";

$planet = array('mars' => 'red',
    'merkurius' => 'blue',
    'pluto' => 'green');

echo "total planet: " . count($planet, COUNT_RECURSIVE);
echo "<br>";
echo "total planet: " . count($planet);
echo "<br>";

for ($x=0; $x<count($planet); $x++){
    echo $planet['mars'] ."<br>";
}

echo "<br>";

foreach ($planet as $x => $x_value){
    echo "Key: " . $x . ", Value: " . $x_value . "<br>";
}