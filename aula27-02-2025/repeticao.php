<?php
   $idade =20;
   if($idade >= 18)
     echo"Voce e maior de idade";
    else{
        echo"voce e menor de idade";
    }
    $nota = 6;
    if($nota >= 6)
      echo "acima media";
    elseif($nota == 6)
    echo "na media";
else
echo "abaixo damedia";

// operador ternario
//                  if                 else
echo $idade >=18 ?"maior de idade":"menor de idade";

// while
$i = 1;
while ($i <= 10) {
    echo "%i <br/>";
    $i++;
}
// do while
$i = 1;
do {
    echo "$i<br/>";
    $i++;
} while ($i <= 10);

// for
for ($i=0; $i < 10; $i++) { 
   echo "$i<br/>";
}
?>