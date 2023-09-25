<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section id="baner">
        <h1>Moje kwiaty</h1>
    </section>

    <section id="lewy">
        <h3>
            Kwiaty dla Ciebie!
        </h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br>
            <a href="znajdz.php">Znajdź kwiaciarnię</a><br>
            <img src="gozdzik.jpeg" alt="Goździk">

    </section>
    <section id="prawy">
    <img src="gerbera.jpeg" alt="gerbera">
        <img src="gozdzik.jpeg" alt="Goździk">
        <img src="roza.jpeg" alt="róża">
        <p>
        Podaj miejscowość, w której poszukujesz kwiaciarni:
        </p>
        <form action="znajdz.php" method="post">
            <input type="text" name="dane">
            <input type="submit" value="SPRAWDŹ">
        </form>
        <?php
        
            $baza="kwiaciarnia";
            $user="root";
            $pass="";
            $host="localhost";
            $conn=mysqli_connect($host,$user,$pass,$baza);
            $dane = $_POST['dane'];  
            if(isset($dane))
             {
                
                
                $kwerenda = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$dane';";
                $query = mysqli_query($conn, $kwerenda);
                while ($row = mysqli_fetch_array($query)) {
                    echo "$row[0], $row[1]";
                }
            }
                


            mysqli_close($conn);
        ?>
    </section>
    <section id="stopka"><h3>
        Stronę opracował:00000000000
    </h3></section>
</body>
</html>