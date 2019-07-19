<html>
    <head>
        <title>vezba</title>
        <style>
            img {
                width: 150px;
            }
        </style>
    </head>
    <body>
        <?php 
            $putanja = "../09.07/1.jpg";

            echo "<img src='$putanja' >";


            $broj_radnih_sati = 160;
            $cena_rada_po_satu = 5;
            $procenat_odbijanja = 65;
            $bruto = $broj_radnih_sati * $cena_rada_po_satu;
            $razlika = $bruto - $bruto * $procenat_odbijanja / 100;
            $neto = $bruto - $razlika;
            echo "<p>Bruto zarada: '$bruto ' e</p>";
            echo "<p>Neto zarada: ' $neto ' e</p>";

        ?>
    </body>
</html>