<?php

function mojaFunkcija()
{
    echo "hello world";
}

mojaFunkcija();
echo "<br>";

function korisnik($ime, $prezime, $god)
{
    echo "Korisnik $ime $prezime ima $god godina.<br>";
}

korisnik("Mile", "Petrovic", 45);
korisnik("Jovan", "Petrovic", 25);
korisnik("Dusan", "Petrovic", 75);

function funkcija($ime, $prezime)
{
    /*for($i = 1; $i <= 5;$i++)
    {
        echo "$ime ";
        echo "<br>";

    } */
    for($i = 1; $i <= 10;$i++)
    {
        echo $prezime;
        echo "<br>";
        
        if($i % 2 == 0)
        {
            echo "$ime <br>";
        }

    }
}

funkcija("Nemanja", "Miljkovic");

function zbir($a, $b)
{
    $rez = $a + $b;
    echo $rez;
}

zbir(5, 7);
echo "<br>";
function zbirr($a, $b)
{
    $rez = $a + $b;
    return $rez;
}
$rezultat = zbirr(zbirr(15, 10), zbirr(25, 30));

echo $rezultat;
echo "<br>";

function razlika($a, $b)
{
    $raz = $a - $b;
    return $raz;
}

$razlika = razlika(25, 13);

echo $razlika;
echo "<br>";

function proizvod($a, $b)
{
    $rez = $a * $b;
    return $rez;
}
$rezultat = proizvod(4, 6);

echo $rezultat;
echo "<br>";


function deljenje($a, $b)
{
    $rez = $a / $b;
    return $rez;
}
$rezultat = deljenje(24, 6);

echo $rezultat;
echo "<br>";

// 1

function pozdrav($ime, $prezime)
{
    echo "Zdravo $ime $prezime";
}

pozdrav("Nemanja", "Miljkovic");
echo "<br>";

//2
function suma($a, $b)
{
    $rez = $a + $b;
    return $rez;
}

$rezultat = suma(4.5, 5.1);
echo $rezultat;
echo "<br>";
// 3 

function vrati($n)
{
    if($n % 2 != 0)
    {
        $ishod = true;
        
    }
    else 
    {
        $ishod = false;
    }

    return $ishod;
}

$ishodiii = vrati(3);
echo $ishodiii;
echo "<br>";
// 4

function maks2($a, $b)
{
    if($a > $b)
    {
        $maks = $a;
    }
    else
    {
        $maks = $b;
    }

    return $maks;
     
}

$rez = maks2(6, 4);
echo $rez;

// 5

function slika($a)
{
    echo "<img src='$a.jpg' />";

}

slika(2);

// 6

function boja($boja)
{
    echo "<p style='color:$boja ;'>Neki tekst</p>";
}

boja("green");
boja("red");
boja("blue");

echo "<br>";
// 7
function font($boja)
{
    echo "<p style='font-size:$boja ;'>Neki tekst</p>";
}

font(50);
font(25);
font(68);


// 8 

function ispisi($font1)
{
	for($i = 1; $i <= 5; $i++)
	{
		echo "<p style='font-size:" . $font1 . "pt;'> Neka prosto prosirena recenica.</p>";
	}
}

ispisi(80);
echo "<br>";

// 9

function sedmiDan($dan)
{
	switch($dan % 7)
	{
		case 6:
			echo "Ponedeljak.";
			break;
		case 5:
			echo "Utorak.";
			break;
		case 4:
			echo "Sreda.";
			break;
		case 3:
			echo "Cetvrtak.";
			break;
		case 2:
			echo "Petak.";
			break;
		case 1:
			echo "Subota.";
			break;
		case 0:
			echo "Nedelja.";
			break;
			
			default:
			echo "Pogresan unos.";
	}

}
sedmiDan(15);
echo "<br>";
sedmiDan(7);
echo "<br>";
sedmiDan(1);
echo "<br>";
// 10

function deljivSaTri($n, $m)
{
	$br = 0;
	for($i = $n; $i <= $m; $i++)
	{
		if($i % 3 == 0)
		{
			echo $i . "<br>";
		}
	}
}

deljivSaTri(10, 20);

//11

function brojevi($broj)
	{
	
		if($i % 2 == 0)
		{
			$brojac++;
		}
		if($i % 3 == 0)
		{
			$brojac++;
			
	
		}
		if($i % 5 == 0)
		{
			$brojac++;
			
	
		}
		if($i % 7 == 0)
		{
			$brojac++;
			
		}
		
	
		
	}





?>

