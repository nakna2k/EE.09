<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header id="header1">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </header>
    <header id="header2">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </header>
    <section id="polecamy">
        <h3>Polecamy</h3>
        <!-- script 1 -->
        <?php
            $conn = mysqli_connect("localhost","root","","filmy");
            $query = mysqli_query($conn,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN(18,22,23,25);");
            while($r=mysqli_fetch_row($query))
            {
                echo "<div class ='film'><h4>$r[0]. $r[1]</h4>
                <img src='$r[3]'</img><p>$r[2]</p></div>";
            }
        ?>
    </section>
    <section id="filmyF">
        <h3>Filmy fantastyczne</h3>
        <!-- script2 -->
        <?php
            $conn = mysqli_connect("localhost","root","","filmy");
            $query = mysqli_query($conn,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;");
            while($r=mysqli_fetch_row($query))
            {
                echo "<div class ='film'><h4>$r[0]. $r[1]</h4>
                <img src='$r[3]'</img><p>$r[2]</p></div>";
            }
        ?>
    </section>
    <footer>
        <form action="video.php" method="post">
           Usuń film nr.: <input type="number" name="usun">
           <button type="submit" name = "submit">Usuń film</button>
        </form>
        <!-- script3-->
        <?php
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['usun']))
            {
                mysqli_query($conn, "DELETE FROM produkty WHERE id = $_POST[usun];");
            }
        }
        mysqli_close($conn);
        ?>
        Stronę wykonał: <a href="mailto:ja@poczta.com">00000000000</a>
    </footer>
</body>
</html>