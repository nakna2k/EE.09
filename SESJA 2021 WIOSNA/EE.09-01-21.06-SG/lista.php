<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Portal Społecznościowy - moje konto</h1>
    </header>
    <main>
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
        $conn = mysqli_connect("localhost","root","","lista");
        $query = mysqli_query($conn, "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN(1,2,6);");
        while($r = mysqli_fetch_row($query))
        {
            echo "<div id = box><div class = zdj><img src = $r[3] alt = 'przyjaciel'></div>";
            echo "<div class = opis><h3>$r[0] $r[1]</h3><p>Ostatni wpis: $r[2]</p></div></div>";
            echo "<div class = linia><hr></div>";
        }
        mysqli_close($conn);

        ?>
    </main>
    <footer id="footer1">
        Stronę wykonał: 00000000000
    </footer>
    <footer id="footer2">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </footer>
</body>
</html>