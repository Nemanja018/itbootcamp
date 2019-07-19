<?php 

// 1
function suma($n, $m)
{
    $suma = 0;

    for($i = $n; $i <= $m; $i++)
    {
        if($i % 3 == 0 && $i % 7 != 0)
        {
            $suma += $i;

        }
    }

    return $suma;
}
$zbir = suma(1, 10);
echo $zbir;

echo "<br>";
$zbir = suma(10, 20);
echo $zbir;

echo "<br>";

// 2

function ispis($color, $font, $n)
{
    $i = 1;
    while($i <= $n)
    {
        echo "<p style='color:$color; font-size:$font'>$i</p>";
        $i++;

    }
}

ispis("red", 50, 5);
ispis("green", 30, 3);
echo "<br>";

// 3

function krvnaGrupa($tip)
{
    switch($tip)
    {
        case "A+":
            echo "A+ krvna grupa moze dati krv grupama A+ i AB+,  a prima od A+ i 0+.";
            break;
        case "0+":
            echo "0+ krvna grupa moze dati krv grupama 0+, A+, B+ i AB+,  a prima od 0+.";
            break;
        case "B+":
            echo "B+ krvna grupa moze dati krv grupama B+ i AB+,  a prima od B+ i 0+.";
            break;
        case "AB+":
            echo "AB+ krvna grupa moze dati krv grupi AB+,  a prima od svih krvnih grupa.";
            break;

            default:
                echo "Greska.";


    }
}

krvnaGrupa("A+");
echo "<br>";
krvnaGrupa("0+");
echo "<br>";
krvnaGrupa("AB+");
echo "<br>";
?>