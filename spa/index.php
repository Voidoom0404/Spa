<?php
session_start();
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Spa Salon</title>

    <script src="libs/gsap/gsap.min.js" defer></script>
    <script src="libs/gsap/ScrollTrigger.min.js" defer></script>
    <script src="libs/gsap/ScrollSmoother.min.js" defer></script>

    <link rel="stylesheet" href="css/main.css">
    <script src="js/app.js" defer></script>

</head>

<body>

    <div class="wrapper">
        <div class="content">

            <header class="hero-section">
                <img data-speed="6" class="hero" src="img/pngegg.jpg" alt="hero">
                

                <div class="user-login">
                    <?php
                    if (isset($_SESSION['authorized'])) {
                        echo '<div class="login">
                <a class="login_text" href="#">' . getCurrentUser() . '</a>
                <a class="log_out" href="logout.php">Выйти</a>
                </div>';
                    } else {
                        echo '<div class="login">
                <a class="sign_in" href="login.php">Войти</a>
             </div>';
                    }
                    ?>
                </div>




                <div class="container">
                    <div data-speed=".75" class="main-header">
                        <h1 class="main-title"> Top spa salon</h1>
                    </div>
                </div>


            </header>

            <div class="portfolio">

                <div class="container">

                    <div class="user-info">
                        <?php
                        if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
                            echo '<h2 class = "introduction_user">Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
                            if ($_SESSION['checkDayBirth'] > 0) {
                                echo '
                <div class = "introduction_day_brth">
                <p>До вашего дня рождения осталось:' . ' ' . $_SESSION['checkDayBirth'] . ' ' . 'дней (-ень)</p>
                </div>';
                            } else if ($_SESSION['checkDayBirth'] === 0) {
                                echo '
                <div class = "introduction_day_brth">
                <p> Поздравляем Вас с Днем Рождения! В честь этого мы подготовили для вас специальную акцию!</p>
                </div>';
                            }
                        }
                        ;
                        ?>
                    </div>

                    <div class="gallery">
                        
                        <div data-speed=".9" class="gallery__left">

                            <img class="gallery__item" src="img/1.jpg" alt="alt">
                            <img class="gallery__item" src="img/2.jpg" alt="alt">

                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">• Спа-процедуры с горячими камнями<br>• Косметология<br>•
                                    Более 10 различных техник массажа</h2>
                                <p class="text-block__p">Вы расслабляетесь, обновляетесь и омолаживаетесь, чтобы
                                    продолжать свою обычную деятельность без психологических или физических нарушений.
                                </p>
                            </div>

                            <img class="gallery__item" src="img/3.jpg" alt="alt">


                        </div>
                        
                        <div data-speed="1.1" class="gallery__right">

                            <div class="text-block gallery__item">
                                <h2 class="text-block__h">• Спа-программы для двоих<br>• Персональные спа-программы<br>•
                                    Комплексы спа-программ</h2>
                                <p class="text-block__p">Когда хочется провести время с подружками в расслабляющей
                                    обстановке, приходите к нам. Вас ждет часовой массаж, на ваш выбор расслабляющий или
                                    общий. А чтобы вам стало еще уютней, мы предлагаем чаепитие.</p>
                            </div>

                            <img class="gallery__item" src="img/4.jpeg" alt="alt">
                            <img class="gallery__item" src="img/5.jpeg" alt="alt">
                            <img class="gallery__item" src="img/6.jpg" alt="alt">

                        </div>



                    </div>

                    <section class="spa_action">
                        <div class="action_container">
                            <div class="actions">
                                <h2 class="action_title">Акции</h2>
                                <div class="action_card">
                                    <div class="action_card_content">
                                        <h2 class="action_card_title">Для новых посетителей</h2>
                                        <div class="action_card_text">
                                            <p>Будь первым!
                                                Скидка 30% для новых гостей на спа-процедуры.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="action_card_img">
                                        <img src="img\30.jpg" alt="alt" srcset="">
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['authorized']) && $_SESSION['checkDayBirth'] === 0) {
                                    echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Специальная скидка в честь Вашего Дня Рождения!</h2>
                                    <div class="action_card_text">
                                        <p>
                                        Скидка 50% на все услуги нашего спа-салона! </p>
                                        <br>
                                        <p>
                                        Насладитесь приятными ощущениями и проведите незабываемый отдых в нашем спа-салоне.
                                        Будем рады Вас видеть!
                                        </p>
                                    </div>
                                </div>
                            <div class="action_card_img">
                                <img src="img/50.jpg" alt="" srcset="">
                            </div>
                        </div>';
                                } else {
                                    echo ' 
                        <div class="action_card">
                            <div class="action_card_content">
                                <h2 class="action_card_title">Горячии будни!</h2>
                                    <div class="action_card_text">
                                        <p>
                                        Скидки  20% с понедельника по пятницу!
                                        Насладитесь приятными ощущениями и зарядитесь энергией для новых свершений.
                                        </p>
                                    </div>
                                </div>
                            <div class="action_card_img">
                                <img src="img/20.jpg" alt="" srcset="">
                            </div>
                        </div>';
                                } ?>
                            </div>
                        </div>
                    </section>
                    <footer>

                        <ul class="menu-contacts">
                            <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo/gps.png"
                                        alt=""> <span>Адрес: Россия, г.Ростов-на-Дону.</span> </a></li>
                            <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo/call.png"
                                        alt=""> Телефон: +7-999-999-99-99</a></li>
                            <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo/mail.png"
                                        alt="">Почта: top.spa_salon@gmail.ru</a></li>
                            <li class="list-items"><a class="menu-contacts-items" href="#"><img src="Logo/instagram.png"
                                        alt="">Instagram: @top.spa_salon </a></li>
                            <li class="list-items"><a class="menu-contacts-items" href="#"><img
                                        src="Logo/openingHours.png" alt="">Часы работы: ежедневно с 8:00 до 20:00</a>
                            </li>
                        </ul>

                    </footer>

                </div>
            </div>
        </div>
    </div>
</body>

</html>