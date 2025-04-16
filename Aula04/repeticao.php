<?php

$i = 1;

while ($i < 6) {
    echo $i ;
    echo "<br>";
    $i++;
}

echo "________ <br>";
// ou 
echo "<br>";

$i = 1;

do {
    echo $i;
    $i++;
    echo "<br>";
}while ($i < 6);

echo "________ <br>";
//ou
echo "<br>";

for ($i = 0; $i <= 10; $i++) {
    echo "O número é: $i <br>";
}

?>