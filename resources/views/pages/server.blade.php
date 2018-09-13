@extends('layouts.site')
@section('content')
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
                    <h1><i class="ico-title"><img src="../img/icon/i-4.png" alt=""></i>Отзывы игроков о сервере
                        <span class="miniText">({{ $server->reviews }} отзывов)</span></h1>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="item-top no-bg">
                <div class="title-item-top">
                    <a href="{{ route('voteServer', $server->link ?? $server->id) }}" class="btn-golos"><i><img
                                    src="../img/icon/i-1.png" alt=""></i> Проголосовать</a>
                    <div class="number-top-server goldNumber">
                        {{ $server->id }}
                    </div>
                    <p class="name-server">{{ $server->name }} <a class="link-server"><i
                                    class="lang-server flag-icon flag-icon-{{ $server->country }}"></i> {{ $server->site }}
                        </a></p>
                    <div class="clear"></div>
                </div>
                <div class="info-item-server">
                    <div class="rating-block">
                        @if($server->rating != 0)
                            <div class="coll-rating">
                                {{ substr($server->rating, 0, -1) }}
                                <span class="litle-text">,{{ substr($server->rating, -1) }}</span>
                            </div>
                        @else
                            <div class="coll-rating">0<span class="litle-text">,0</span></div>
                        @endif
                        <p>
                            {{ number_format($server->rates,0,",",".") }}
                            <br> Голосов
                        </p>
                    </div>
                    <p class="text-info-server">
                        <span class="infoText-right">
                        <span class="segment-info">Тип: <span class="rightText">{{ $server->type }}</span></span>
                            {{--@if($server->online != 0)--}}
                            <span class="segment-info">Онлайн: <span
                                        class="rightText">{{ $server->online }} +</span></span>
                            {{--@endif--}}
                            <span class="segment-info">Переходы: <span
                                        class="rightText">{{ $server->views }}</span></span>
                            <span class="segment-info">Версия: <span
                                        class="rightText">{{ $server->chronicles }}</span></span>
                        </span>
                        @if(isset($worlds))
                            @foreach($worlds as $world)
                                <span class="rateServ hint--right hint--large hint--bounce"
                                      aria-label="{{ $world->description }}">
                                x{{ $world->rate }}
                            </span>
                            @endforeach
                        @endif
                        <br>
                        {!! $description !!}
                    </p>
                    <div class="clear"></div>
                    @if(\MMORATE\Privilege::where('user_id', $server->user_id)->where('action', \MMORATE\Privilege::PRIVILEGE_BANNER)->where('status', '1')->first())
                        <div class="segment-rek-item" style="margin: 20px 0;">
                            <div class="bg-ramka-item"></div>
                        </div>
                    @endif
                    <div class="opis-block">
                        @isset($server->trailer)
                            <div id="player" data-plyr-provider="youtube"
                                 data-plyr-embed-id="{{ substr($server->trailer, -32) }}"></div> @endisset
                        <h6>Полное описание сервера</h6>
                        <p>{{ $server->fdescription }}</p>
                        <h6>Ссылка с изображением для голосования за данный сервер <br>
                            <img src="../img/buttons/{{ $server->game }}.png" class="bimg">
                            <code class="button">
                                {{--<a href="{{ route('voteServer', $server->link ?? $server->id) }}" target="_blank">--}}
                                {{--<img src="https://mmorate.com/img/buttons/{{ $server->game }}.png" border="0" alt="Рейтинг ММО серверов MMORate">--}}
                                {{--</a>--}}
                                &lt;a href="{{ route('voteServer', $server->link ?? $server->id) }}" target="_blank"&gt;
                                &lt;img src="https://mmorate.com/img/buttons/{{ $server->game }}.png" border="0"
                                alt="Рейтинг ММО серверов MMORate"&gt;&lt;/a&gt;
                            </code>
                        </h6>
                        <span class="linkStat-and-comment">
                                <a href="{{ route('serverStat', $server->id) }}">
                                <i><img src="/img/icon/i-2.png"></i> Статистика
                            </a>
                                <a href="#comments">
                                <i><img src="/img/icon/i-3.png"></i> {{ $server->reviews }} Комментариев
                            </a>
                            <script type="text/javascript">(function () {
                                    if (window.pluso) if (typeof window.pluso.start == "function") return;
                                    if (window.ifpluso == undefined) {
                                        window.ifpluso = 1;
                                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                        s.type = 'text/javascript';
                                        s.charset = 'UTF-8';
                                        s.async = true;
                                        s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                        var h = d[g]('body')[0];
                                        h.appendChild(s);
                                    }
                                })();</script>
<div class="share pluso" style="position:absolute;" data-background="transparent"
     data-options="small,round,line,horizontal,nocounter,theme=04"
     data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                            </span>
                    </div>
                </div>

            </div>
            <div class="block-comment content-list-page">
                <h4>Игровые миры</h4>
                <table class="list-server">
                    <tbody>
                    @forelse($worlds as $world)
                        <tr onclick="world_click('{{ route('worldPage', [$server->link ?? $server->id, $world->id]) }}')"
                            style="cursor: pointer">
                            <td>
                                {{ $world->name }}
                            </td>
                            <td>
                                x{{ $world->rate }}
                            </td>
                            <td>
                                ~{{ $world->onlineUrl }} чел.
                            </td>
                            <td id="ip" data-ip="{{ $world->IpGame }}">
                                n/a uptime
                            </td>
                            <td>
                                v {{ $world->versionNumber }}
                            </td>
                            <td>
                                {{ $world->type }}
                            </td>
                            <td>
                                <i class="lang-server flag-icon flag-icon-{{ $server->country }}"></i>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" width="100%" style="text-align: center">У сервера нет миров</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="block-comment" id="comments">
                @foreach($comments as $comment)
                    <div class="item-comment">
                        <div class="title-comment">
                            <div class="ava-user-comment">
                                <img src="{{ Auth::user()->avatar ?? '../img/elements/prof-img.png' }}"
                                     width="47px">
                            </div>
                            <div class="info-user-comment">
                                <span class="rate-comment">
                                    <i><img src="../img/icon/i-5.png" alt=""></i> Оценка: {{ ($comment->rating) / 10 }}
                                    балла
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
                            {!! $comment->text !!}
                        </div>
                    </div>
                @endforeach
            </div>
            @if(Auth::check())
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
                            <label>Оцените сервер по шкале от 0 до 10 <span class="coll-comment-rate"><span
                                            class="numberRate" id="contentSlider">3,4</span> Баллов</span>
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
            @endif
        </div>
        @endsection
        @section('scripts')
            <script>const player = new Plyr('#player');</script>
            <script>
                $('#ip').each(function () {
                    var ip = $(this).data('ip');

                    $.ajax({
                        type: "POST",
                        url: '/ping',
                        data: {ip: ip},
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.errors) {
                                $('#ip').html(response.errors);
                            } else {
                                $('#ip').html(response.data);
                            }
                        }
                    });
                });
            </script>
@endsection