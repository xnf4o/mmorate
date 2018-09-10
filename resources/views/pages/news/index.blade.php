@extends('layouts.site')
@section('title', 'Новости')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="img/elements/elem-1.png" alt="">
            </div>

            <div class="element-desing-3">
                <img src="img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href=""><img src="img/rk/bn468.png" alt=""></a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <h1><i class="ico-title"><img src="img/icon/i-10.png" alt=""></i>Последнии новости и обновления</h1>
                    <div class="clear"></div>
                </div>
            </div>
            {{--<div class="item-top no-bg">--}}
                {{--<div class="title-item-top">--}}
                    {{--<a href="mmorate(Новости-Внутренняя).html" class="btn-golos">Читать полностью</a>--}}
                    {{--<div class="icon-news-title">--}}

                    {{--</div>--}}
                    {{--<p class="name-server">Понижение стоимости VIP аккаунта <span class="link-server"><i class="lang-server"><img src="img/icon/i-11.png"></i> 25.02.2018</span></p>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
                {{--<div class="content-news-mini">--}}
                    {{--<p>--}}
                            {{--<span class="img-news">--}}
                                {{--<img src="img/elements/news-img.png" alt="">--}}
                            {{--</span>--}}
                        {{--Косметически переработана страница голосования, теперь указывается место--}}
                        {{--занимаемое проектом в топе, а также скрывается выбор игрового сервера,--}}
                        {{--если он один <b>(если больше одного, то показывается)</b>. <br><br>--}}

                        {{--Изменена каптча от Google, считается более надежной, оптимизированной--}}
                        {{--под мобильные устройства и меньше восприимчивой всякого рода ошибкам. <br><br>--}}
                        {{--Подключена возможность оплаты профиля, для администраторов игровых серверов, через систему Interkassa.--}}
                        {{--Interkassa теперь поддерживает <b>Visa/Mastercard</b>, Liqpay и Приват 24 (планируется WebMoney и Яндекс.Деньги).--}}
                        {{--Вернули раздел Jade Dynasty. <br><br>--}}

                        {{--Комментируем ошибку при авторизации через vk: данная проблема нами решается, зависит от скорости--}}
                        {{--ответа тех. поддержки vk.--}}
                    {{--</p>--}}
                {{--</div>--}}

            {{--</div>--}}
        </div>
@endsection