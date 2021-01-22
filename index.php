<?php
// exo 1

for($a = 0 ; $a < 11 ; $a++){
    echo "$a ";
}

echo"<br>";
// exo 2

$b = 0;
while ($b < 21){
    $c = rand(1,100);
    $d = $b * $c;
    echo " $d ";
    $b++;
}

// exo 3
echo"<br>";

// exo 4
$e = 1;

for($e = 1 ; $e < 11 ; $e++){
    echo "$e <br>";
    $e = $e * 1.5;
}

// exo 5
echo"<br>";

for($f = 1 ; $f < 16 ; $f++){
  echo " $f - on y arrive presque ";
};

// exo 6
echo"<br>";

for($g = 20 ; $g >= 0 ; $g--){
    echo " $g - C'est presque bon ";
};

// exo 7
echo"<br>";

for($h = 1 ; $h < 100 ; $h+=15){
    echo " $h - On tient le bon bout ";
};

// exo 8
echo"<br>";

for($i = 200 ; $i > 0 ; $i-=12){
    echo " $i - Enfin !!!! ";
};

