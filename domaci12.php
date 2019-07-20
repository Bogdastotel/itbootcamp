<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        table {
            border: 1px solid red;
            width: 25%;

        }

        table td {
            border: 1px solid black;

        }

        ul {
            border: 1px solid red;
            width: 15%;
        }
        
    </style>
</head>

<body>
    <h1>Domaći zadatak broj 12</h1>
    <!--1. Zadatak

    Napisati funkciju koja ispisuje stavku liste <li>. Kao prvi parametar  prima boju teksta, 
    kao drugi parametar veličinu teksta u toj stavci liste, a kao treći parametar sam tekst koji se ispisuje.
     U telu HTML dokumenta formirati jednu neuređenu listu i pozvati tri puta funkciju za ispisivanje tri stavke liste. 
     Za boje, veličinu i tekst uzeti proizvoljne veličine
    -->

    <ul>
        <?php
        function stavkaListe($boja, $fontSize, $tekst)
        {
            echo "<li style='color: $boja; font-size: $fontSize" . "px;'>$tekst</li>";
        }
        stavkaListe("red", 24, "Lorem Ipsum");
        stavkaListe("green", 26, "Lorem Ipsum");
        stavkaListe("blue", 28, "Lorem Ipsum");
        ?>
    </ul>

    <!--2. Zadatak

    Napisati funkciju koja ispisuje ćeliju tabele <td>.     
    Kao prvi parametar prima logičku promenljivu da li je tekst u ćeliji iskošen ili ne,
    a kao drugi parametar tekst koji se prikazuje unutar te ćelije. 
    U telu HTML dokumenta kreirati tabelu dimenzija 2 x 3, a unutar nje pozvati šest puta funkciju sa proizvoljnim tekstom.
    Potrebno je da tekst u ćelijama naizmenično bude iskošen. Na primer:
 -->
    <table>
        <tr>
            <?php
            function celija($iskosen, $tekst)
            {
                if ($iskosen) {
                    echo "<td style='font-style: italic;'>$tekst</td>";
                } else {
                    echo "<td style='font-style: normal ;'>$tekst</td>";
                }
            }
            celija(true, "Lorem ipsum");
            celija(false, "Lorem ipsum");
            celija(true, "Lorem ipsum");
            ?>
        </tr>

        <tr>
            <?php
            celija(false, "Lorem ipsum");
            celija(true, "Lorem ipsum");
            celija(false, "Lorem ipsum");

            ?>
        </tr>



    </table>
</body>

</html>