<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header><h1>Portal dla wędkarzy</h1></header>
    <section id="left"><h2>Ryby drapieżne naszych wód</h2>
    <ul>
        <!--script-->
        <?php
        $conn = mysqli_connect("localhost","root","","ryby2");
        $query = mysqli_query($conn,"SELECT nazwa, wystepowanie FROM Ryby where styl_zycia = 1;");
        while($r=mysqli_fetch_row($query))
        {
            echo "<li>$r[0], wystepowanie: $r[1]</li>";
        }
        mysqli_close($conn);
        ?>
    </ul> 
    </section>
    <section id="right"><img src="ryba1.jpg" alt="Sum">
    <br><a href="kwerendy.txt">Pobierz kwerendy</a></section>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>