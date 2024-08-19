<?php
$sitename = "GhostStudio";
$sitelore = "Це офіційний сайт студії GhostStudio! Тут ви можете знайти товари для ваших серверів майнкрафт!";

$prices = array(3000, 1000);
$productsname = array("Копія - ReallyWorld", "FunTime");
$productslore = array("Купивщи цей товар ви отримуєте<br>100% копію проекту ReallyWorld.<br>При покупці ви отраєте: Проксі серверу, лоббі, гріферский режим,<br>анархічний режим, працююча копія сайту та всі самописні плагіни.<br>Щоб замовити натисніть кнопку знизу!", "");
?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($sitename, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Main Content -->

    <div class="main-content">

        <!-- Header -->

        <header class="site-header">
            <h1 class="site-header-name"><?php echo htmlspecialchars($sitename, ENT_QUOTES, 'UTF-8'); ?></h1>
            <a href="#about-us" class="site-header-first">О нашій студії</a>
            <a href="#portfolio" class="site-header-content">Портфоліо</a>
            <a href="#products" class="site-header-content">Товари</a>
            <a href="#studio-team" class="site-header-content">Команда студії</a>
        </header>

        <!-- Site Lore -->

        <div class="global-lore">
            <h1 class="site-name"><?php echo htmlspecialchars($sitename, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="site-lore"><?php echo htmlspecialchars($sitelore, ENT_QUOTES, 'UTF-8'); ?></p>
            <h3 class="go-products">Натисніть, щоб перейти до товарів</h3>
            <a href="#products" class="circle">
                <div class="chevron"></div>
            </a>
        </div>

        <!-- Products -->

        <div class="products">
            <section id="products">

                <!-- ReallyWorld -->

                <div class="product">
                    <h2 class="product-name"><?php echo $productsname[0] ?></h2>
                    <p class="product-lore"><?php echo $productslore[0] ?></p>
                    <h3 class="product-price">Ціна товару: <span
                            class="product-price-amount"><?php echo $prices[0] ?>₴</span></h3>
                    <div class="product-buy">
                        <button class="product-buy-button"><span
                                class="product-buy-button-text">Замовити</span></button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>