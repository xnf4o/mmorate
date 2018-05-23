@extends('layout')
@section('title', 'Сервер ' . $server->name)
@section('content')
    <div class="main-container">
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
                        <h1><i class="ico-title"><img src="../img/icon/i-4.png" alt=""></i>Отзывы игроков о сервере <span class="miniText">({{ $server->reviews }} отзывов)</span></h1>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="item-top no-bg">
                    <div class="title-item-top">
                        <a href="{{ route('voteServer',$server->id) }}" class="btn-golos"><i><img src="../img/icon/i-1.png" alt=""></i> Проголосовать</a>
                        <div class="number-top-server goldNumber">
                            {{ $server->id }}
                             {{--TODO: Рейтинг сервера--}}
                        </div>
                        <p class="name-server">{{ $server->name }} <a class="link-server"><i class="lang-server flag-icon flag-icon-{{ $server->country }}"></i> {{ $server->site }}</a></p>
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
                            </span>
                            <span class="rateServ">
                            x1000
                        </span>
                            <span class="rateServ">
                            x1000
                        </span>
                            <span class="rateServ">
                            x1000
                        </span><br>
                           {{ $server->description }}
                        </p>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="block-comment" id="comments">
                    @foreach($comments as $comment)
                        <div class="item-comment">
                            <div class="title-comment">
                                <div class="ava-user-comment">
                                    <img src="{{ Auth::user()->avatar ?? '../img/elements/prof-img.png' }}" width="47px">
                                </div>
                                <div class="info-user-comment">
                                <span class="rate-comment">
                                    <i><img src="../img/icon/i-5.png" alt=""></i> Оценка: {{ ($comment->rating) / 10 }} балла
                                </span>
                                    <p class="name-user">{{ $comment->author }}</p>
                                    <p class="exp-game">Опыт игры: @switch ($comment->experience)
                                        @case (1) Меньше месяца @break
                                        @case (2) 3 месяца @break
                                        @case (3) 6 месяцев @break
                                        @case (4) Больше года @break
                                        @endswitch</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="text-comment">
                                {{ $comment->text }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="form-comment">
                    <h3>Оставить отзыв о сервере</h3>
                    <form action="{{ route('serverAddComment', $server->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="rating" value="0" id="ratingComment">
                        <div class="block-select-comment">
                            <label>Какой у Вас опыт игры?</label>
                            <div class="item-select">
                                <select name="experience">
                                    <option value="1">Меньше месяца</option>
                                    <option value="2">3 месяца</option>
                                    <option value="3">6 месяцев</option>
                                    <option value="4">Больше года</option>
                                </select>
                            </div>
                        </div>
                        <div class="block-collrate-comment">
                            <label>Оцените сервер по шкале от 0 до 10 <span class="coll-comment-rate"><span class="numberRate" id="contentSlider">3,4</span> Баллов</span>
                            </label>
                            <div class="rate-line">
                                <div id="slider" class="line-beg-stavka">
                                    <div class="inside-line-beg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="text-area-comment">
                            <label>Напишите отзыв</label>
                            <textarea class="textarea-style" name="text"></textarea>
                        </div>
                        <button class="send-comment">Отправить отзыв</button>
                    </form>
                </div>
            </div>
@endsection