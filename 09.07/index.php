<html>
    <head>
        <title>vezba</title>
    </head>
    <body>
    <?php

    $a = 0;
    $b = 17;
//Za dva uneta broja ispisati koji je veći a koji je manji.
    if($a > $b )
    {
        echo "A je vece od B.";
    }
    else{
        if($a == $b)
        {
            echo "Brojevi su jednaki.";
        }
        else{
            echo "B je vece od A.";
        }
    }

    echo "<br>";

//Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu.

if($a > 0 )
{
    echo "Temperatura je preko nule.";
}
else{
    if($a == 0)
    {
        echo "Trenutna tempearatura je 0.";
    }
    else{
        echo "Temperatura je ispod nule.";
    }
}
echo "<br>";
//U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar.

$pol = "z";

if($pol == "m")
{
    echo "<img src='1.jpg' />";
}
else
{
    if($pol = "z")
    {
        echo "<img src='2.jpg' />";

    }
    else{
        echo "Pol moze da bude samo M ili Z.";
    }
}
echo "<br>";

echo date("G");
//U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne.
$vreme = date("G");
echo "<br>";

if($vreme < 12){
    echo "Prepodne.";
}
else {
    if($vreme == 12){
        echo "Podne je.";
    }
    else {
        echo "Popodne je.";
    }
}
echo "<br>";

//Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.
$tekuca_godina = date("Y");
$godRodjenja = 2005;
$starost = $tekuca_godina - $godRodjenja;

if($starost >= 18)
{
    echo "Osoba je punoletna.";
}
else {
    echo "Osoba je maloletna.";
}

echo "<br>";

//Odrediti najveći od tri uneta broja
$prvi = 1245;
$drugi = 542;
$treci = 1345;

if($prvi > $drugi)
{
    if($prvi > $treci){
        echo "Prvi broj je najveci.";
    }
    elseif($prvi == $treci){
        echo "Prvi i treci broj su jednaki.";
    }
    else {
        echo "Treci broj je najveci.";
    }
}
else {
    if($drugi > $treci)
    {
        echo "Drugi broj je najveci.";
    }
    elseif($drugi == $treci)
    {
        echo "Drugi i treci broj su jednaki.";
    }
    else {
        echo "$treci broj je najveci.";
    }
}
echo "<br>";
$poeni = 97;

if($poeni > 50 && $poeni <= 60)
{
    echo "Ocena 6";
}
elseif($poeni > 60 && $poeni <= 70)
{
    echo "Ocena 7";
}
elseif($poeni > 70 && $poeni <= 80)
{
    echo "Ocena 8";
}
elseif($poeni > 80 && $poeni <= 90)
{
    echo "Ocena 9";
}
elseif($poeni > 90 && $poeni <= 100)
{
    echo "Ocena 10";
}
else {
    if($poeni > 100)
    {
        echo "Nemoguce je da student dobije vise od 100 poena.";
    }
    else {
        echo "Student nije polozio ispit.";
    }
}

echo "<br>";

$dan = date("w");

if($dan < 6)
{
    echo "Radni dan.";
}
else {
    echo "Weekend";
}

?>
    </body>
</html>