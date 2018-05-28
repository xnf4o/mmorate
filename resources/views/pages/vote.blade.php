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
                        <h1><i class="ico-title"><img src="/img/icon/i-6.png" alt=""></i><span>Голосование за сервер</span></h1>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="item-top no-bg">
                    <div class="title-item-golos">
                        <div class="number-top-server goldNumber">
                            1
                        </div>
                        <p class="name-server-golos">{{ $server->name }} <span>{{ number_format($server->rates,0,",",".") }} Голосов получено</span></p>
                    </div>
                    <form action="{{ route('voteServer.post', $server->id) }}" method="post">
                        @csrf
                        <div class="form-group-golos">
                            <label class="title-label-golos">Выберите сервер:</label>
                            <input type="radio" id="rate-1" class="radio-rate" name="1">
                            <label for="rate-1">Midltow x100</label>
                            <input type="radio" id="rate-2" class="radio-rate" name="1">
                            <label for="rate-2">Midltow x10</label>
                            <input type="radio" id="rate-3" class="radio-rate" name="1">
                            <label for="rate-3">Midltow x50</label>
                        </div>
                        <div class="form-group-golos">
                            <label class="title-label-golos">Укажите ник своего персоанажа:</label>
                            <input type="text" class="text-ing-golos" name="nickname">
                        </div>
                        <div class="capcha-golos">
                            <img src="/img/bg/capha.png" alt="">
                        </div>
                        <button class="btn-golos-form" type="submit">Голосовать за сервер</button>
                    </form>
                    <div class="text-info-golos">
                        <p>
                            Для голосования в рейтинге действует правило: любой пользователь может проголосовать только один раз
                            в календарные сутки. <br><br>

                            Это означает, что если вы уже голосовали сегодня, то следующий голос может быть принят в 00:01
                        </p>
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
                    </div>

    @endsection