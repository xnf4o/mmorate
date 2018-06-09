<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/libs.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>MMORATE - Главная</title>
</head>

<body>
<header class="header-promo">
    <div class="main-promo">
        <div class="logo-promo">
            <a href=""><img src="img/elements/logo.png" alt=""></a>
        </div>
        <div class="game-list-main">
            <div class="itemGamePromo">
                <a class="la2-p" href="{{ route('lineage') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g2-p" href="{{ route('aion') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g3-p" href="{{ route('jade') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g4-p" href="{{ route('wow') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g5-p" href="{{ route('rf') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g6-p" href="{{ route('perfect') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g7-p" href="{{ route('mu') }}"></a>
            </div>
            <div class="itemGamePromo">
                <a class="g8-p" href="{{ route('other') }}"></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
<div class="block1-promo">
    <div class="main-promo block-promo-2">
        <div class="imgBlock-2">
            <img src="img/promo/img-b2.png" alt="">
        </div>
        <h3>
            Рейтинг MMORPG серверов <br>
            <span>Только самые качественные и проверенные сервера</span>
        </h3>
        <p>
            Учитывая ключевые сценарии поведения, постоянный количественный рост и сфера
            <br> нашей активности играет важную роль в формировании кластеризации усилий.
            <br>
            <br> Задача организации, в особенности же глубокий уровень погружения предоставляет
            <br> широкиевозможности для форм воздействия.
            <br>
            <br> Разнообразный и богатый опыт говорит нам, что начало повседневной работы по
            <br> формированию позиции выявляет срочную потребность кластеризации усилий.
            <br> Реализация намеченных плановых заданий однозначно фиксирует необходимость.
            <br>
            <br> В частности, консультация с широким активом не оставляет шанса для экспериментов,
            <br> поражающих по своей масштабности и грандиозности.
            <br>
            <br> Господа, глубокий уровень
            <br> погружения обеспечивает широкому кругу (специалистов) участие в формировании
            <br> инновационных методов управления процессами.
        </p>
        @if(!Auth::check()) <a href="{{ route('register') }}" class="createPromoAcc">Создать новый аккаунт</a> @endif
    </div>
</div>
<div class="block-3-promo">
    <div class="main-promo block-promo-3">
        <h3>Богатый выбор игровых миров <br>
            <span>Рейтинг из более, чем 20 mmorpg игр</span>
        </h3>
        <p>
            В целом, конечно, новая модель организационной деятельности играет
            <br> определяющее значение для позиций, занимаемых участниками в
            <br> отношении поставленных задач.
            <br>
            <br> Постоянное информационно-пропагандистское
            <br> обеспечение нашей деятельности создает
            <br> предпосылки для модели развития.
            <br>
            <br> Мы вынуждены отталкиваться от того,
            <br> что новая модель организационной
            <br> деятельности влечет за собой процесс
            <br> внедрения и модернизации
            <br> поставленных обществом задач.
        </p>
    </div>
</div>
<div class="block4-promo">
    <div class="main-promo block-promo-4">
        <div class="imgBlock-2">
            <img src="img/promo/img-b4.png" alt="">
        </div>
        <h3>Добавление сервера в 2 шага<br>
            <span>Скорость и удобство при добавлении вашего проекта</span>
        </h3>
        <p>
            В своем стремлении улучшить пользовательский опыт мы упускаем, что ключевые
            <br> особенности структуры проекта, превозмогая сложившуюся непростую экономическую
            <br> ситуацию, своевременно верифицированы.
            <br>
            <br> Сложно сказать, почему акционеры крупнейших компаний лишь добавляют
            <br> фракционных разногласий и указаны как претенденты
            <br> на роль ключевых факторов.
        </p>
        @if(Auth::check())
        <a href="{{ route('addServer') }}" class="createPromoAcc">Добавить свой сервер</a>
        @else
        <a href="{{ route('register') }}" class="createPromoAcc">Зарегистрироваться</a>
        @endif
        <div class="clear"></div>
    </div>
</div>
<footer class="bg-promo-footer">
    <div class="block5-promo">
        <div class="main-promo block-promo-5">
            <div class="imgBlock-2">
                <img src="img/promo/img-b5.png" alt="">
            </div>
            <h3>Система отзывов о серверах <br>
                <span>Честные отзывы от реальных игроков</span></h3>

            <p>
                Высокий уровень вовлечения представителей целевой аудитории <br>
                является четким доказательством простого факта: курс на<br>
                социально-ориентированный национальный проект влечет<br><br>

                За собой процесс внедрения и модернизации стандартных<br>
                подходов.<br><br>
                Следует отметить, что существующая теория требует анализа благоприятных перспектив. Не следует, однако, забывать, что экономическая
                повестка сегодняшнего дня обеспечивает широкому кругу (специалистов) участие в формировании экономической целесообразности
                принимаемых решений.

            </p>
        </div>
    </div>
    <div class="content-main">
        <p class="text-info-footer">
            Новые игровые сервера - открывающиеся или только что открытые игровые MMO миры.
            <br> Благодаря огромной популярности, ежедневно открываются множество серверов с различными рейтами (которые влияют на скорость повышения уровня персонажа и добычу игровых предметов) и хрониками, а так же с уникальными модификациями и дополнениями.
            <br>
            <br> Играть на данных серверах вы можете абсолютно бесплатно, так как они носят лишь ознакомительный характер и не являются официальной версией игры.
            <br>
            <br>
            <a href="">© 2018 Topmmo.com</a> - Мониторинг игровых серверов
        </p>
        <div class="social-footer">
            <a href="" class="item-social vk-ico"></a>
            <a href="" class="item-social fb-ico"></a>
            <a href="" class="item-social twit-ico"></a>
            <a href="" class="item-social mail-ico"></a>
        </div>
        <ul class="footer-menu">
            <li>
                <a href="{{ route('about') }}">О проекте</a>
            </li>
            <li>
                <a href="{{ route('rules') }}">Правила</a>
            </li>
            <li>
                <a href="{{ route('contacts') }}">Контакты</a>
            </li>
            <li>
                <a href="{{ route('support') }}">Техническая поддержка</a>
            </li>
            <li>
                <a href="{{ route('faq') }}">Вопросы и ответы</a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</footer>
<script type="text/javascript" src="js/libs.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</body>

</html>