<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Delivery Food -доставка еды на дом</title>
    <link rel="stylesheet" href="http://fonts.google.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header class="header">
        <a href="index.php" class="logo wow animate__animated animate__rubberBand">
            <img src="img/logo.svg" alt="Logo"></img>
        </a>
        <!-- поле поиска -->
        <input type="text" class="input input-adress" placeholder="Адрес доставки" />
        <div class="buttons">
            <button class="button button-primary">
                <img class="button-icon" src="img/user.svg" alt="user">
                <span class="button-text">Войти</span>
            </button>
            <button class="button">
                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                <span class="button-text">Корзина</span>
            </button>
        </div>
    </header>
    <!-- /container -->
</div>

<main class="main">
    <div class="container">
        <section class="promo">
            <h1 class="promo-title">Онлайн-сервис<br />доставки еды на дом</h1>
            <p class="promo-text">Блюда из любимого ресторана привезет курьер в перчатках, маске и с антисептиком</p>
        </section>

        <section class="restaraunts">
            <div class="section-heading">
                <h2 class="section-title">Рестораны</h2>
                <input type="text" class="input input-search" placeholder="Поиск блюд и ресторанов">
            </div>

<form method="get" action="index.php">
    <?php
    include_once "Main.php";
    $arr_image_url=[
        new  Info("img/pasiju/pa-si-ju.jpg",
        "Pa-si-ju",
        "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter Restaurant",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast Restaurant",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист Restaurant",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа Карла",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою Клянусь",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/pasiju/pa-si-ju.jpg",
            "Pa-si-ju_2",
            "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter Restaurant_2",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast Restaurant_2",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист Restaurant_2",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа Карла_2",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою Клянусь_2",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/pasiju/pa-si-ju.jpg",
            "Pa-si-ju 3",
            "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter Restaurant_3",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast Restaurant_3",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист Restaurant_3",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа Карла_3",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою Клянусь_3",
            "50 мин", "6.3", "Заказ от 1500 грн")

    ];

    $ar=new Main($arr_image_url);


    if(isset($_GET['btn']))
    {
        echo $ar->generatePage($_GET['btn']-1);
    }
    else
    {
        echo $ar->generatePage(0);
    }
    ?>

</form>
        </section>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <a href="index.php" class="logo wow animate__animated animate__rubberBand">
            <img src="img/logo.svg" alt="logotype" class="logo footer-log0"></img>
            </a>
            <nav class="footer-nav">
                <a href="restourant.html" class="footer-link">Ресторанам</a>
                <a href="restourant.html" class="footer-link">Курьерам</a>
                <a href="restourant.html" class="footer-link">Пресс-центр</a>
                <a href="restourant.html" class="footer-link">Контакты</a>
            </nav>
            <div class="social-links">
                <a href="https://www.instagram.com/" class="social-links"><img src="img/insta.svg" alt="instagram"></a>
                <a href="https://www.facebook.com/" class="social-links"><img src="img/face.svg" alt="facebook"></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>