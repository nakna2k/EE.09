<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Rozgrywki futbolowe</title>
</head>
<body>
    <header id="header">
        <h2>Światowe rozgrwyki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </header>

    <section id="info">

    <!-- skrypt 1  -->

    <?php

    $conn = mysqli_connect("localhost","root","","futbol");
    $query = mysqli_query($conn, "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG';");

    while($r = mysqli_fetch_row($query))
    {
        echo "<section class = 'infoMecz'><h3>$r[0] - $r[1]</h3>
        <h4>$r[2]</h4>
        <p>w dniu: $r[3]</p>
        </section>";
    }
    ?>
    </section>
    <main id="main">
        <h2>Reprezentacja Polski</h2>
    </main>
    <section id="botLeft">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="" method="post">
            <input type="number" name="idzawod">
            <button name = "button">Sprawdź</button>
        </form>
    <ul>
        <!-- SKRYPT 2 -->
        <?php
       
       if(isset($_POST['button']))
       {
        if(!empty($_POST['idzawod']))
        {
            $pozycja = $_POST['idzawod'];
            $query = mysqli_query($conn, "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $pozycja;");

            while($r = mysqli_fetch_row($query))
            {
                echo "<li>$r[0] $r[1]</li>";
            }
        }
       }
        ?>

        
    </ul>
    </section>
    <section id="botRight">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 00000000000</p>
    </section>
</body>
</html>
