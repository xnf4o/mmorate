@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="/img/elements/elem-1.png" alt="">
            </div>

            <div class="element-desing-3">
                <img src="/img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft" style="min-height: 951px;">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href=""><img src="/img/rk/bn468.png" alt=""></a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <h1><i class="ico-title"><img src="/img/icon/i-21.png" alt=""></i>Описание игрового мира</h1>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="item-top opis-world">
                <h4>{{ $world->name }} <span class="lang"><i
                                class="lang-server flag-icon flag-icon-{{ $server->country }}"></i></span></h4>
                <table class="list-server2">
                    <tbody>
                    <tr>

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
                            <div class="content-line-tb">
                                <div class="vnut-line">

                                </div>
                            </div>
                        </td>

                    </tr>

                    </tbody>
                </table>
                <div class="contentInfoWorld">
                    <p>Тип <span>{{ $world->type }}</span></p>
                    <p>Рейты <span>x{{ $world->rate }}</span></p>
                    <p>Тип доната <span>@switch($world->donate)
                                @case(0) Нет @break
                                @case(1) Вещи, влияющие на экономику @break
                                @case(2) Вещи, не влияющие на экономику @break
                            @endswitch</span></p>
                    <p>Статус <span>@switch($world->status)
                                @case('open') Открытый @break
                                @case('openBeta') Открытый Бета Тест @break
                                @case('closedBeta') Закрытый Бета тест @break
                                @case('closed') Закрытый @break
                            @endswitch</span></p>
                    @if($world->gameVersion)<p>Версия игры <span>{{ $world->gameVersion }}</span></p> @endif
                    <p>В рейтинге с <span>{{ $world->created_at }}</span></p>
                    <p>Перенос кланов <span>{{ $world->clans == 'on' ? 'Да' : 'Нет' }}</span></p>
                    <p>Теги <span>{{ $world->tags }}</span></p>
                </div>
                <ul class="listInfWorld">
                    <li>
                        HD модели из Warlords of Draenor
                    </li>
                    <li>
                        Целых пять новых рас: Воргены, Гоблины, Наги, Высшие Эльфы и Пандарены!
                    </li>
                    <li>
                        Переписанный контент дополнения "The Burning Crusade" под 80-й уровень!
                    </li>
                    <li>
                        Новые ПВЕ сеты и Оружия, включая легендарные квестовые цепочки.
                    </li>
                    <li>
                        Система улучшения PvP-экипировки от доспехов 5-го сезона арены до 10-го!
                    </li>
                    <li>
                        Награды за серии убийств на полях боя!
                    </li>
                    <li>
                        Сотни новых транспортных средств и неигровых спутников!
                    </li>
                    <li>
                        Замки гильдий с уникальной системой развития!
                    </li>

                </ul>
            </div>


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
                            if (response.errors){
                                $('#ip').html(response.errors);
                            }else{
                                $('#ip').html(response.data);
                            }
                        }
                    });
                });
            </script>
@endsection