<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header id="header">

                <h3>Reprezentacja polski w piłce nożnej</h3>
                <img src="obraz1.jpg" alt="reprezentacja">

    </header>


    <section id="left">
                <form action="liga.php" method="post">
                    <select name="pozycja" id="">
                        
                        <option value="1">Bramkarze</option>
                        <option value="2">Obrońcy</option>
                        <option value="3">Pomcnicy</option>
                        <option value="4">Napastnicy</option>
                    </select>
                    <button name="submit">Zobacz</button>
                </form>
            <img src="zad2.png" alt="piłka">

            <p>Autor: 00000000000</p>

    </section>

    <section id="right">

                <ol>
                    <?php


                    if(isset($_POST['submit']))
                    {
                        if(!empty($_POST['pozycja']))
                        {

                        
                    
                    $conn = mysqli_connect("localhost","root","","liga");
                    $pozycja = $_POST['pozycja'];
                    $query = mysqli_query($conn, "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $pozycja;");
                    while($r = mysqli_fetch_row($query))
                    {
                        echo "<li>
                            <p>$r[0]
                            $r[1]</p>
                        
                        </li>";

                    }}}


                    ?>
                </ol>

    </section>

    <main id="main">
                    <h3>Liga mistrzów</h3>

    </main>

    <section id="liga">
        <!-- skrypt 2 -->
        <?php

                $query = mysqli_query($conn,"SELECT zespol, punkty, grupa FROM liga ORDER BY punkty desc;");
                while($r = mysqli_fetch_row($query))
                {
                    echo "<section class = 'info'>
                    <h2>$r[0]</h2>
                    <h1>$r[1]</h2>
                    <p>grupa: $r[2]</p>
                    </section>";
                }
         mysqli_close($conn);   
        ?>


    </section>

</body>
</html>
