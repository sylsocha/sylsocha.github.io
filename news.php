<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="styles/home_page.css" rel="stylesheet">
    <link href="styles/mobile.css" rel="stylesheet">
    <link href="styles/news.css" rel="stylesheet">
    <title>GRAFIX</title>
    <link rel="shortcut icon" type="image/png" href="photos/favikon.png">

    <!--import major mono display-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

    <!--import urbanist-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="index.php"><img src="photos/logo.png" class="logo" alt="LOGO"></a>
    <label class="hamburger">
        <input type="checkbox">
    </label>
    <nav>
        <div class="menu_elem"><a href="./index.php" class="a_menu">home</a></div>
        <?php
        session_start();
        if(!isset($_SESSION['user']))
            echo "<div class='menu_elem'><a href='./log_in_form.php' class='a_menu'>zaloguj / zarejestruj</a></div>";
        else
            echo "<div class='menu_elem'><a href='./log_out.php' class='a_menu'>wyloguj</a></div>";
        ?>
        <div class="menu_elem"><a href="./contact.php" class="a_menu">kontakt</a></div>
        <div class="menu_elem"><a href="./news.php" class="a_menu">aktualności</a></div>
        <div class="menu_elem"><a href="./cart.php" class="a_menu">koszyk</a></div>
    </nav>
</div>

<header>
    <img src="photos/news_photos/news_hero.jpeg" alt="stocznia" class="hero_image_news">
    <img src="photos/news_photos/news_hero_mobile.jpeg" alt="stocznia" class="hero_image_news_mobile">

    <div class="hero_news">
        <h2 id="branza">wybierz swojĄ brAnżę</h2>
        <div class="option_container">
            <a href="#huta" class="menu_option"><img src="photos/hammer-solid.png" alt="młot" class="ikona"></a>
            <a href="#huta" class="menu_option">chwała wielkiej hucie</a>
        </div>
        <div class="option_container">
            <a href="#stocznia" class="menu_option"><img src="photos/ship-solid.png" alt="statek" class="ikona"></a>
            <a href="#stocznia" class="menu_option">jesteśmy w Radomiu - stoczniowcy</a>
        </div>
        <div class="option_container">
            <a href="#stacja" class="menu_option"><img src="photos/gas-pump-solid.png" alt="dystrubutor paliwa" class="ikona"></a>
            <a href="#stacja" class="menu_option">biedak ma w gazie - stacje paliw</a>
        </div>
    </div>

</header>

<main class="main_news">
    <h3 id="huta">chwAłA wielkiej hucie</h3>
    <div class="container_branzy" id="container_huta">
        <p class="akapit_brazy">29.09.2002r.
            <br><br>
            Qorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            <br><br>
            Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper quis venenatis nisi. Proin vitae facilisis nisi, ac posuere leo.
        </p>
        <img src="photos/news_photos/interior-view-steel-factory(1).jpg" alt="pracujący hutnicy" class="zdjecie">
    </div>

    <img src="photos/news_photos/pexels-rasmus-andersen-759275282-19704439(1).jpg" alt="stocznia" class="zdjecie_branzy">

    <h3 id="stocznia">jesteśmy w rAdomiu - stoczniowcy</h3>
    <div class="container_branzy" id="container_stocznia">
        <img src="photos/news_photos/pexels-nicamera41-6638576.jpg" alt="pracujący stoczniowcy" class="zdjecie">
        <p class="akapit_brazy">7.03.1996r.
            <br><br>
            Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            <br><br>
            Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper quis venenatis nisi. Proin vitae facilisis nisi, ac posuere leo.
        </p>
    </div>

    <img src="photos/news_photos/pexels-andres-ramirez-13143104-13172854(1).jpg" alt="stacja paliw nocą" class="zdjecie_branzy"> <!--Zdjęcie dodane przez Andrés Ramírez: https://www.pexels.com/pl-pl/zdjecie/escena-de-una-pelicula-que-no-existe-13172854/-->

    <h3 id="stacja">biedAk ma w gAzie - stAcje paliw</h3>
    <div class="container_branzy" id="container_stacja">
        <p class="akapit_brazy">1.01.2024r.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            <br><br>
            Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper quis venenatis nisi. Proin vitae facilisis nisi, ac posuere leo.
            <br><br>
            Nam pulvinar blandit velit, id condimentum diam faucibus at. Aliquam lacus nisi, sollicitudin at nisi nec, fermentum congue felis. Quisque mauris dolor, fringilla sed tincidunt ac, finibus non odio. Sed vitae mauris nec ante pretium finibus. Donec nisl neque, pharetra ac elit eu, faucibus aliquam ligula. Nullam dictum, tellus tincidunt tempor laoreet, nibh elit sollicitudin felis, eget feugiat sapien diam nec nisl. Aenean gravida turpis nisi, consequat dictum risus dapibus a. Duis felis ante, varius in neque eu, tempor suscipit sem. Maecenas ullamcorper gravida sem sit amet cursus. Etiam pulvinar purus vitae justo pharetra consequat. Mauris id mi ut arcu feugiat maximus. Mauris consequat tellus id tempus aliquet.
        </p>
        <img src="photos/news_photos/people-spending-time-gas-station.jpg" alt="ludzie na stacji paliw" class="zdjecie" id="stacja1">
        <img src="photos/news_photos/gas-tank-car-close-up-photo.jpg" alt="korek wlewu paliwa" class="zdjecie" id="stacja2">
        <p class="akapit_brazy">
            Vestibulum dictum ultrices elit a luctus. Sed in ante ut leo congue posuere at sit amet ligula. Pellentesque eget augue nec nisl sodales blandit sed et sem. Aenean quis finibus arcu, in hendrerit purus. Praesent ac aliquet lorem. Morbi feugiat aliquam ligula, et vestibulum ligula hendrerit vitae. Sed ex lorem, pulvinar sed auctor sit amet, molestie a nibh. Ut euismod nisl arcu, sed placerat nulla volutpat aliquet. Ut id convallis nisl. Ut mauris leo, lacinia sed elit id, sagittis rhoncus odio. Pellentesque sapien libero, lobortis a placerat et, malesuada sit amet dui. Nam sem sapien, congue eu rutrum nec, pellentesque eget ligula.
            <br><br>
            Nunc tempor interdum ex, sed cursus nunc egestas aliquet. Pellentesque interdum vulputate elementum. Donec erat diam, pharetra nec enim ut, bibendum pretium tellus. Vestibulum et turpis nibh. Cras vel ornare velit, ac pretium arcu. Cras justo augue, finibus id sollicitudin et, rutrum eget metus. Suspendisse ut mauris eu massa pulvinar sollicitudin vel sed enim.
            <br><br>
            Pellentesque viverra arcu et dignissim vehicula. Donec a velit ac dolor dapibus pellentesque sit amet at erat. Phasellus porttitor, justo eu ultrices vulputate, nisi mi placerat lectus, sed rutrum tellus est id urna. Aliquam pellentesque odio metus, sit amet imperdiet nisl sodales eu. Quisque viverra nunc nec vestibulum dapibus. Integer nec diam a libero tincidunt varius sed vel odio. Donec rutrum dapibus massa, vel tempor nulla porta id. Suspendisse vulputate fermentum sem sollicitudin facilisis. Aliquam vehicula sapien nec ante auctor, quis mollis leo tincidunt.
        </p>

    </div>
</main>


<footer>
</footer>

</body>
</html>