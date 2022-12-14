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
            <li><a id=jelenlegi href="../php/index.php">Kezdőlap</a></li>
            <li><a href="../php/etlap.php">Étlap</a></li>
            <li><a href="../php/kavekulonlegessegek.php">Kávékülönlegességek</a></li>
            <li><a href="../php/szallitas.php"><i id=kosar></i>Kosár</a></li>
        </ul>
    </nav>
    
    <main>
        <section id="nyitvatartas">
            <p id="nyitvaCim"><strong>Nyitvatartási idő</strong></p>
            <p>H - Szo: <em>10:00-20:00</em></p>
            <p> &nbsp;&nbsp;&nbsp; V:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>10:00-17:00</em></p>
        </section>

        <div id="honapdolgozo">
            <p>A hónap dolgozója</p>
            <figure id="csere">
                <IMG id="joey" src="../image/hd.png" alt="A kép nem jeleníthető meg">
                <video id="JoeyVideo" autoplay loop>
                    <source src="../video/giphy.mp4">
                    <source src="../video/giphy.webm">
                </video>
                <figcaption>Joey Tribbiani</figcaption>
            </figure>
        </div>

        <div id="fellepok">
            <p>Minden délután sztárfellépők várnak!</p>
            <IMG id="phoebe" src="../image/phoebesing.jpg" alt="A kép nem jeleníthető meg">
            <IMG id="ross" src="../image/Ross.jpg" alt="A kép nem jeleníthető meg">

        </div>

        <div id="smellyCat">
            <p>Jól fogod érezni magad nálunk!</p>
            <video id="video" controls >
                <source src="../video/Smelly%20Cat.mp4" type="video/mp4">
                <source src="../video/Smelly%20Cat.webm" type="video/webm">
            </video>
        </div>

        <aside id="törzsvendég">
            <p id="felso">Törzsvendégeink</p>
            <br>
            <p id="also">Velük bármikor találkozhatsz itt</p>
            <img id=imagemap src="../image/imagemap.jpg" alt="Workplace" usemap="#workmap">
            <p class="info">Kattints rájuk</p>
            <p class="info">és megtudhatsz egy kis infót róluk!</p>

            <map name="workmap">
                <area target="_blank" shape="poly" coords="105,175,110,175,125,190,129,220,120,250,130,270,135,300,100,289,97,
                    296,110,305,85,310,84,325,114,355,80,410,70,390,0,380,0,280,60,240,85,180" 
                    alt="Monica" href="https://www.google.com/search?sxsrf=ALeKk02AQHBZDZmxcAVBlrXCXbSB2npfsQ%3A1616016920764&ei
                    =GHZSYL6fLrmSwPAPvMeeoAg&q=monica+geller&oq=monica+geller&gs_lcp=Cgdnd3Mtd2l6EAMyAggAMgIIADICCAAyAggAMgIIADIGCA
                    AQBxAeMgYIABAHEB4yBQgAEMsBMgYIABAHEB4yAggAOgcIABCwAxBDOgcILhCwAxBDOgcIABBHELADOgQIABANUNkMWIQWYMoYaAFwAngAgAGtAY
                    gBqASSAQMwLjSYAQCgAQGqAQdnd3Mtd2l6yAEKwAEB&sclient=gws-wiz&ved=0ahUKEwi-i42UpLjvAhU5CRAIHbyjB4QQ4dUDCA0&uact=5">
                <area target="_blank" shape="poly" coords="175,110,195,130,195,150,186,180,200,205,220,205,235,265,185,290,197,
                    318,230,318,180,380,175,435,155,475,155,465,100,410,123,332,93,335,90,315,115,302,103,298,137,305,132,265,118,
                    245,125,240,132,220,130,210,130,195,110,172,135,170,140,125,145,120" alt="Chandler" href="https://www.google.com/
                    search?sxsrf=ALeKk02lnq7nuOCqgG1JGshhCaw1-ujgVQ%3A1616016925297&ei=HXZSYJfkEebirgTt2p7oDw&q=chandler+bing&oq=
                    chandler+bing&gs_lcp=Cgdnd3Mtd2l6EAMyBAgAEEMyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADIFCAAQywE6BwgjELADECc6Bwg
                    AELADEEM6BwguELADEEM6BAgjECc6BAguEEM6AgguUPja4gFYtoDjAWCVg-MBaAJwAHgAgAG7AYgBtxCSAQQwLjE2mAEAoAEBqgEHZ3dzLXdpesg
                    BCsABAQ&sclient=gws-wiz&ved=0ahUKEwjX5qGWpLjvAhVmsYsKHW2tB_0Q4dUDCA0&uact=5">
                <area target="_blank" shape="poly" coords="0,250,60,205,60,240,0,275" alt="Chandler" href="https://www.google.com/
                    search?sxsrf=ALeKk02lnq7nuOCqgG1JGshhCaw1-ujgVQ%3A1616016925297&ei=HXZSYJfkEebirgTt2p7oDw&q=chandler+bing&oq=
                    chandler+bing&gs_lcp=Cgdnd3Mtd2l6EAMyBAgAEEMyAggAMgIIADICCAAyAggAMgIIADICCAAyAggAMgIIADIFCAAQywE6BwgjELADECc6B
                    wgAELADEEM6BwguELADEEM6BAgjECc6BAguEEM6AgguUPja4gFYtoDjAWCVg-MBaAJwAHgAgAG7AYgBtxCSAQQwLjE2mAEAoAEBqgEHZ3dzLXdp
                    esgBCsABAQ&sclient=gws-wiz&ved=0ahUKEwjX5qGWpLjvAhVmsYsKHW2tB_0Q4dUDCA0&uact=5">
                <area target="_blank" shape="poly" coords="230,66,250,66,262,87,249,87,249,150,279,180,279,190,266,210,264,265,
                    252,275,240,305,235,285,215,315,192,310,210,290,183,295,212,280,235,262,225,200,207,203,190,185,195,180,200,120
                    ,210,86,220,68" alt="Rachel" href="https://www.google.com/search?sxsrf=ALeKk00OHoPXtlvi8BL-yrx3fN8sFVvovw%3A1616
                    024918147&ei=VpVSYPfSCOnGrgTr3LHwCw&q=rachel+green&oq=Rac&gs_lcp=Cgdnd3Mtd2l6EAMYADIECAAQQzICCAAyBAgAEEMyBAgAEEM
                    yAgguMgIIADICCC4yAggAMgIIADICCAA6BAgjECc6CggAEMcBEKMCEEM6BQguEJMCOggIABDHARCvAToICAAQxwEQowJQ-4sTWOqbE2CXqBNoAXA
                    AeACAAcgBiAGtBZIBBTAuNC4xmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=gws-wiz">
                <area target="_blank" shape="poly" coords="270,85,300,95,305,110,310,148,330,150,355,161,338,163,320,175,317,190
                    ,310,187,290,186,280,193,278,165,270,167,251,144,250,90" alt="Ross" href="https://www.google.com/search?q=Ross+G
                    eller&oq=Ross&aqs=chrome.0.69i59j69i57j0l6j46j0.1739j0j15&sourceid=chrome&ie=UTF-8">
                <area target="_blank" shape="poly" coords="373,175,377,200,374,215,405,230,440,317,462,317,462,295,435,228" 
                    alt="Ross" href="https://www.google.com/search?q=Ross+Geller&oq=Ross&aqs=chrome.0.69i59j69i57j0l6j46j0.1739j0j1
                    5&sourceid=chrome&ie=UTF-8">
                <area target="_blank" shape="poly" coords="350,164,363,168,375,184,375,200,374,223,400,229,410,240,433,310,429,
                    325,444,338,444,430,465,466,465,497,445,505,445,480,400,437,370,420,370,400,393,375,400,348,360,370,360,350,350,
                    345,369,330,389,307,380,272,370,265,342,260,332,230,318,195,319,184,320,175,335,164" alt="Joey" href="https://www
                    .google.com/search?q=joey+tribbiani&oq=Joey+Tr&aqs=chrome.0.0j69i57j46j0j46j0l5.4014j0j15&sourceid=chrome&ie=UTF-8
                    ">
                <area target="_blank" shape="poly" coords="290,187,300,185,320,195,330,245,340,255,340,265,373,265,375,267,377,
                    270,387,311,384,314,347,343,361,352,355,377,395,351,395,372,370,401,362,429,335,445,295,456,284,490,295,530,295,
                    595,290,610,270,610,259,600,262,570,250,520,230,490,207,469,199,472,193,467,185,485,193,515,160,535,145,540,100,
                    532,95,525,100,519,123,518,152,485,170,460,173,450,170,445,180,420,183,402,180,397,180,385,208,350,220,340,230,
                    340,240,310,250,290,260,270,269,268,269,230,270,205" alt="Phoebe" href="https://www.google.com/search?q=Phoebe+
                    Buffay&oq=Phoebe+Buffay&aqs=chrome..69i57j0l9.8276j0j15&sourceid=chrome&ie=UTF-8">
            </map>
        </aside>

        <section id="iframe">
            <p>Galléria</p>
        <iframe src="https://www.alamy.com/stock-photo/central-perk-friends.html" title="Kepek">
        </iframe>
        </section>

        <article>
            <div id="kepValtakozas"></div>
            <b class="helyszin">Gyere el hozzánk!</b>
            <br>
            <p class="helyszin"> <cite>New York</cite></p>
            <br>
            <i class="helyszin">Grove Street 13</i>
        </article>
    </main>

    <footer>
        <p>&copy; 2020 - Pető József</p>
    </footer>

</body>
</html>