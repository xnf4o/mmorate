@extends('layouts.site')
@section('title', 'Главная')
@section('content')
    @if(isset($game) && $game != 'lineage')
        @if($game == 'perfect')
            <div class="pw-container">
            @endif
                <div class="{{ $game }}-container">
        @else
    <div class="main-container">
        @endif
    <div class="contentLogo">
        <a href="{{ route('main') }}">
            <img src="../img/elements/logo.png" alt="">
        </a>
    </div>
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="../img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-2">
                <img src="../img/elements/elem-2.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="../img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href=""><img src="../img/rk/bn468.png" alt=""></a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <div class="filterTitleMain">
                        <label>Сортировать по:</label>
                        <select>
                            <option>Рейтингу</option>
                            <option>Рейтингу</option>
                            <option>Рейтингу</option>
                        </select>
                    </div>
                    @if(isset($game)) <h1><i class="ico-title"><img src="../img/elements/{{ $game }}.png" alt="{{ $game }}"></i>Рейтинг игровых серверов {{ $gameTitle }}</h1> @else
                                        <h1><i class="ico-title"></i>Рейтинг всех игровых серверов</h1> @endif
                    <div class="clear"></div>
                </div>
            </div>
            {{--<div class="item-top no-bg">--}}
                {{--<div class="title-item-top">--}}
                    {{--<a href="mmorate(Голосование).html" class="btn-golos"><i><img src="../img/icon/i-1.png" alt=""></i> Проголосовать</a>--}}
                    {{--<div class="number-top-server goldNumber">--}}
                        {{--1--}}
                    {{--</div>--}}
                    {{--<p class="name-server"><a class="link-full-info" href="mmorate(Страница сервера).html">Quanteler x50 - Start 28.03</a> <a class="link-server"><i class="lang-server"><img src="../img/elements/ru.png"></i> www.quanteler.ru</a></p>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
                {{--<div class="info-item-server">--}}
                    {{--<div class="rating-block">--}}
                        {{--<div class="coll-rating">--}}
                            {{--8<span class="litle-text">,2</span>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--5.487--}}
                            {{--<br> Голосов--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<p class="text-info-server">--}}
                            {{--<span class="infoText-right">--}}
							{{--<span class="segment-info">Тип: <span class="rightText">Комплекс</span></span>--}}
                            {{--<span class="segment-info">Хроники: <span class="rightText colorOrange">Itnerlude</span></span>--}}
                            {{--<span class="segment-info">Онлайн: <span class="rightText">2456</span></span>--}}
                            {{--<span class="segment-info">Макс.онлайн: <span class="rightText">89745</span></span>--}}
                            {{--</span>--}}
                        {{--<span class="rateServ">--}}
							{{--x1000--}}
						{{--</span>--}}
                        {{--<span class="rateServ">--}}
							{{--x1000--}}
						{{--</span>--}}
                        {{--<span class="rateServ">--}}
							{{--x1000--}}
						{{--</span>--}}
                        {{--<br> В мире Quanteler тебя ждёт море приключений и жизнь, полная ярких красок прекрасного мира!--}}
                        {{--<br>--}}
                        {{--<br> Сбалансирование классы! Общая стартовая локация!--}}
                        {{--<br> Ежедневное квесты за которые вы получите валюту,--}}
                        {{--<br> его можно обменять на хонор! Вас ждут потрясающие ивенты, бурные поединки и соревнов ания, увлекательные конкурсы от нашей администрации и уникальные призы за них.--}}
                        {{--<br>--}}
                        {{--<spans class="linkStat-and-comment">--}}
                            {{--<a href="">--}}
                                {{--<i><img src="../img/icon/i-2.png"></i> Статистика--}}
                            {{--</a>--}}
                            {{--<a href="">--}}
                                {{--<i><img src="../img/icon/i-3.png"></i> 2564 Комментариев--}}
                            {{--</a>--}}
                        {{--</span>--}}
                    {{--</p>--}}
                    {{--<div class="clear"></div>--}}
                {{--</div>--}}
                {{--<div class="segment-rek-item">--}}
                    {{--<div class="bg-ramka-item"></div>--}}
                    {{--<a href=""><img src="../img/rk/bn700.png" alt=""></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            @foreach($allServers as $i => $server)
                @php($i++)
                <div class="item-top @if($i == 1)no-bg @endif">
                    <div class="title-item-top">
                        {{--<a href="{{ route('serverVote', $server->id) }}" class="btn-golos"><i><img src="../img/icon/i-1.png" alt=""></i> Проголосовать</a>--}}
                        <a href="{{ route('voteServer',$server->id) }}" class="btn-golos"><i><img src="../img/icon/i-1.png" alt=""></i> Проголосовать</a>
                        <div class="number-top-server silverNumber">
                            {{ $i }}
                        </div>
                        <p class="name-server"><a class="link-full-info" href="{{ route('serverPage', $server->id) }}">{{ $server->name }}</a> <a class="link-server" href="{{ $server->site }}" noindex><i class="lang-server flag-icon flag-icon-{{ $server->country }}"></i> {{ $server->site }}</a></p>
                        <div class="clear"></div>
                    </div>
                    <div class="info-item-server">
                        <div class="rating-block">
                            <div class="coll-rating">
                                {{ substr($server->rating, 0, -1) }}<span class="litle-text">,{{ substr($server->rating, -1) }}</span>
                            </div>
                            <p>
                                {{ number_format($server->rates,0,",",".") }}
                                <br> Голосов
                            </p>
                        </div>
                        <p class="text-info-server">
                            <span class="infoText-right">
                            <span class="segment-info">Тип: <span class="rightText">Комплекс</span></span>
                            <span class="segment-info">Хроники: <span class="rightText colorOrange">Itnerlude</span></span>
                            <span class="segment-info">Онлайн: <span class="rightText">{{ $server->online }}</span></span>
                            <span class="segment-info">Макс.онлайн: <span class="rightText">{{ $server->max_online }}</span></span>
                            <span class="segment-info">Рейты: <span class="rightText">x50/x100</span></span>
                            </span>

                            <span class="info-text-main-top">
                             {{ $server->description }}
                           </span>

                            <span class="linkStat-and-comment">
                                <a href="">
                                <i><img src="../img/icon/i-2.png"></i> Статистика
                            </a>
                                <a href="{{ route('serverPage', $server->id) }}#comments">
                                <i><img src="../img/icon/i-3.png"></i> {{ $server->reviews }} Комментариев
                            </a>
                            </span>
                        </p>
                        <div class="clear"></div>
                    </div>
                    @if($i == 1)
                        <div class="segment-rek-item">
                            <div class="bg-ramka-item"></div>
                            <a href=""><img src="../img/rk/bn700.png" alt=""></a>
                        </div>
                        @endif
                </div>
                @endforeach


            {{ $allServers->links() }}
        </div>
@endsection