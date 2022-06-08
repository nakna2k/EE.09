<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">

</head>
<body>
    <header>
        <h3>Portal Społecznościowy - panel administratora</h3>
    </header>
    <section id="left">
        <h4>Użytkownicy</h4>
        
        <!-- script 1 -->
        <?php
        $conn = mysqli_connect("localhost","root","","portal");
        $query = mysqli_query($conn, "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie from osoby LIMIT 30;");
        while($r = mysqli_fetch_row($query))
        {
            error_reporting(E_ERROR);
            $rok = $r[3];
           
           $data = date('Y-m-d') - $rok; 
            echo "$r[0]. $r[1] $r[2], $data lat <br>"; 
        }
        ?>
        <a href="settings.html">Inne ustawienia</a>
    </section>
    <section id="right">
        <h4>Podaj id użytkownika</h4>
        <form action="users.php" method="post">
            <input type="number" name="id">
            <button type="submit" name = "submit" class ="button">ZOBACZ</button>

        </form>
        <hr>
        <!-- script 2 -->
        <?php
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['id']))
            {  
            $id = $_POST['id'];
            $query = mysqli_query($conn, "SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, hobby.nazwa FROM osoby JOIN hobby ON osoby.id = hobby.id WHERE osoby.id = $id;");
            while($r = mysqli_fetch_row($query))
            {
                $id = $_POST['id'];
                echo "<h2>$id. $r[0] $r[1]</h2>";
                echo "<img src =$r[4] alt = $_POST[id]>";
                echo "<p>Rok urodzenia: $r[2]</p>
                      <p>Opis: $r[3]</p>
                      <p>Hobby: $r[5]</p>";
            }
        }}
        mysqli_close($conn);
        ?>
    </section>
    <footer>
        Stronę wykonał: 00000000000
    </footer>
    
</body>
</html>