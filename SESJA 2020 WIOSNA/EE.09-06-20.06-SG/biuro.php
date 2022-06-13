<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <section id="dane"><h3>ARCHIWUM WYCIECZEK</h3>
     <!--script-->
    <?php
    $conn = mysqli_connect("localhost","root","","egzamin4");
    $query = mysqli_query($conn,"SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0;");
    while($r=mysqli_fetch_row($query))
    {
        echo "$r[0]. $r[1], cena: $r[2] <br>";
    }
    ?>
    
     </section>
    <section id="left">
        <h3>NAJTANIEJ...</h3>
        <table>
            <tr>
                <td>Włochy</td>
                <td>od 1200zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400zł</td>
            </tr>
        </table>
    </section>
    <section id="mid">
        <h3>TU BYLIŚMY</h3>
        <!-- script2-->
        <?php
        $query = mysqli_query($conn,"SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;");
        while($r=mysqli_fetch_row($query))
        {
            echo "<img src = $r[0] alt = $r[1]>";
        }
        mysqli_close($conn);
        ?>
    </section>
    <section id="right">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon:555666777</p>
    </section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>