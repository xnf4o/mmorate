@extends('layouts.site')
@section('title', 'Голосование за сервер ' . $server->name)
@section('content')
    <div class="main-container">
        <div class="contentLogo">
            <a href="{{ route('main') }}">
                <img src="/img/elements/logo.png" alt="">
            </a>
        </div>
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
                    <a href=""><img src="/img/rk/bn468.png" alt=""></a>
                </div>
                <div class="top-server-list">
                    <div class="title-list-server">
                        <h1><i class="ico-title"><img src="/img/icon/i-6.png" alt=""></i></h1><span>Голосование за сервер</span></h1>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="item-top no-bg">
                    <div class="message-golos-final">
                        <div class="content-message-final">
                            Спасибо, ваш голос принят и будет обработан в течении 24-х часов <br>
                            Вы сможете проголосовать заного завтра, в любое удобное для Вас время. <br><br>

                            Но не ранее, чем через  <span class="timer" id="timeleft">10:59:21</span> <br>
                            <a href="{{ route('main') }}">‹ Вернуться на страницу списка серверов</a>
                        </div>
                    </div>
                    <div class="text-info-golos">
                        <p>
                            А так же Вы всегда можете поддержать сервер "{{ $server->name }}" с помощью VIP голосования!
                        </p>
                        <a href="mmorate(Голосование-VIP).html" class="link-vip-golos">
                            <i><img src="/img/icon/i-7.png" alt=""></i> Отдать VIP голос
                        </a>
                    </div>
                </div>
            </div>
            <style>
                .auth-block{
                    display: none;
                }
            </style>
    @endsection