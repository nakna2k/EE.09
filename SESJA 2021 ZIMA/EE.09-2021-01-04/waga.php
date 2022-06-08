<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl4.css">
    <title>Twój wskaźnik BMI</title>
</head>
<body>
    <header>
        <h2>Oblicz wskaźnik BMI</h2>
    </header>
    <section id="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </section>
    <section id="left">
        <img src="rys1.png" alt="zrzuć kalorie!">
    </section>
    <section id="right">
        <h1>Podaj dane</h1>
        <form action="waga.php" method="post">
            Waga: <input type="number" name="waga"><br>
            Wzrost [cm] <input type="number" name="wzrost"><br>
            <button type="submit" name ="submit">Licz BMI i zapisz wynik</button>

        </form>
        <!-- SKRYPT 1 -->
        <?php
        $conn = mysqli_connect("localhost","root","","bmi2");
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['waga'])&&!empty($_POST['wzrost']))
            {
                $bmi = ($_POST['waga'] / ($_POST['wzrost']*$_POST['wzrost']))*10000;
                echo "Twoja waga: $_POST[waga]; ";
                echo "Twój wzrost: $_POST[wzrost]<br>";
                echo "BMI wynosi: $bmi <br>";
                $przedzial = 0;
                if($bmi >=0 && $bmi < 19)($przedzial = 1);
                else if($bmi >=19 && $bmi < 26)($przedzial = 2);
                else if($bmi >=26 && $bmi < 31)($przedzial = 3);
                else if($bmi >=31)($przedzial = 4);
                
                $data = Date('Y-m-d');
                mysqli_query($conn, "INSERT into wynik VALUES ('','$przedzial','$data','$bmi');");
                
            }
        }
        ?>
    </section>
    <main>
        <table>
            <tr class = "wiersz">
                <th>lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <!-- SKRYPT 2 -->
            <?php
            $query = mysqli_query($conn, "SELECT id, informacja, wart_min FROM bmi;");
            while($r = mysqli_fetch_row($query)){
                echo "<tr class = wiersz><td>$r[0]</td>
                <td>$r[1]</td>
                <td>$r[2]</td></tr>";

            }
            mysqli_close($conn);
            ?>
            
        </table>
    </main>
    <footer>
        Autor: 00000000000
        
        
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
        <!-- I did not bother with creating screenshots of correctly working SQL queries,
        so there is not kw2.jpg file in the repository -->
    </footer>
    
</body>
</html>
