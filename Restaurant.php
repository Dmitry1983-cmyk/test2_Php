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
            <button class="button button-primary">
                <img class="button-icon" src="img/user.svg" alt="user">
                <span class="button-text">Войти</span>
            </button>
            <button class="button" id="cart-button">
                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                <span class="button-text">Корзина</span>
            </button>
        </div>
    </header>
    <!-- /container -->
</div>
<main class="main">
    <div class="container">
        <section class="restaraunts">
<!--            <div class="section-heading">-->
<!--                <h2 class="section-title"> '.$arr->GetName().'  Menu : </h2>-->
<!--                <div class="card-info">-->
<!--                    <a href="index.php?btn='.$_COOKIE['cookie'].'" style="text-decoration: none"><h3>Вернуться</h3></a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="cards">-->
<?php
include_once "Info.php";
include_once "RenderMini.php";

class FullrenDesc
{
    public $info;


    public function __construct(){}

//тут работает

//    function RenderFullDesc($arr)
//    {
//
//        echo '
//<div class="container">
//    <header class="header">
//        <a href="index.php?btn='.$_COOKIE['cookie'].'" class="logo wow animate__animated animate__rubberBand">
//            <img src="img/logo.svg" alt="Logo"></img>
//        </a>
//        <!-- поле поиска -->
//        <input type="text" class="input input-adress" placeholder="Адрес доставки" />
//        <div class="buttons">
//            <button class="button button-primary">
//                <img class="button-icon" src="img/user.svg" alt="user">
//                <span class="button-text">Войти</span>
//            </button>
//            <button class="button" id="cart-button">
//                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
//                <span class="button-text">Корзина</span>
//            </button>
//        </div>
//    </header>
//    <!-- /container -->
//</div>
//<main class="main">
//    <div class="container">
//<section class="restaraunts">
//<div class="section-heading">
//                <h2 class="section-title">'.$arr->GetName().' Menu : </h2>
//                <div class="card-info">
//                  <!--  <div class="rating">
//                        <img src="img/star.svg" alt="rating">
//                        '.$arr->GetRating().'
//                    </div>
//                    -->
//                    <a href="index.php?btn='.$_COOKIE['cookie'].'" style="text-decoration: none"><h3>Вернуться</h3></a>
//                </div>
//            </div>
//
//            <!-- /.cards -->
//            <div class="cards">
//                <div class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
//                <img src="'. $arr->GetArr().'" alt="image" class="card-omage" />
//                    <div class="card-text">
//                        <div class="card-heading">
//                            <h3 class="card-title card-title-reg">'.$arr->GetName().'</h3>
//                        </div>
//                        <!-- /.card-heading -->
//                        <div class="card-info">
//                            <div class="ingridients">'.$arr->GetDuration().'</div>
//                        </div>
//                        <!-- /.card-info -->
//                        <div class="card-buttons">
//                            <button class="button button-primary">
//                                <span class="button-card-text">В корзину</span>
//                                <img src="img/basket_shop.svg" alt="shpping-cart" class="button-card-image">
//                            </button>
//                        </div>
//                    </div>
//                </div>
//            </div>
//            <!-- /.cards -->
//        </section>
//     </div>
//</main>';
//    }

    //-------------------------
  public function ShowMenu($arr)
    {
        $link = mysqli_connect("localhost", "root","", "restaurant_database");

        $sql = "select RestaurantName,Dish,Img,Cost from Restaurant left join Menu on Restaurant.Id=Menu.RestaurantId 
                where RestaurantName = '".$arr->GetName()."'  ";
        $result = mysqli_query($link, $sql);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        echo '<div class="section-heading">
                <h2 class="section-title"> '.$arr->GetName().'  Menu : </h2>
                <div class="card-info">
                   <a href="index.php?btn='.$_COOKIE['cookie'].'" class="bck"><h3>Вернуться</h3></a> 
                </div>
            </div>

            <div class="cards">';
        foreach ($rows as $row)
        {
            echo'



            <!-- /.cards -->
                
                <div class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <img src="'. $row['Img'] .'" alt="image" class="card-omage" />
                    <div class="card-text">
                        <div class="card-heading">
                            <h3 class="card-title card-title-reg">'. $row['Dish'] .'</h3>
                        </div>
                        <!-- /.card-heading -->
                        <div class="card-info">
                            <div class="ingridients">'. $row['Cost'] .' грн.</div>
                        </div>
                        <!-- /.card-info -->
                        <div class="card-buttons">
                            <button class="button button-primary">
                                <span class="button-card-text">В корзину</span>
                                <img src="img/basket_shop.svg" alt="shpping-cart" class="button-card-image">
                            </button>
                        </div>
                    </div>
                </div>
                
            <!-- /.cards -->
            

';
        }
        echo '</div>';

    }
//--------------------------
}


function ShowAd()
{
    $arr_image_url=[
        new  Info("img/pasiju/pa-si-ju.jpg",
            "Pa-si-ju",
            "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа-Карла",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою-Клянусь",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/pasiju/pa-si-ju.jpg",
            "Pa-si-ju_2",
            "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter_2",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast_2",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист_2",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа-Карла_2",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою-Клянусь_2",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/pasiju/pa-si-ju.jpg",
            "Pa-si-ju_3",
            "50 мин", "4.6", "Заказ от 1000 грн"),

        new  Info("img/reporter/reporter.png",
            "Reporter_3",
            "50 мин", "6.6", "Заказ от 1800 грн"),

        new  Info("img/coast/coast.jpg",
            "Coast_3",
            "60 мин", "7.3", "Заказ от 2500 грн"),

        new  Info("img/artist/artist.jpg",
            "Артист_3",
            "40 мин", "5.3", "Заказ от 1000 грн"),

        new  Info("img/papa/papa.jpg",
            "Папа-Карла_3",
            "50 мин", "6.3", "Заказ от 1500 грн"),

        new  Info("img/mama/mama.jpg",
            "Мамою-Клянусь_3",
            "50 мин", "6.3", "Заказ от 1500 грн")

    ];
    $info='';
    $menu='';
    $ad=new FullrenDesc();
    $admenu=new FullrenDesc();

    if(isset($_GET['id']))
    {
        foreach ($arr_image_url as $key=>$value)
        {
            if($value->GetName()== $_GET['id'])
            {
                $info=new  Info($value->GetArr(),$value->GetName(),$value->GetDuration(),$value->GetRating(),$value->GetOrder());
                $menu=new  Info($value->GetArr(),$value->GetName(),$value->GetDuration(),$value->GetRating(),$value->GetOrder());
            }
        }
        //$ad->RenderFullDesc($info);
        $admenu->ShowMenu($menu);
    }


}


ShowAd();
?>
<!--            </div>-->
            <!-- /.cards -->
        </section>
    </div>
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
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-header">
            <h3 class="modal-title">Корзина</h3>
            <buton class="close">&times;</buton>
        </div>
        <!-- /.modal-header -->
        <div class="modal-body">
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
        </div>
        <!-- /.modal-body -->
        <div class="modal-footer">
            <span class="modal-pricetag">1250 usd</span>
            <div class="footer-buttons">
                <button class="button button-primary">Оформить заказ</button>
                <button class="button">Отмена</button>
            </div>
        </div>
        <!-- /.modal-footer -->
    </div>
</div>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>