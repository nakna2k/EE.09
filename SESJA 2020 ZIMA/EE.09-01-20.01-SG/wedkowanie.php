<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h2>Wędkuj z nami!</h2>
    </header>
    <secton id="left">
        <img src="ryba2.jpg" alt="Szczupak">
    </secton>
    <secton id="right">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <!-- script -->
        <?php
        $conn = mysqli_connect("localhost","root","","wedkowanie2");
        $query = mysqli_query($conn,"SELECT id, nazwa, wystepowanie FROM ryby where styl_zycia = '2';");
        while($r=mysqli_fetch_row($query))
        {
            echo "$r[0]. $r[1], występuje w: $r[2]<br>";
        }
        mysqli_close($conn);
        ?>
    <ol> 
        <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
        <li><a href="https://pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
    </ol>
    </secton>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
    
</body>
</html>
