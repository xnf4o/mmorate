@extends('layout')
@section('title', 'Баннера и кнопки')
@section('content')
    <div class="news-container">
        <div class="contentLogoNews">
            <a href="{{ route('main') }}">
                <img src="../img/elements/logo.png" alt="">
            </a>
        </div>
        <div class="style-bg-content">
            <div class="content-bg-lk">
                <div class="element-desing-1">
                    <img src="../img/elements/elem-1.png" alt="">
                </div>
                <div class="element-desing-3">
                    <img src="../img/elements/elem-3.png" alt="">
                </div>
            </div>
            <div class="contentLeft">
                <div class="title-lk">
                    <h3><i><img src="../img/icon/l-1.png" alt=""></i> Кабинет администратора</h3>
                </div>
                <div class="top-server-list">
                    <div class="title-list-lk">
                        <h1><i class="ico-title"><img src="../img/icon/l-8.png" alt=""></i>Баннеры и кнопки</span></h1>
                        <div class="clear"></div>
                    </div>
                    <div class="content-lk-block">
                        <div class="material-block">
                            <p>
                                При нажатии на данный баннер, пользователя перенесет на страницу голосования за ваш проект.
                                <br> Выберите понравившейся баннер и разместите его код у себя на странице.
                                <br> Угловые баннеры следует размещать после тега <b>‹/body›</b>
                            </p>
                            <div class="gameVibor">
                                <h3>Выберите профиль для получения баннера:</h3>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                                <div class="itemProfil_bn">
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                    <label for="check-1">World Of Warcraft</label>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="item-top ">
                        <div class="itemImgBn">
                            <div class="imgBnBlock">
                                <img src="../img/elements/bn1.png" alt="">
                            </div>
                            <div class="codeImg">
                                &lt;a href=&quot;http://q-top.ru/vote1405&quot; target=&quot;_blank&quot; style=&quot;position:
                                fixed; bottom: 0; left: 0;&quot;&gt;&lt;img src=&quot;http://q-top.ru/img/banners/pw_l.
                                png&quot; border=&quot;0&quot; title=&quot;Рейтинг Online Игр Q-top.ru&quot; alt=&quot;Рейтинг
                                Online Игр Q-top.ru&quot;&gt;&lt;/a&gt;
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="itemImgBn">
                            <div class="imgBnBlock">
                                <img src="../img/elements/bn1.png" alt="">
                            </div>
                            <div class="codeImg">
                                &lt;a href=&quot;http://q-top.ru/vote1405&quot; target=&quot;_blank&quot; style=&quot;position:
                                fixed; bottom: 0; left: 0;&quot;&gt;&lt;img src=&quot;http://q-top.ru/img/banners/pw_l.
                                png&quot; border=&quot;0&quot; title=&quot;Рейтинг Online Игр Q-top.ru&quot; alt=&quot;Рейтинг
                                Online Игр Q-top.ru&quot;&gt;&lt;/a&gt;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection