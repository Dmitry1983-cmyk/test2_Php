<?php
session_start();
?>
<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Delivery Food -доставка еды на дом</title>
    <link rel="stylesheet" href="https://fonts.google.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" />
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
<!------------------------------------------------------------->
            <?php
            if(isset($_SESSION["session_username"]))
            {
                echo '
            <button class="button" id="cart-button">
                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                <span class="button-text">Корзина</span>
            </button>';
            }else{
                echo '
            <button class="button" id="cart-button" style="display: none">
                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                <span class="button-text">Корзина</span>
            </button>';
            }
            ?>
<!-------------------------------------------------------------->

        </div>
    </header>
    <!-- /container -->
</div>
<main class="main"><form method="post">
    <div class="container">
        <section class="restaraunts">
            <div class="cards">
<?php
include_once 'Bucket.php';
include_once 'RestaurantController.php';
include_once 'RestaurantView.php';
$res=new RestaurantController();
$data=new RestaurantView($res);
$data->getRestaurantMenu();
//$data->getDishDiscription();
?>
            </div>
            <!-- /.cards -->
        </section>
    </div></form>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <a href="index.php" class="logo wow animate__animated animate__rubberBand">
                <img src="img/logo.svg" alt="Logo"></img>
            </a>
            <nav class="footer-nav">
                <a href="#" class="footer-link">Ресторанам</a>
                <a href="#" class="footer-link">Курьерам</a>
                <a href="#" class="footer-link">Пресс-центр</a>
                <a href="#" class="footer-link">Контакты</a>
            </nav>
            <div class="social-links">
                <a href="#" class="social-links"><img src="img/insta.svg" alt="instagram"></a>
                <a href="#" class="social-links"><img src="img/face.svg" alt="facebook"></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- modal -->
<form method="post" action="index.php">
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-header">
            <h3 class="modal-title">Корзина</h3>
            <buton class="close">&times;</buton>
        </div>
        <!-- /.modal-header -->
        <div class="modal-body">
            <?php getBasketUser(); ?>
        </div>
        <!-- /.modal-body -->

        <div class="modal-footer">
            <?php totalSum();?>
        </div>
        <!-- /.modal-footer -->
    </div>
</div>
</form>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
