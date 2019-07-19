 <?php 
    $dan = 7;

    switch($dan)
    {
        case 1:
        echo "Ponedeljak";
        break;
        case 2:      
        echo "Utorak";
        break;
        case 3:      
        echo "Sreda";
        break;
        case 4:      
        echo "Cetvrtak";
        break;
        case 5:      
        echo "Utorak";
        break;
        case 6:      
        echo "Subota";
        break;
        case 7:      
        echo "Nedelja";
        break;
        default:
        echo "Los unos.";


    }
    echo "<br>";
    $prosek = 3.96;

    switch($prosek)
    {
        case $prosek >5:
            echo "Los unos.";
            break;
        case $prosek >= 4.5:
            echo "Odlican.";
            break;
        case $prosek >= 3.5:
            echo "Vrlo dobar.";
            break;
        case $prosek >= 2.5:
            echo "Dobar.";
            break;
        case $prosek >= 1.5:
            echo "Dovoljan.";
            break;

        default: 
             echo "Nedovoljan.";
    }
    echo "<br>";

    $unet = 4;

    switch($unet)
    {
        case 2:
            echo "2";
            break;
        case 4:
            echo "4";
            break;
        case 6:
            echo "6";
            break;
        case 8:
            echo "8";
            break;
        default:
            echo "Uneli ste ili broj koji je veci od 10 ili nije paran ili oba.";
    }
    echo "<br>";
    $broj1 = 10;
    $broj2 = 17;
    $op = "d";

    switch($op)
    {
        case "m":
            $rez = $broj1 * $broj2;
            break;
        case "d":
            $rez = $broj1 / $broj2;
            break;
        case "s":
            $rez = $broj1 + $broj2;
            break;
        case "o":
            $rez = $broj1 - $broj2;
            break;
        default:
            echo "Greska.";
        
    }

    echo "Rezultat trazene operacije je " . $rez;

echo "<br>";

$dand = date('w');

switch($dand)
{
    case 1:
        echo "Ostalo je 5 dana do vikenda.";
        break;
    case 2:
        echo "Ostalo je 4 dana do vikenda.";
        break;
    case 3:
        echo "Ostalo je 3 dana do vikenda.";
        break;
    case 4:
        echo "Ostalo je 2 dana do vikenda.";
        break;
    case 5:
        echo "Ostalo je 1 dana do vikenda.";
        break;

    default:
        echo "Vikend je.";
}

echo "<br>";

$mesec = date('m');

switch($mesec)
{
    case 01:
        echo "Januar";
        break;
    case 02:
        echo "Februar";
        break;
    case 03:
        echo "Mart";
        break;
    case 04:
        echo "April";
        break;
    case 05:
        echo "Maj";
        break;
    case 06:
        echo "Jun";
        break;
    case 07:
        echo "Jul";
        break;
    case 8:
        echo "Avgust";
        break;
    case 9:
        echo "Septembar";
        break;
    case 10:
        echo "Oktobar";
        break;
    case 11:
        echo "Novembar";
        break;
    case 12:
        echo "Decembar";
        break;

    default:
     echo "Los unos.";
}

echo "<br>";

$mesec1 = date('m');
switch($mesec1)
{
    case 1:
        echo "31 dan.";
        break;
    case 2:
        $god = date('Y');

        if($god % 4 == 0 && $god % 100 != 0 && $god % 400 == 0)
        {
            echo "Februar u prestupnoj godini ima 29 dana.";
        }
        else 
        {
            echo "28 dan.";

        }
        break;
    case 3:
        echo "31 dan.";
        break;
    case 4:
        echo "30 dan.";
        break;
    case 5:
        echo "31 dan.";
        break;
    case 6:
        echo "30 dan.";
        break;
    case 7:
        echo "31 dan.";
        break;
    case 8:
        echo "31 dan.";
        break;
    case 9:
        echo "30 dan.";
        break;
    case 10:
        echo "31 dan.";
        break;
    case 11:
        echo "30 dan.";
        break;
    case 12:
        echo "31 dan.";
        break;
}

echo "<br>";

$i = 1;

while($i <= 10)
{
    echo $i;
    echo "<br>";
    $i++;
}
$i = 0;
while($i < 10)
{
    $i++;

    echo $i;
    echo "<br>";
}

$i =1;
while($i <= 20)
{
    echo $i;
    echo "<br>";

    $i++;
}
echo "<br>";
$i = 20;
while($i >= 1)
{
    echo $i;
    echo "<br>";

    $i--;
}
$i =1;
while($i <= 20)
{
    if($i % 2 == 0)
    {
        echo $i;
        echo "<br>";
    
    }

    $i++;
}
echo "<br>";


//5
$i = 1;
while ($i <= 6)
{
    if($i % 3 == 0)
    {
        echo "<p style='color:red;'>PAragraf.</p>";
    }
    elseif($i % 3 == 1) {
        echo "<p style='color:blue;'>Paragraf</p>";
    }
    else
    {
        echo "<p style='color:green;'>Paragraf</p>";
    }

    $i++;
}

// 4

$a = 9;
$b = 4;

$ost = 0;
$kol = 0;



 ?>