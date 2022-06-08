<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header id="header1">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </header>
    <header id="header2">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/">soki</a></li>
        </ol>
    </header>
    <main>
       
        <!-- script1 -->
        <?php
        $conn = mysqli_connect("localhost","root","","sklep");
        $query = mysqli_query($conn,"SELECT nazwa, ilosc, opis, cena, zdjecie FROM Produkty WHERE Rodzaje_id = 1 OR Rodzaje_id = 2;");
        while($r = mysqli_fetch_row($query))
        {
            echo "<div class = 'skr'><img src=$r[4] alt = 'warzywniak'>
            <h5>$r[0]</h5><p>opis: $r[2]</p><p>na stanie: $r[1]</p><h2>$r[3] zł</h2>
            </div>";
        }
        ?>
    </main>
    <footer>
        <form action="sklep.php" method="post">
        Nazwa: <input name = "text">
        Cena: <input name = "cena">
        <button type="submit" name = "submit">Dodaj produkt</button>
        </form>
        <!-- script 2 -->
        <?php
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['text'])&&!empty($_POST['cena']))
            {
                mysqli_query($conn,"INSERT INTO produkty VALUES ('','1','4','$_POST[text]','10','','$_POST[cena]','owoce.jpg');");
            }

        }
        mysqli_close($conn);
        ?>
    Stronę wykonał: 00000000000
    </footer>
    
</body>
</html>