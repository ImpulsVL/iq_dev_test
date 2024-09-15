<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script defer src="../script.js"></script>
    </head>
    <body>
        <div class="header_info">
            <div class="header_logo"><img src="../logo.png"></div>
            <div class="header_logo2">WORLD BANK Publications</div>
            <div class="header_mobile1">8-800-100-5005</div>
            <div class="header_mobile2">+7-(3452)522-000</div>
        </div>
        <div class="headerwrapper">
            <div class="header"><a href="#">Кредитные карты</a></div>
            <div class="header"><a href="index.php">Вклады</a></div>
            <div class="header"><a href="#">Дебетовая карта</a></div>
            <div class="header"><a href="#">Страхование</a></div>
            <div class="header"><a href="#">Друзья</a></div>
            <div class="header"><a href="#">Интернет-банк</a></div>
        </div>
        <div class="main_sectors">
            <div class="sector"><a href="mainpage.php">Главная</a></div>
            <div class="sector">-</div>
            <div class="sector"><a href="index.php"> Вклады</a></div>
            <div class="sector">-</div>
            <div class="sector">Калькулятор</div>
        </div>
        <div class="mainwrapper">
            <div class="calculator">
                <div class="calc_name">Калькулятор</div>
                <div class="calc_row">
                    <div class="calc_label">Дата оформления вклада</div>
                    <input type="date" class="calc_input">
                </div>
                <div class="calc_row">
                    <div class="calc_label">Сумма вклада</div>
                    <input id="input1" type="text" class="calc_input" value="10 000">
                    <div class="slider-wrapper">
                        <div id="deposit-slider" class="slider"></div>
                        <span class="slider-label">1 тыс. руб.</span>
                        <span class="slider-label2">3000000</span>
                    </div>
                </div>
                <div class="calc_row">
                    <div class="calc_label">Срок вклада</div>
                    <select class="calc_input">
                        <option>1 год</option>
                        <option>2 года</option>
                        <option>3 года</option>
                        <option>4 года</option>
                        <option>5 года</option>
                    </select>
                </div>
                <div class="calc_row">
                    <div class="calc_label">Пополнение вклада</div>
                    <div class="calc_input">
                        <input type="radio" name="replenishment" value="no" checked> Нет
                        <input type="radio" name="replenishment" value="yes"> Да
                    </div>
                </div>
                <div class="calc_row">
                    <div class="calc_label">Сумма пополнения вклада</div>
                    <input id="input2" type="text" class="calc_input" value="10 000">
                    <div class="slider-wrapper">
                        <div id="replenishment-slider" class="slider"></div>
                        <span class="slider-label">1 тыс. руб.</span>
                        <span class="slider-label2">3000000</span>
                    </div>
                </div>
                <div class="calc_button_wrapper">
                    <button class="calc_button">Рассчитать</button>
                    <div class="calc_result">Результат: </div>
                </div>
            </div>
        </div>
        <div class="footerwrapper">
            <p class="footer"><a href="#">Кредитные карты</a></p>
            <p class="footer"><a href="index.php">Вклады</a></p>
            <p class="footer"><a href="#">Дебетовая карта</a></p>
            <p class="footer"><a href="#">Страхование</a></p>
            <p class="footer"><a href="#">Друзья</a></p>
            <p class="footer"><a href="#">Интернет-банк</a></p>
        </div>
    </body>
</html>