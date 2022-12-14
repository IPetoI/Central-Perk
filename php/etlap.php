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
            <li><a id=jelenlegi href="../php/etlap.php">Étlap</a></li>
            <li><a href="../php/kavekulonlegessegek.php">Kávékülönlegességek</a></li>
            <li><a href="../php/szallitas.php"><i id=kosar></i>Kosár</a></li>
        </ul>
    </nav>

    <main id="etlapMinden">
        <div class="etlapDoboz">
            <div class="etlapNevAr">
                <span> Amerikai palacsinta <br> 1200 Ft/2db </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Amerikaipalacsinta.png" alt="Amerikaipalacsinta">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Nutellás</li>
                    <li>Lekváros</li>
                    <li>Pudingos</li>
                    <li>Juharszirupos</li>
                    <li>Édes krémes</li>
                    <li>Tejszinhab</li>
                    <li>Gyümülcsök</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="checkbox" class="darab" name="darab" >
                    <input type="checkbox" class="darab" name="darab" >
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Fánk <br> 500 Ft/db </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Fank.png" alt="Fánk">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Csokis</li>
                    <li>Vanilliás</li>
                    <li>Barack lekváros</li>
                    <li>Gyümölcslekvár</li>
                    <li>Édes krémes</li>
                    <li>Üres</li>
                    <li>Porcukor</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="checkbox" class="darab" name="darab" >
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Joghurttorta <br> 700 Ft/szelet </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Joghurttorta.png" alt=" Joghurttorta">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Barack joghurtos</li>
                    <li>Eper joghurtos</li>
                    <li>Szilva joghurtos</li>
                    <li>Málna joghurt</li>
                    <li>Vegyes joghurtos</li>
                    <li>Szeder joghurtos</li>
                    <li>Gyömülcsök</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="checkbox" class="darab" name="darab" >
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Macaron <br> 850 Ft/3db </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Macaron.png" alt="Macaron">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Barackos</li>
                    <li>Körtés</li>
                    <li>Szilvás</li>
                    <li>Oreos</li>
                    <li>Banános</li>
                    <li>Nutellás</li>
                    <li>Málnás</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Muffin <br> 450 Ft/db</span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Muffin.png" alt="Rachel trüffelje">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Csokis</li>
                    <li>Fahéjas</li>
                    <li>Gesztenyés</li>
                    <li>Vaníllia pudingos</li>
                    <li>Almás</li>
                    <li>Áfonyás</li>
                    <li>Sütőtökös</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Sajttorta <br> 950 Ft/szelet</span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Sajttorta.png" alt="Sajttorta">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Gyümölcsös</li>
                    <li>Fehércsokis</li>
                    <li>Klasszikus</li>
                    <li>Oreos</li>
                    <li>Expressz</li>
                    <li>Nutellás</li>
                    <li>Tejszinhab</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="checkbox" class="darab" name="darab" >
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Burgonya <br> 500 Ft/db</span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Burgonya.png" alt="Burhonya">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Egészben</li>
                    <li>Kockázva</li>
                    <li>Nyársalva</li>
                    <li>Csavarva</li>
                    <li>Félbe vágva</li>
                    <li>Megpucolva</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz">
            <div class="etlapNevAr">
            <span> Souffle <br> 1000 Ft/db </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/Souffle.png" alt="Souffle">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Erdei gyümölcsös</li>
                    <li>Citromos</li>
                    <li>Mákos</li>
                    <li>Túrós</li>
                    <li>Csokis</li>
                    <li>Tejszinhab</li>
                    <li>Gyömülcsök</li>
                </ul>
                <ul>
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="number" class="darab" name="darab" value="0" min="0" max="10">
                    <input type="checkbox" class="darab" name="darab" >
                    <input type="checkbox" class="darab" name="darab" >
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>

        <div class="etlapDoboz" id="akcio">
            <div class="etlapNevAr">
            <span> Heti akció <br> 900 Ft </span>
            </div>
            <IMG class="etlapKep" src="../image/suti/trifle.jpg" alt="Rachel trüffelje">
            <div class="etlapOsszetevok">
                <ul>
                    <li>Piskóta</li>
                    <li>Lekvár</li>
                    <li>Marha hús </li>
                    <li>Vaníllia puding</li>
                    <li>Banán</li>
                    <li>Tejszinhab</li>
                    <li>Málna</li>
                </ul>
            </div>
            <button type="button" class="csomagolGomb" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2020 - Pető József</p>
    </footer>

</body>
</html>