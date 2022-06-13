<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="header1">
    <img src="logo1.png" alt="Mój kalendarz">
    </header>
    <header id="header2">
        <h1>KALENDARZ</h1>
        <!-- SCRIPT -->
        <?php
        $conn = mysqli_connect("localhost","root","","egzamin6");
        $query = mysqli_query($conn,"SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';");
        while($r=mysqli_fetch_row($query))
        {
            echo "<h3>miesiąc: $r[0], rok: $r[1]";
        }
        ?>
    </header>
    <main>
        <!-- SCRIPT 2 -->
        <?php
        $query2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec'";
        $query3 = mysqli_query($conn,$query2);
        while($r = mysqli_fetch_row($query3))
        {
            echo "<div class = skr><h5>$r[0]</h5><p>$r[1]</p></div>";
        }
        
        
        ?>
    </main>
    <footer>
        <form action="kalendarz.php" method="post">
            <label>Dodaj wpis: 
                <input type="text" name = "text">
            </label>
        <button type="submit" name="submit">Dodaj</button>
        </form>
    <p>Stronę wykonał: 00000000000</p>
    <?php
    if(isset($_POST['submit']))
    {
        if(!empty($_POST['text']))
        {
            $tekst = $_POST['text'];
            mysqli_query($conn,"UPDATE zadania SET wpis = '$tekst' WHERE dataZadania = '2020-07-13';");
        }
    }
    mysqli_close($conn);
    ?>
    </footer>
    
</body>
</html>