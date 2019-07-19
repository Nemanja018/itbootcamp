<?php

$vreme = date('G');

if ($vreme < 12){
    echo "Dobro jutro.";
}
elseif($vreme >= 12 && $vreme < 18){
    echo "Dobar dan.";
}
else {
    echo "Dobro vece.";
}
echo "<br>";


//Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.

$tacno_vreme = date('G');

if($tacno_vreme >= 9 && $tacno_vreme < 17)
{
    echo "Firma radi.";
}
else{
    echo "Dirma ne radi.";
}
echo "<br>";
// 10 zadatak

$dan1 = 14;
$dan2 = 14;
$mesec1 = 11;
$mesec2 = 11;
$godina1 = 19;
$godina2 = 19;

if($godina1 < $godina2)
{
    echo "Godina 1 je ranija.";
}
elseif($godina1 > $godina2)
{
    echo "Godina 2 je ranija.";
}
elseif($godina1 == $godina2)
{
    if($mesec1 > $mesec2)
    {
        echo "Godina 2 je ranija.";
    }
    elseif($mesec1 == $mesec2)
    {
        if($dan1 > $dan2)
        {
            echo "Godina 2 je ranija.";
        }
        elseif($dan1 < $dan2)
        {
            echo "Godina 1 je ranija.";
        }
        else 
        {
            echo "Uneti datumi su jednaki.";
        }
    }
    else 
    {
        echo "Godina 1 je ranija.";
    }
}
else {
    echo "Greska.";
}

echo "<br>";

$poc1 = 8;
$poc2 = 14;
$kraj1 = 16;
$kraj2 = 22;

if($kraj1 >= $poc2)
{
    echo "Da.";
}
elseif($kraj2 >= $poc1)
{
    echo "Da.";
}
else {
    echo "Ne.";
}

echo "<br>";

$broj = 37;

if($broj % 2 == 0)
{
    echo "broj je paran.";
}
else{
    echo "broj nije paran.";
}
echo "<br>";

//  Za uneti broj ispisati da li je deljiv sa 3 ili ne.

$cifra = 12;

if($cifra % 3 == 0)
{
    echo "Broj je deljiv sa tri.";
}
else {
    echo "Broj nije deljiv sa tri.";
}

echo "<br>";

// Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.

$broj1 = 432;
$broj2 = 432;
$rez = 0;
if($broj1 > $broj2)
{
    $rez = $broj1 - $broj2;
}
elseif($broj1 < $broj2)
{
    $rez = $broj2 - $broj1;

}
else {
    echo "Brojevi su jednaki.";
}

echo "Razlika izmedju unetih brojeva je: " . $rez;
echo "<br>";

// Za uneti broj ispitati da li je on manji ili veći od nule.
// Ukoliko je manji ili jednak nuli ispisati njegov prethodnik,
// a ukoliko je veći od nule ispisati njegov sledbenik.

$uneti_broj = -14;
$sledPret = 0;
if($uneti_broj <= 0)
{
    $sledPret = $uneti_broj - 1;
}
else 
{
    $sledPret = $uneti_broj + 1;
}

echo $sledPret;
echo "<br>";

$ceo = 13.4;

if(is_int($ceo) == true)
{
    echo "Ceo broj.";

}
else 
{
    echo "Nije ceo broj.";
}
echo "<br>";

// Učitati dva cela broja i ispitati da li je veći od njih 
//paran.

$b1 = 37;
$b2 = 37;

if($b1 > $b2)
{
    if($b1 % 2 == 0)
    {
        echo "Prvi broj je veci i paran je.";
    }
    else 
    {
        echo "Prvi broj je veci, ali nije paran.";
    }
}
elseif($b1 < $b2)
{
    if($b2 % 2 == 0)
    {
        echo "Drugi broj je veci i paran je.";
    }
    else{
        echo "Drugi broj je veci, ali nije paran.";
    }
}
else 
{
    echo "Brojevi su jednaki.";
}
echo "<br>";
// Ispisati na ekranu „ekstremna temperatura“ ukoliko
// je temperatura manja od -15 stepeni Celzijusovih 
//  i veća od 40 stepeni Celzijusovih.

$temp = 324;

if($temp < -15 || $temp > 40)
{
    echo "Ekstremna temperatura.";
}
else 
{
    echo "Temperatura je u normalnim granicama.";
}
echo "<br>";
/* Ispitati da li je godina prestupna.
 (Godinu preuzeti sa vremena na Vašem računaru). 
 Prestupna je ona godina koja je deljiva sa 4, 
 ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.
 */
$godina = date('Y');

if ($godina % 4 == 0 && $godina % 100 != 0 && $godina % 400 == 0 )
{
    echo "prestupna.";
}
else 
{
    echo "nije prestupna.";
}

echo "<br>";
/*
Jedan butik ima radno vreme od 9h do 20h radnim danima, 
a vikendom od 10h do 18h. Preuzeti dan i vreme sa računara i 
ispitati da li je butik trenutno otvoren.
*/

$dan = date('w');
$casova = date('G');

if($dan < 6)
{
    if($casova > 9 && $casova <= 20)
    {
        echo "Radni dan je i butik trenutno radi.";
    }
    else 
    {
        echo "Radni dan je, ali butik ne radi.";
    }
}
else 
{
    if($casova >= 10 && $casova < 18)
    {
        echo "Vikend je i butik radi.";
    }
    else {
        echo "Vikend je i butik ne radi.";
    }
}

?>