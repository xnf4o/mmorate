@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="/img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-2">
                <img src="/img/elements/elem-2.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="/img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href="">
                    <img src="/img/rk/bn468.png" alt="">
                </a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <h1>
                        <i class="ico-title">
                            <img src="/img/icon/i-6.png" alt="">
                        </i>Голосование за сервер</span>
                    </h1>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="item-top no-bg">
                <div class="message-golos-final">
                    <div class="content-message-final">
                        Спасибо, ваш голос принят и будет обработан в течении 24-х часов
                        <br> Вы сможете проголосовать заного завтра, в любое удобное для Вас время.
                        <br>
                        <br> Но не ранее, чем через
                        <br>
                        <div class="your-clock"></div>
                        <a href="{{ route('main') }}">‹ Вернуться на страницу списка серверов</a> <br>
                        <a href="{{ route('voteServerVip', $server->id) }}" class="link-vip-golos">
                            <i>
                                <img src="/img/icon/i-7.png" alt="">
                            </i> Отдать VIP голос
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .auth-block {
                display: none;
            }
        </style>
        @endsection
        @section('scripts')
            <script>
                function getSecondsToTomorrow() {
                    var now = new Date();

                    // создать объект из завтрашней даты, без часов-минут-секунд
                    var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);

                    var diff = tomorrow - now; // разница в миллисекундах
                    return Math.round(diff / 1000); // перевести в секунды
                }

                var clock = $('.your-clock').FlipClock({
                    countdown: true,
                    autoStart: false
                });
                clock.setTime(getSecondsToTomorrow());
                clock.setCountdown(true);
                clock.start();
            </script>
@endsection
