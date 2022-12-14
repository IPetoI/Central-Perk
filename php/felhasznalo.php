<?php
    function felhasznalo_tarolas($filename) {
        $felhasznalok = [];

        $fajl = fopen($filename, "r");

        while (($sor = fgets($fajl)) !== false) {
            $felhasznalok[] = unserialize($sor);
        }
        fclose($fajl);

        return $felhasznalok;
    }

    function felhasznalo_mentese($filename, $felhasznal) {
        $fajl = fopen($filename, "a");

        fwrite($fajl, serialize($felhasznal). "\n");
        fclose($fajl);
    }

    function kep_feltoltes($felhasznalonev) {
        global $fajlfeltoltes_hiba;

        if (isset($_FILES["profilkep"]) && is_uploaded_file($_FILES["profilkep"]["tmp_name"])) {
            $engedelyezett_kiterjesztes = ["png", "jpg", "jpeg"];
            $kiterjesztes = strtolower(pathinfo($_FILES["profilkep"]["name"], PATHINFO_EXTENSION));

            if (in_array($kiterjesztes, $engedelyezett_kiterjesztes)) {
                if ($_FILES["profilkep"]["error"] === 0) {
                    if ($_FILES["profilkep"]["size"] <= 15728640) {
                        $path = "../image/feltoltott/" . $felhasznalonev . "." . $kiterjesztes;

                        if (!move_uploaded_file($_FILES["profilkep"]["tmp_name"], $path)) {
                            $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
                        }
                    } else {
                        $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
                    }
                } else {
                    $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
                }
            } else {
                $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
            }
        }
    }
?>