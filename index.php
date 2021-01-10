<?php
session_start();
?>
<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Delivery Food Dnepr -доставка еды на дом</title>
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
            <?php
            if(isset($_SESSION["session_username"]))
            {
                echo '<p>Здравствуй ' .$_SESSION['session_username'].'</p>';
            echo '<p><a class="acc-out-a" href="logout.php">Выйти</a></p>';
            }else{
               echo '<span class="user_name">Здравствуй Пользователь</span>';
            }
            ?>
            <!----------------------------------------------------------------->
            <!----------------------------------------------------------------->
            <div class="buttons">
                <!--------------------------Modal------------------------------------------>
                <!--------------------------Modal------------------------------------------>
 <form method="post" action="index.php">
                <div class="main_div">
                    <input type="checkbox" id="callback">
                    <?php
                    if(isset($_SESSION["session_username"]))
                    {
                        echo '
                        <label id="lab_btn" for="callback" style="display: none">
                        <img class="button-icon" src="img/user.svg" alt="user">Войти
                    </label>';
                    }else{
                        echo '
                        <label id="lab_btn" for="callback">
                        <img class="button-icon" src="img/user.svg" alt="user">Войти
                    </label>';
                    }
                    ?>

                    <div action="" class="popup">
                        <span>Введите данные</span>
                        <input type="text" name="login" placeholder="Логин">
                        <input type="password" name="psw" placeholder="Пароль">
                        <input class="submit" name="enter" type="submit" value="Войти">
                        <input class="reg" name="register" type="submit" value="Регистрация">
                        <label class="close_modal" for="callback">+</label>
                    </div>
                </div>
</form>
<?php
include_once 'Bucket.php';
$con = mysqli_connect("localhost", "root", "", "DeliveryFoodDnepr")  or die("Ошибка " . mysqli_error($con));

if(isset($_POST['register']))
{
    header('Location: register.php');
}
if(isset($_POST['enter']))
{
    if(!empty($_POST['login']) && !empty($_POST['psw']))
    {
        $login=htmlspecialchars($_POST['login']);
        $password=htmlspecialchars($_POST['psw']);
        $query =mysqli_query($con,"select * from DataUser left join LogPasUser on DataUser.PassIdUser = LogPasUser.Id
                                        WHERE UserNickname='".$login."' AND HeshPas='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbusername=$row['UserNickname'];
                $dbpassword=$row['HeshPas'];
            }
            if($login == $dbusername && $password == $dbpassword)
            {
                $_SESSION['session_username']=$login;
                header("Location: intropage.php");
            }
        } else {

            echo  "Invalid username or password!";
        }

    }
}
?>
                <!--------------------------Modal------------------------------------------>

                <!--------------------------Modal------------------------------------------>
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

                <form method="post">
                <div class="section-heading">
                    <input  type="submit" name="submit" style="width: 100px; height: 42px;border-radius: 2px;border: 1px solid #D9D9D9" class="sub" value="Поиск">
                    <input type="search" name="search_text" class="input input-search" placeholder="Поиск блюд и ресторанов">
                </div>
                </form>

                <div class="cards">

                    <?php
                    include_once 'RestaurantController.php';
                    include_once 'RestaurantView.php';

                    if(empty($_POST['search_text']))
                    {
                    $res=new RestaurantController();
                    $data=new RestaurantView($res);
                    $data->getRestaurant();
                    }
                    else
                    {
                        $res=new RestaurantController();
                        $data=new RestaurantView($res);
                        $data->searchDishRestaurant();
                    }
                    ?>
                </div>
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

<!------------------------------------------------------->
<!-- modal -->
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
<!------------------------------------------------------->

<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
<script src="js/main.js"></script>
</body>
</html>
