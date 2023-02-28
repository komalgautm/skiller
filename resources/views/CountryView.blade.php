<?php
foreach($country as $countries){
    echo $countries;
}

echo "<br>";
$one = bcrypt('ABC');

echo $one."<br>";

$two = bcrypt('ABC');

echo $two."<br>";

if(Hash::check('ABC', $one)){
    echo "match";
} else {
    echo "not match";
}


echo "<br>";
$one = md5('ABC');

echo $one."<br>";

$two = md5('ABC');

echo $two."<br>";

if($one === $two){
    echo "match";
} else {
    echo "not match";
}