<?php
    session_start();
    include "felhasznalo.php";

    if(isset($_SESSION["felhasznalo"]) && !empty($_SESSION["felhasznalo"])) {
        header("Location: szallitas.php");
        exit();

    }

    $felhasznalokk = felhasznalo_tarolas("../txt/felhasznalok.txt");

    $nev = "";
    $email = "";
    $jelszo1 = "";
    $jelszo2 = "";
    $nincs_regisztracio = null;
    $GLOBALS['joEmail'] = null;
    $hibak = [];

    if(isset($_POST["regisztralok"])) {

        $nev = $_POST["teljesNev"];
        $email = $_POST["email"];
        $jelszo1 = $_POST["jelszo"];
        $jelszo2 = $_POST["jelszo2"];
        $sikeres_regisztracio = true;

        $emaildarab = explode("@", $email);
        $emailkep = reset($emaildarab);

        foreach ($felhasznalokk as $felhaszn) {
            if($felhaszn["email"] === $email && $email != "") {
                $sikeres_regisztracio = false;
                $hibak[] = "Ezzel az e-mail címmel már regisztráltak!";
            }
        }

        if($nev === "" || $email=== "" || $jelszo1==="" || $jelszo2==="") {
            $sikeres_regisztracio = false;
            $hibak[]= "Minden mezőt tölts ki!";
        }

        if(strlen($jelszo1) < 5 && $jelszo1 !== "" && $jelszo2 !== "") {
            $sikeres_regisztracio = false;
            $hibak[]= "A jelszónak legalább 5 karakter hosszúnak kell lennie!";
        }

        if(!(preg_match('/[A-Za-z]/', $jelszo1) && preg_match('/[0-9]/' , $jelszo1)) && $jelszo1 !== "" && $jelszo2 !== "") {
            $sikeres_regisztracio = false;
            $hibak[] = "A jelszónak tartalmaznia kell betűt és számjegyet is!";
        }

        if($jelszo1 !== $jelszo2 && $jelszo1 !== "" && $jelszo2 !== "") {
            $sikeres_regisztracio = false;
            $hibak[] = "A két jelszó nem egyezik!";
        }

        $fajlfeltoltes_hiba = "";
        kep_feltoltes($emailkep);

        if ($fajlfeltoltes_hiba !== "") {
            $hibak[] = $fajlfeltoltes_hiba;
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

<form action="regisztracio.php" name="regisztralas" method="POST" enctype="multipart/form-data" autocomplete="on" >
    <div id="szegelyRegisztracio">
        <fieldset id="regisztracio">
            <legend>Regisztrációs adatok</legend>
            <label>Teljes név: <br><input type="text" name="teljesNev"  value="<?php if (isset($_POST['teljesNev'])) echo $_POST['teljesNev']; ?>"> </label>
            <br>
            <label>E-mail: <br><input type="email" name="email"> </label>
            <br>
            <label>Jelszó: <br><input type="password" name="jelszo" > </label>
            <br>
            <label>Jelszó ismét: <br> <input type="password" name="jelszo2" /> </label>
            <label for="kepFeltoltes">Profilkép:</label>
            <input id="kepFeltoltes" type="file" name="profilkep" accept="image/*">
            <input id="regisztalas" type="submit" name="regisztralok" value="Regisztrálok"/>
            <input id="reset" type="reset" name="ujrakezdem" value="Ujrakezdem" <?php if(isset($_POST['ujrakezdem'])) {header("Location: regisztracio.php");} ?> />
        </fieldset>
    </div>
</form>

<div>
    <?php
        if(isset($_POST["regisztralok"])) {

            function kivetel($email) {

                if(!(preg_match("/^[a-zA-Z0-9\.\_]+@[a-zA-Z]+\.[a-zA-Z]+$/", $email)) && $email != "") {
                    $GLOBALS['joEmail'] = false;
                    throw new Exception("Létező e-mailt adj meg!");
                }
            }
            
            try {
                kivetel($email);
            } catch (Exception $ex) {
                echo"<p class='hiba'>".$ex -> getMessage() . "</p>";
            }

            if ($sikeres_regisztracio === false) {
                foreach ($hibak as $hiba) {
                    echo "<p class='hiba' >" . $hiba . '<br>' . "</p>";
                }
            }
            $sikeres_regisztracio = $GLOBALS['joEmail'];

            if ($GLOBALS['joEmail'] === null) {
                $sikeres_regisztracio = true;
            }

            if((count($hibak) === 0) && $sikeres_regisztracio === true) {

                $neve = explode(" ", $nev);
                $keresztnev = end($neve);
                $vezeteknev = reset($neve);

                $adat= [
                    "teljesNev" => $nev,
                    "email" => $email,
                    "jelszo" => $jelszo1,
                    "vezeteknev" => $vezeteknev,
                    "keresztnev" => $keresztnev,
                    "profilkep" => $emailkep,
                ];

                felhasznalo_mentese("../txt/felhasznalok.txt", $adat);
                header("Location: bejelentkezes.php");
            }
        }
    ?>
</div>

<footer>
    <p>&copy; 2020 - Pető József</p>
</footer>

</body>
</html>