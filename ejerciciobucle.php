<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$ejercicio_1 = "Ejercicio 1 - Mostrar los números del 1 al 100";
echo $ejercicio_1;

$i=1;
do {
    print "<p>$i</p>\n";
    $i++;
} while ($i <= 100);

$ejercicio_2 = "Ejercicio 2 - Mostrar los números del 100 al 1";
echo $ejercicio_2;

for($i = 100; $i >= 1; --$i){
    print "<p>$i</p>\n";
  }  

 $ejercicio_3 = "Ejercicio 3 - Mostrar los números pares del 1 al 100";
echo $ejercicio_3;

$i=0;

for($i=0; $i<=100; $i= $i+2)
{
    print "<p>$i</p>\n";
  }  

$ejercicio_4 = "Ejercicio 4 - Mostrar los números impares del 1 al 100";
echo $ejercicio_4;

$i=1;

for($i=1; $i<=100; $i= $i+2)
{
    print "<p>$i</p>\n";
  }  

  $ejercicio_5 = "Ejercicio 5 - Mostrar la suma de los números de 1 a 20.";
echo $ejercicio_5;

$i=1;

for($i=1; $i<=20; $i= $i+1)
{
    print "<p>$i</p>\n";
  } 

  $ejercicio_6 = "Ejercicio 6 - Mostrar la suma de números pares de 1 a 20.";
  echo $ejercicio_6;
  
  $i=1;
  
  for($i=0; $i<=20; $i= $i+2)
  {
      print "<p>$i</p>\n";
    } 

?>
</body>
</html>