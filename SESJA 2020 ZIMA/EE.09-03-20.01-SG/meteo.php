<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header id="header-left">
        <p>maj, 2019 r.</p>
    </header>
    <header id="header-mid">
        <h2>Prognoza dla Poznania</h2>
    </header>
    <header id="header-right">
        <img src="logo.png" alt="prognoza">
    </header>
    <section id="left">
        <a href="kwerendy.txt">Kwerendy</a>
    </section>
    <section id="right">
        <img src="obraz.jpg" alt="Polska, Poznań">
    </section>
    <main>
        <table>
            <tr>
                <th>Lp.</th>
                <th>DATA</th>
                <th>NOC - TEMPERATURA</th>
                <th>DZIEŃ - TEMPERATURA</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <!--skrypt-->
            <?php
            $conn = mysqli_connect("localhost","root","","pogoda");
            $query = mysqli_query($conn,"SELECT * FROM pogoda WHERE miasta_id = '2' ORDER BY data_prognozy DESC;");
            while($r = mysqli_fetch_row($query))
            {
                echo "<tr><td>$r[0]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td></tr>";

            }
            ?>
        </table>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>