<?php

$unetaGod = 1994;
$pol = "m";
$tezina = 66;
$visinaCm = 173;
$visinaM = $visinaCm / 100;
$bmi = $tezina / ($visinaM * $visinaM);
$trenutnaGod = date('Y');
$starost = $trenutnaGod - $unetaGod;

if($bmi < 18.5)
{
    echo "Pothranjenost.";
}
elseif( $bmi >= 18.5 && $bmi <= 24.9)
{ 
    echo "Normalna tezina.";
}
elseif($bmi >= 20 && $bmi <30)
{
    echo "Povisena tezina.";
}
else{
    echo "Gojaznost.";
}

echo "<br>";
if($pol == "m")
{
    echo "Pol osobe je : " . $pol . "<br>";
    echo "<img src='m.jpg'/>";

}
elseif($pol == "z")
{
    echo "Pol osobe je : " . $pol . "<br>";
    echo "<img src='z.jpg'/>";

}
else {
    echo "Pol moze da bude samo zenski ili muski.";
}
echo "<br>";

echo "Starost osobe: " . $starost . ".<br>";
echo "Indeks telesne mase za odredjenu osobu iznosi: " . $bmi . ". <br>";


?>