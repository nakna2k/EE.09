<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id="header1">
        <img src="zad5.png" alt="logo lotnisko">
    </header>
    <header id="header2">
        <h1>Przyloty</h1>
    </header>
    <header id="header3">
        <h3>przydatne link</h3>
        <a href="kwerendy.txt">Pobierz...</a>
    </header>
    <main>
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <!-- SKRYPT 1 -->
            <?php

            $conn = mysqli_connect("localhost","root","","lotnisko");
            $query = mysqli_query($conn, "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER by czas ASC;");
            while($r = mysqli_fetch_row($query))
            {
                echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td></tr>";
                
            }
           
            ?>
        </table>
    </main>
    <footer id="footer1">
        <!-- skrypt 2 -->
        <?php
      
      setcookie('cookie','c',time()+7200);
      if(isset($_COOKIE['cookie']))
      {
          print '<p><i>Witaj ponownie na stronie lotniska</i></p>';

      }else
      {
          print '<p><b>Dzień dobry! Strona używa ciasteczek </b></p>';
      }
      mysqli_close($conn);
        ?>
    </footer>
    <footer id="footer2">
        Autor: 00000000000
    </footer>

    
</body>
</html>