<?php include 'php/korzina.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СУШИ СТ</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/mh.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/Adapt.css">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- САМАЯ ВЕРХУШКА! -->
    <div class="container">
        <div class="upcontent">
            <div class="item">Работа в Суши СТ</div>
            <div class="item">О нас</div>
            <div class="item">Контакты</div>
        </div>

    </div>
    <!-- САМАЯ ВЕРХУШКА! -->
    <div class="sait">

        <!-- НАВИГАЦИЯ -->
        <div class="rectangle">
            <img src="img/ЛОГО.jpg" alt="Логотип" class="logo">

            <div class="rating-block">
                <div class="title">СУШИ СТ <img src="img/Star 1.svg" class="rating-star"> </div>
                <div class="description">Доставка суши и роллов</div>
                <div class="description1">в Челябинске.</div>
            </div>
            <div class="tele2">
                <div class="numimg">
                    <img src="img/telephone (1) 1.svg" alt="telephone" class="tel">
                    <div class="numbertel">+7 (351) 700-70-12</div>
                </div>
                <div class="numberteltext">телефон для заказа</div>
            </div>
            <div class="time">
            <div class="timetext">Вс-Чт 10:00 - 22:00 Пт-Сб 10:00 - 23:00</div>
            </div>
            <div class="Profile">
                <div class="vhod">Войти</div>
            </div>
        </div>

        <div class="slider-container">
            <div class="slider" id="slider">

                <div class="slide active" style="background-image: url('img/slide1.jpg')"></div>
                <div class="slide" style="background-image: url('img/slide2.jpg');"></div>
                <div class="slide" style="background-image: url('img/slide3.jpg');"></div>
            </div>
        </div>
        <div class="nav">
        <div class="logo-mobile"><img src="img/логомобилка.svg" alt="лого"></div>
        <a href="main.php"><div>Главная</div></a>
            <a href="nabors.php"><div>Наборы</div></a>
            <a href="combo.php"><div>Комбо сеты</div></a>
            
            <a href="fish.php"><div>Фиш роллы</div></a>
            <a href="numrols.php"><div>Цифра роллы</div></a>
            <a href="tools.php">
                <div>Приправы</div>
            </a>
            <a href="dostavka.php"><div>Доставка и оплата</div></a>
            <a href="actt.php"><div>Акции</div></a>
            
            <div class="buy" id="goToCart">КОРЗИНА</div>
        </div>
        <div class="musthave">
            <div>Часто заказывают</div>
        </div>
        <div class="musthavetovar">
            <div class="box1">
                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/nabors/ШАП-Ух ты.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1210 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">Ух ты</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/nabors/Хороший день.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1430 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">Отличный день</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/nabors/Солнцерук.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1865 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">Солнце</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/number-rolls/set-shar1.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1210 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">31 Ролл</div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <!-- Содержимое модального окна -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Товар успешно добавлен в корзину!</p>
            </div>
        </div>

        <div class="Tovarzonename">
            <div class="nabors">Комбо сеты</div>
            <div class="tovarzone">
                <?php include 'php/Category-combo-set.php'; ?>
            </div>
        </div>
        <div class="footerline">
            <div class="footer">
                <div class="footerpuncts">
                    <a href="main.php">
                        <div>Политика конфидециальности</div>
                    </a>
                    <a href="nabors.php">
                        <div>Условия обсулживания</div>
                    </a>
                    <a href="main.php">
                        <div>Меню</div>
                    </a>
                    <a href="fish.php">
                        <div>Наверх</div>
                    </a>
                    <div class="imgsoc">
                        <a href="https://vk.com/sushiclassic74"><img src="img/vk 1.svg" alt="vk"></a>
                        <a href="https://t.me/sushi74ok"><img src="img/telegram 1.svg" alt="tg"></a>
                    </div>

                </div>


            </div>

        </div>
        <div class="mobile-nav">
                <a href="buy.php" class="cart-button">Корзина</a>
                <div class="mobile-tame">
                    <div>Вс-Чт 10:00 - 22:00 Пт-Сб 10:00 - 23:00</div>

                </div>

            </div>
        <div class="manual">©2019 Суши СТ, все права защищены</div>

    </div>
        <script src="script/main.js"></script>
    <script src="script/reg.js"></script>
    <script src="script/modalactivate.js"></script>
    <script src="script/chooseitem.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=9323b10d-c040-4923-b655-279b85ca3d7d&lang=ru_RU" type="text/javascript"></script>

</body>

</html>