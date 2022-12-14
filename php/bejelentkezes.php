<?php
    session_start();
    include "felhasznalo.php";

    if(isset($_SESSION["felhasznalo"]) && !empty($_SESSION["felhasznalo"])) {
        header("Location: szallitas.php");
        exit();
    }

    $felhasznalokkk = felhasznalo_tarolas("../txt/felhasznalok.txt");
    $email = "";
    $jelszo = "";
    $sikeres_belepes = null;

    if(isset($_POST["bejelentkezek"])) {
        $email = $_POST["email"];
        $jelszo = $_POST["jelszo"];
        $sikeres_belepes = false;

        $felhasznaloi_adatok= array();

        foreach ($felhasznalokkk as $felhasznalo) {
            if($email === $felhasznalo["email"] && $jelszo === $felhasznalo["jelszo"]) {

                $felhasznaloi_adatok = $felhasznalo;

                $sikeres_belepes = true;
                $_SESSION["felhasznalo"] = $felhasznaloi_adatok;

                break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Central Perk</title>
        <link rel="icon" href="../image/icon.png">
        <link rel="stylesheet" href="../css/centralperk.css?<?php echo date('l jS \of F Y h:i:s A'); ?>"/>
        <meta name="author" content="Pető József"/>
        <meta name="keywords" content="friends, central perk, coffee, kávé, jóbarátok"/>
    </head>
<body>

    <?php
        include "../html/fejlec.html";
    ?>

    <nav class="sav">
        <ul>
            <li><a href="../php/index.php">Kezdőlap</a></li>
            <li><a href="../php/etlap.php">Étlap</a></li>
            <li><a href="../php/kavekulonlegessegek.php">Kávékülönlegességek</a></li>
            <li><a id=jelenlegi href="../php/szallitas.php"><i id=kosar></i>Kosár</a></li>
        </ul>
    </nav>

    <form action="bejelentkezes.php" name="bejeletkezes" method="POST" enctype="multipart/form-data" autocomplete="on" >
        <div id="szegelyBejelentkezes">
            <fieldset id="bejelentkezes">
                <legend>Bejelentkezési adatok</legend>
                <label>E-mail: <br> <input type="email" name="email" required> </label>
                <br>
                <label>Jelszó: <br> <input type="password" name="jelszo" required> </label>
                <br>
                <a href="regisztracio.php">Még nem regisztráltál?</a>
                <input id="bejelentkez" type="submit" name="bejelentkezek" value="Bejelentkezem"/>
            </fieldset>
        </div>
    </form>

    <div>
        <?php
            if($sikeres_belepes === true) {
                header("Location: szallitas.php");
            }else if($sikeres_belepes === false) {
                echo '<Strong style="position: absolute;color: white;top: 940px;width: 100%;text-align: center">Sikertelen belépés!</Strong>';
            }
        ?>
    </div>

    <footer>
        <p>&copy; 2020 - Pető József</p>
    </footer>

</body>
</html>