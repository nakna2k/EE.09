<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="logo">
        <img src="wzor.png" alt="wzór BMI">
    </section>
    <header>
        <h1>Oblicz swoje BMI</h1>
    </header>
    <main>
        <table>
            <tr class = "wiersz">
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php

            $conn = mysqli_connect("localhost","root","","bmi");
            $query = mysqli_query($conn,"SELECT informacja, wart_min, wart_max FROM bmi;");
            while($r = mysqli_fetch_row($query))
            {
                echo "<tr class = 'wiersz'>
                <td>$r[0]</td>
                <td>$r[1]</td>
                <td>$r[2]</td>
                </tr>";
            }
            ?>
        </table>
    </main>
    <section id="left">
        <h2>Podaj wagę i wzrost</h2>
        <form action="bmi.php" method="post">
            Waga: <input type="number" name="waga" min = "1"><br>
            Wzrost w cm: <input type="number" name="wzrost" min = "1"><br>
            <button type="submit" name ="submit">Oblicz i zapamiętaj wynik</button><br><br><br>

            <!-- SKRYPT 2 -->


            <?php
            if(isset($_POST['submit']))
            {
                if(!empty($_POST['waga'])&&!empty($_POST['wzrost']))
                {
                    $bmi = ($_POST['waga'] / ($_POST['wzrost'] * $_POST['wzrost']))* 10000;

                    echo "Twoja waga: $_POST[waga]; Twój wzrost: $_POST[wzrost] <br>
                    BMI wynosi: $bmi <br>";
                    
                    

                    $przedzial = 0;
                    if($bmi >= 0 && $bmi <=18)
                    {
                        $przedzial = 1;
                    }
                    else if($bmi >=19 && $bmi <= 25)
                    {
                        $przedzial = 2;
                    }
                    else if($bmi >= 26 && $bmi <= 30)
                    {
                        $przedzial = 3;
                    }
                    else if ($bmi >=31 && $bmi <= 100)
                    {
                        $przedzial = 4;
                    }
                   $data = date('Y-m-d');
                   
                   mysqli_query($conn, "INSERT INTO wynik VALUES ('','$przedzial','$data','$bmi');");
                    

                    
                }
            }



            ?>
        </form>
    </section>
    <section id="right">
        <img src="rys1.png" alt="ćwiczenia">
    </section>
    <footer>
        Autor: 00000000000
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </footer>

    
</body>
</html>