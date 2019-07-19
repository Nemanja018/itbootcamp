<?php
// 13
$broj = 0;

for($i = 5; $i <= 150; $i++)
{
    if($i % 13 == 0)
    {
        $broj++;
    }
}

echo $broj;
echo "<br>";

// 14

$n = 10;
$m = 20;
$brojeva = 0;
$suma = 0;

for($i = $n; $i <= $m; $i++)
{
    $suma += $i;
    $brojeva++;
}
$sredina = $suma / $brojeva;

echo $sredina;

echo "<br>";

// 15

$e = -46;
$d = 35;
$neg = 0;
$poz = 0;

for($i = $e; $i <= $d;$i++)
{
    if($i < 0)
    {
        $neg++;
    }
    else{
        $poz++;
    }
}
echo " $poz pozitivnih i $neg negativnih";
echo "<br>";

//16
$brojac = 0;

for($i = 5; $i <= 50; $i++)
{
    if($i % 3 == 0 || $i % 5 == 0)
    {
        $brojac++;
    }
}
echo $brojac;
echo "<br>";


// 17 Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.


$n = 1;
$m = 15;
$suma = 0;
$ukupno = 0;
for($i = $n; $i <= $m; $i++)
{
    if($i % 10 == 4)
    {
        $suma += $i;
        $ukupno++; 
    }

}
echo $suma;
echo "<br>";

//18

$n = 40;
$m = 134;
$a = 5;
for($i = $n; $i <= $m; $i++)
{
    if($i % $a == 0)
    {
        echo $i . "<br>";
    }
}
echo "<br>";
//19

$n = 40;
$m = 134;
$a = 5;
for($i = $n; $i <= $m; $i++)
{
    if($i % $a != 0)
    {
        echo $i . "<br>";
    }
}
echo "<br>";

// 20

$n = 40;
$m = 134;
$a = 5;
$suma = 0;
for($i = $n; $i <= $m; $i++)
{
    if($i % $a != 0)
    {
        $suma += $i;
    }
}

echo $suma;
echo "<br>";

// 21
$n = 2;
$m = 10;
$a = 2;
$proiz = 1;
for($i = $n; $i <= $m; $i++)
{
    if($i % $a == 0)
    {
        $proiz *= $i;
    }
}

echo $proiz;
echo "<br>";
// 7


?>