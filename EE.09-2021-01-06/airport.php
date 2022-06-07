<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header id="header1">
        <h2>Odloty z lotniska</h2>
    </header>
    <header id="header2">
        <img src="zad6.png" alt="logotyp">
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>Lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            
            <!--skrypt 1 -->
            <?php
            $conn = mysqli_connect("localhost","root","","airport");
            $query = mysqli_query($conn, "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas desc;");

            while($r = mysqli_fetch_row($query))
            {
                echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td></tr>";
            }
            ?>
        </table>
    </main>
    <footer id="footer1">
        <a href="kw1.jpg">Pobierz obraz</a>
    </footer>
    <footer id="footer2">
        <!--skrypt2 -->
        <?php
        setcookie("ciastko","c",time()+3600);
        if(isset($_COOKIE['ciastko']))
        {
            echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
        }
        else
        {
            echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
        }
        mysqli_close($conn);

        ?>
    </footer>
    <footer id="footer3">
        Autor: 00000000000
    </footer>
    
</body>
</html>