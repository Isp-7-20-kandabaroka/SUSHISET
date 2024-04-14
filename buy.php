<?php
session_start(); // Начало сессии
?>
<?php 'php/revome.php'; ?>
<?php 'php/update_quanity.php'; ?>
<?php 'php/check.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СУШИ СТ:КОРЗИНА</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/mh.css">
    <link rel="stylesheet" href="css/Adapt.css">
    <link rel="stylesheet" href="css/korzina.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/product.css">
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
            <a href="main.php">
                <div>Главная</div>
            </a>
            <a href="nabors.php">
                <div>Наборы</div>
            </a>
            <a href="combo.php">
                <div>Комбо сеты</div>
            </a>

            <a href="fish.php">
                <div>Фиш роллы</div>
            </a>
            <a href="numrols.php">
                <div>Цифра роллы</div>
            </a>
            <a href="tools.php">
                <div>Приправы</div>
            </a>
            <a href="dostavka.php">
                <div>Доставка и оплата</div>
            </a>
            <a href="actt.php">
                <div>Акции</div>
            </a>

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
                <div class="tovarname">Ух ты | Набор</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/nabors/Хороший день.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1430 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">Отличный день | Набор</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/nabors/Солнцерук.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1865 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">Солнце | Набор</div>
            </div>
            <div class="box">

                <div class="rectanglemusthavetovar">
                    <div class="tovarmusthave">
                        <img src="img/product/number-rolls/set-shar1.jpg" class="imgmusthavetovar" alt="ух ты">
                        <div class="musthaveprice">1210 Руб.</div>
                    </div>
                </div>
                <div class="tovarname">31 Ролл | Цифра-ролл</div>
            </div>
        </div>
        <div class="buytovars">
            <?php
            try {
                $dsn = 'pgsql:host=localhost;port=5432;dbname=Products;user=postgres;password=';
                $pdo = new PDO($dsn);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sessionId = session_id(); // Получаем ID сессии пользователя

                // Запрос к БД для получения товаров из корзины пользователя
                $stmt = $pdo->prepare("SELECT p.*, c.quantity FROM cart c JOIN products p ON c.product_id = p.id WHERE c.session_id = ?");
                $stmt->execute([$sessionId]);
                $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ($cartItems) {
                    echo "<div class='cart-items'>";
                    foreach ($cartItems as $item) {
                        // Выводим информацию о каждом товаре в корзине
                        echo "<div class='cart-item'>";
                        echo "<img src='" . htmlspecialchars($item['image_url']) . "' alt='" . htmlspecialchars($item['name']) . "' class='cart-item-img'>";
                        echo "<div class='cart-item-details'>";
                        echo "<div class='cart-item-name'>" . htmlspecialchars($item['name']) . "</div>";
                        echo "<div class='cart-item-description'>" . htmlspecialchars($item['description']) . "</div>";
                        echo "<div class='cart-item-quantity-controls'>";
                        echo "<span class='quantity'>" . htmlspecialchars($item['quantity']) . "&nbsp</span>";
                        echo "<button class='quantity-modify decrease' data-product-id='" . $item['id'] . "'>- </button>";
                        echo "<button class='quantity-modify increase' data-product-id='" . $item['id'] . "'>+ </button>";
                        echo "</div>";
                        echo "<div class='cart-item-price'>Цена: " . htmlspecialchars($item['price']) . " руб.</div>";
                        echo "<button class='remove-item' data-product-id='" . $item['id'] . "'>Удалить</button>";
                        echo "</div>"; // cart-item-details
                        echo "</div>"; // cart-item
                    }
                    echo "</div>"; // cart-items
                } else {
                    echo "Ваша корзина пуста.";
                }
            } catch (PDOException $e) {
                die("Ошибка подключения к базе данных: " . $e->getMessage());
            }
            ?>

            <div class="checkout-form">
                <form action="php/check.php" method="post">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="text" name="phone" placeholder="Номер телефона" required>
                    <input type="email" name="email" placeholder="Email для чека" required>
                    <input type="text" id="address" name="address" placeholder="Адрес доставки" required>
                    <div class="pickup">
                <label for="pickup">Самовывоз (Калинина 10)</label>
                <input type="checkbox" id="pickup" name="pickup" onchange="toggleDeliveryFee(this)">
            </div>
                    <input type="text" name="promo" placeholder="Промокод">
                    <button type="submit">Оформить заказ</button>
                </form>
                <?php
$totalPrice = 0;
foreach ($cartItems as $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}
// Добавляем стоимость доставки для начального отображения
$displayTotal = $totalPrice + 150;
?>
<div id='totalPriceDisplay'>Итоговая сумма: <?php echo $displayTotal; ?> руб. (+150 доставка)</div>

                
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
                    <a href="buy.php">
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


    <script>
function toggleDeliveryFee(checkbox) {
    var totalPriceElement = document.getElementById('totalPriceDisplay');
    var totalText = totalPriceElement.innerText;
    
    // Используем регулярное выражение, чтобы извлечь только числовую часть из строки.
    var matches = totalText.match(/(\d+)/); // Ищем первую группу цифр в строке
    if (!matches) {
        console.error("No numbers found in total price string");
        return; // Выход, если цифры не найдены
    }
    var currentTotal = parseInt(matches[0], 10); // Первая найденная группа цифр

    if (checkbox.checked) {
        var newTotal = currentTotal - 150; // Уменьшаем на стоимость доставки
        totalPriceElement.innerText = `Итоговая сумма: ${newTotal} руб.`;
    } else {
        var newTotal = currentTotal + 150; // Возвращаем стоимость доставки
        totalPriceElement.innerText = `Итоговая сумма: ${newTotal} руб. (+150 доставка)`;
    }
}
</script>


    <script src="script/main.js"></script>
    <script src="script/reg.js"></script>
    <script src="script/modalactivate.js"></script>
    <script src="script/chooseitem.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=9323b10d-c040-4923-b655-279b85ca3d7d&lang=ru_RU" type="text/javascript"></script>

</body>

</html>