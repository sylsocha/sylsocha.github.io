<!DOCTYPE html>
<html lang="pl">
<head>
    <!--http://localhost/sylsocha.github.io/cart.php-->
    <meta charset="UTF-8">
    <link href="styles/home_page.css" rel="stylesheet">
    <link href="styles/mobile.css" rel="stylesheet">
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
    <a href="./index.php"><img src="photos/logo.png" class="logo" alt="LOGO"></a>
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

        <div class="menu_elem"><a href="contact.php" class="a_menu">kontakt</a></div>
        <div class="menu_elem"><a href="news.php" class="a_menu">aktualności</a></div>
        <div class="menu_elem"><a href="./cart.php" class="a_menu">koszyk</a></div>
    </nav>
</div>

<header>
    <div class="hero">
        <h1>twoj czAs jest w twoich rękAch</h1>
        <p id="hero">Borem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#h2_category" id="dalej">↓ Przejdź dalej ↓</a>
    </div>
</header>

<main class="main_news">
    <h2 id="h2_category">Niespodzianka, czy zakup zaplanowany?</h2>
    <div class="category">
        <div class="cat_menu_elem">
            <a href="./random_calendar.php"><img src="photos/icons/calendar-xmark-solid.png" alt="losowe kalendarze" class="category_photo"></a>
            <a href="./random_calendar.php" class="cat_menu">losowe kAlendArze</a>
            <p class="p_category">O tym, z którego roku jest dany kalendarz dowiesz się dopiero po otwarciu paczki.<br><br>Możesz wylosować kalendarz nawet z 1850 lub na 2050 rok!</p>
        </div>
        <div class="cat_menu_elem">
            <a href="./yeared_calendar.php"><img src="photos/icons/calendar-check-regular.png" alt="losowe kalendarze" class="category_photo"></a>
            <a href="./yeared_calendar.php" class="cat_menu">kAlendArze z dAnego roku</a>
            <p class="p_category">Żaden z kalendarzy nie jest na obecny rok, ale przynajmniej wiesz na który!<br><br>Powiedz nam, dlaczego wybierasz dany rok, a otrzymasz zniżkę!</p>
        </div>
    </div>
    <p id="o_nas"> O nas<br><br>Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
</main>

<footer>
</footer>

</body>
</html>