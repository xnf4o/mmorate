<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/libs.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title') - MMORATE</title>
</head>

<body>
@yield('content')
<footer>
    <div class="content-main">
        <p class="text-info-footer" style="text-align: center;">
            Новые игровые сервера - открывающиеся или только что открытые игровые MMO миры.
            <br> Благодаря огромной популярности, ежедневно открываются множество серверов с различными рейтами (которые влияют на скорость повышения уровня персонажа и добычу игровых предметов) и хрониками, а так же с уникальными модификациями и дополнениями.
            <br>
            <br> Играть на данных серверах вы можете абсолютно бесплатно, так как они носят лишь ознакомительный характер и не являются официальной версией игры.
            <br>
            <br>
            <a href="{{ route('index') }}">© 2018 MmoRate.com</a> - Мониторинг игровых серверов
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
<script type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
{{--http://igorescobar.github.io/jQuery-Mask-Plugin/--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
{{--https://github.com/jquery-validation/jquery-validation--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_ru.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/common.js') }}"></script>
@yield('scripts')
</body>
</html>
