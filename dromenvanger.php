<?php
$HopesAndDreams = array();

echo("Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL);
$hoeveelheid = readline();
for($i=0;$i<=$hoeveelheid-1;$i++){
    echo("Wat is jouw naam?".PHP_EOL);
    $name = readline();
    $HopesAndDreams[$name] = array();
    echo("Hoeveel dromen ga je opgeven?".PHP_EOL);
    $hoeveelheid2 = readline();
    for($x=0;$x<=$hoeveelheid2-1;$x++){
        echo("Wat is jouw droom?".PHP_EOL);
        $droom = readline();
        $HopesAndDreams[$name][$x] = $droom;
    }
}

foreach($HopesAndDreams as $vriend=>$hoop){
    foreach($hoop as $dromen){
        echo($vriend." heeft als droom: ".$dromen.PHP_EOL);
    }
}


