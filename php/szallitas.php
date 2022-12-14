<?php
    session_start();
    include "felhasznalo.php";

    if(!isset($_SESSION["felhasznalo"]) || empty($_SESSION["felhasznalo"])) {
        header("Location: bejelentkezes.php");
        exit();
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

<?php
    $profilkep = "../image/feltoltott/default.png";
    $utvonal = "../image/feltoltott/" . $_SESSION["felhasznalo"]["profilkep"];

    $kiterjesztesek = ["png", "jpg", "jpeg"];

    foreach ($kiterjesztesek as $kiterjesztes) {
        if (file_exists($utvonal . "." . $kiterjesztes)) {
            $profilkep = $utvonal . "." . $kiterjesztes;
        }
    }
?>

<div id="kijelentkezes">
    <a href="kijelentkezes.php">Kijelentkezem </a>
    <tr>
        <img id="profkep" src="<?php echo $profilkep; ?>" alt="Profilkép" height="200"/>
    </tr>
</div>

<form action="szallitas.php" name="szallitas" method="post" enctype="multipart/form-data" autocomplete="on" >
    <div id="szegelySzemelyes">
        <fieldset id="szemelyes">
            <legend>Személyes adatok</legend>
            <label>Vezetéknév: <br><input type="text" name="vezeteknev"  value="<?php echo $_SESSION['felhasznalo']['vezeteknev']; ?>" readonly required></label>
            <br>
            <label>Keresztnév:<br><input type="text" name="keresztnev"  value="<?php echo $_SESSION['felhasznalo']['keresztnev']; ?>" readonly required></label>
            <br>
            <label>E-mail:<br><input type="email" name="email" value="<?php echo $_SESSION['felhasznalo']['email']; ?>" readonly required></label>
            <br>
            <label>Telefonszám:<br><input type="tel" name="telefonszam"></label>
        </fieldset>
    </div>

    <div id="szegelySzallitas">
        <fieldset id="szallitas">
            <legend>Szállítási adatok</legend>
            <label>Város: <br><input type="text" name="varos" readonly placeholder="New York"></label>
            <br>
            <label>Utca:<br><input type="text" name="utca" required></label>
            <br>
            <label>Házszám:<br><input type="number" name="hazszam" min="0" max="500" required></label>
            <br>
            <label>Csengő:<br><input type="number" name="csengo" min="0" max="1000"></label>
            <br>
            <label>Emelet:<br><input type="number" name="emelet" min="0" max="50"></label>
            <br>
            <label>Ajtó:<br><input type="number" name="ajto"  min="0" max="1000"></label>
            <br>
            <label>Megjegyzés:<br><textarea name="megjegyzes" maxlength="256" rows="10" cols="40"></textarea></label>
            <br>
            <input type="hidden">
            <input id="rendeles" type="submit" value="Megrendelem">
        </fieldset>
    </div>

    <div id="szegelyFizetes">
        <fieldset id="fizetes">
            <legend>Fizetési mód</legend>
            <label for="kezpenz">Kézpénz</label>
            <input class="radio" type="radio" id="kezpenz" name="fizetes" checked><br>
            <label for="bankkartya">Bankkártya</label>
            <input class="radio" type="radio" id="bankkartya" name="fizetes">
        </fieldset>
    </div>

    <div id="szegelyTermekek" >
        <fieldset id="termekek">
            <legend>Termékek</legend>
            
        </fieldset>
    </div>
</form>

<footer id="footer_szallit">
    <p>&copy; 2020 - Pető József</p>
</footer>

</body>
</html>