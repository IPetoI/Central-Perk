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
        <li><a  href="../php/index.php">Kezdőlap</a></li>
        <li><a href="../php/etlap.php">Étlap</a></li>
        <li><a id=jelenlegi href="../php/kavekulonlegessegek.php">Kávékülönlegességek</a></li>
        <li><a href="../php/szallitas.php"><i id=kosar></i>Kosár</a></li>
    </ul>
</nav>

<table>
    <tr><th id="kaveNev">Kávékülönlegességünk</th><th id="kaveAr">Ára</th><th id="kerem">Kosárba</th></tr>
    <tr><td headers="kaveNev">forró csokoládé</td><td headers="kaveAr">620 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Filterkávé</td><td headers="kaveAr">700 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Eszpresszó</td><td headers="kaveAr">750 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Americano</td><td headers="kaveAr">830 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Cortado</td><td headers="kaveAr">850 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Eszpresszó Macchiato</td><td headers="kaveAr">850 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Macchiato</td><td headers="kaveAr">890 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Mocha</td><td headers="kaveAr">900 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Cappuccino</td><td headers="kaveAr">950 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Flat White</td><td headers="kaveAr">950 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Long Black</td><td headers="kaveAr">1000 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Dupla Eszpresszó</td><td headers="kaveAr">1050 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Hidegen áztatott</td><td headers="kaveAr">1050 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Caffé Latte</td><td headers="kaveAr">1090 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Jeges kávé frappé</td><td headers="kaveAr">1100 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Affogato</td><td headers="kaveAr">1120 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Melange</td><td headers="kaveAr">1150 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Török kávé</td><td headers="kaveAr">1160 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Café au lait</td><td headers="kaveAr">1250 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Bécsi kávé</td><td headers="kaveAr">1450 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Csepegtetett kávé</td><td headers="kaveAr">1560 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Central kávé</td><td headers="kaveAr">1600 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Ristretto</td><td headers="kaveAr">1750 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
    <tr><td headers="kaveNev">Ír kávé</td><td headers="kaveAr">2600 Ft</td><td>
            <input type="number" class="darab1" name="darab" value="0" min="0" max="10">
            <button type="button" class="csomagolGomb1" onclick="alert('Kosárba tetted a termékedet.')">Kosárba</button></td></tr>
</table>

    <IMG id="kaveKepek0" src="../image/kavek/affogato.jpg" alt="Affogato">
    <IMG id="kaveKepek1" src="../image/kavek/cafe_au_lait.jpg" alt="CafeAuLaitg">
    <IMG id="kaveKepek2" src="../image/kavek/caffe_latte.jpg" alt="CaffeLatte">
    <IMG id="kaveKepek3" src="../image/kavek/irkave.jpg" alt="Irkave">
    <IMG id="kaveKepek4" src="../image/kavek/melange.jpg" alt="Melange">
    <IMG id="kaveKepek5" src="../image/kavek/ristretto.jpg" alt="Ristretto">


<footer>
        <p>&copy; 2020 - Pető József</p>        
</footer>

</body>
</html>