<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÓJ ORGANIZER</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header id="header-left">
        <h2>MÓJ ORGANIZER</h2>
    </header>
    <header id="header-mid">
        <form action="organizer.php" method="post">
            <label>Wpis wydarzenia: <input name = "tekst" type="text"></label>
            <button type="submit" name = "submit">ZAPISZ</button>
        </form>
    </header>
    <header id="header-right">
        <img src="logo2.png" alt="Mój organizer">
    </header>
    <main>
        <!-- script 1 -->
        <?php
        $conn = mysqli_connect("localhost","root","","egzamin6");
        if(isset($_POST['submit']))
        {
            mysqli_query($conn, "UPDATE zadania SET wpis = '$_POST[tekst]' WHERE dataZadania = '2020-08-27'");
        }
        $query = mysqli_query($conn, "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien'");
        while($r=mysqli_fetch_row($query))
        {
            echo "<section class = blok><h6>$r[0],$r[1]</h6><p>$r[2]</p></section>";
        }
        
        ?>
    </main>
    <footer>
        <!-- script 2 -->
        <?php
        $query = mysqli_query($conn,"SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';");
        while($r=mysqli_fetch_row($query))
        {
            echo "<h1>miesiąc: $r[0], rok: $r[1]</h1>";
        }
        mysqli_close($conn);
        ?>
    <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>