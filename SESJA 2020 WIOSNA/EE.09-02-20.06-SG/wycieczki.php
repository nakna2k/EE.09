<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <section id="left">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
        </section>
    <section id="mid">
        <h2>GALERIA</h2>
        <!-- script1 -->
        <?php
        $conn = mysqli_connect("localhost","root","","wycieczki");
        $query = mysqli_query($conn,"SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;");
        while($r = mysqli_fetch_row($query))
        {
            echo "<img src = $r[0] alt = $r[1]>";
        }
        ?>
    </section>
    <section id="right">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
        </section>
    <section id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <!-- script 2-->
        <?php
        $query = mysqli_query($conn,"SELECT id, dataWyjazdu, cel, cena FROM wycieczki where dostepna = TRUE");
        while($r=mysqli_fetch_row($query))
        {
            echo "$r[0]. $r[1], $r[2], cena: $r[3] <br>";
        }
        mysqli_close($conn);
        ?>
        </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
    
</body>
</html>