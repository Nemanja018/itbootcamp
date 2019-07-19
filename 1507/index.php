<?php
    $i = 1;
    $suma = 0;

    while($i <= 100)
    {
        $suma += $i;

        $i++;
    }

    echo $suma;

echo "<br>";


//2
$n = 6;
$suma2 = 0;
for($i = 1; $i <= $n ;$i++)
{
    $suma2 += $i;
}

echo $suma2;

echo "<br>";
//3

$nn = 2;
$mm = 4;
$suma3 = 0;
for($i = $nn; $i <= $mm; $i++)
{
    $suma3 += $i;
}

echo $suma3;
echo "<br>";
//4

$proizvod = 1;
for($i = $nn; $i <= $mm; $i++)
{
    $proizvod = $i * $proizvod;
}

echo $proizvod;
echo "<br>";   

//5

$nnn = 3;
$mmm = 6;
$sumak = 0;

for($i = $nnn; $i <= $mmm; $i++)
{
    $sumak = $sumak + ($i * $i);
}

echo $sumak;

//1
for($i = 1; $i <= 20; $i++)
{
    echo $i . "<br>";
}

//2
for($i = 20; $i >= 1; $i--)
{
    echo $i . "<br>";
}



//3

for($i = 1; $i <= 20; $i++)
{
    if($i % 2 == 0)
    {
        echo $i . "<br>";
    }
}
 
//4
for($i = 5; $i <= 15; $i++)
{
    $dv = $i * 2;
    echo $dv . "<br>";
}


//5
$sumazbir = 0;
for($i = 1; $i <= 100; $i++)
{
    $sumazbir += $i;
}
echo $sumazbir . "<br>";

//6
$suma = 0;
$n = 4;
for($i = 1; $i <= $n; $i++)
{
    $suma += $i;
}
echo $suma . "<br>";

//7

$nn = 2;
$mm = 4;
$suma3 = 0;
for($i = $nn; $i <= $mm; $i++)
{
    $suma3 += $i;
}

echo $suma3;
echo "<br>";

//8

$proizvod = 1;
for($i = $nn; $i <= $mm; $i++)
{
    $proizvod = $i * $proizvod;
}

echo $proizvod;
echo "<br>";   

// 9

$n = 10;
$m = 17;
$suma = 0;

for($i = $n; $i <= $m; $i++)
{
    $suma = $suma + ($i * $i);
}
echo $suma . "<br>";

// 10


for($i = 1; $i <= 3; $i++)
{
    echo "<img src='$i.jpg' />";
}
echo "<br>";
// 11
$suma = 0;
for($i = 1; $i <= 30; $i++)
{
    if($i % 9 == 0)
    {
        $suma += $i;
    }
}

echo $suma . "<br>";
echo "<br>";

// 12
$pro = 1;
for($i = 20; $i <= 100; $i++)
{
    if($i % 11 == 0)
    {
        $pro *= $i;
    }
}
echo $pro . "<br>";
echo "<br>";

// 13 
for($i = 5; $i <= 150; $i++)
{
    if($i % 13 == 0)
    {

    }
}

?>