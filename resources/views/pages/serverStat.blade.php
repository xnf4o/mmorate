@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-lk">
            <div class="element-desing-1">
                <img src="/img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="/img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="title-lk">
                <h3><i><img src="/img/icon/l-1.png" alt=""></i> Кабинет администратора</h3>
            </div>
            <div class="top-server-list">
                <div class="title-list-lk">
                    <h1><i class="ico-title"><img src="/img/icon/l-9.png" alt=""></i>Статистика голосования за
                        сервер {{ $server->name }}</h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    <div class="material-block">
                        <p>
                            Статистика может быть использована для поощрения игроков.<br>
                            Предоставляется по каждому из ваших серверов.<br><br>

                            Каждая строка - отдельный голос. Поля разделены знаком "|" в следующем порядке: <br><br>

                            <b>ID | Дата | Время | IP адрес | Имя персонажа (или логин аккаунта) | Тип</b>
                        </p>
                        <p class="line-razdel"></p>
                        <p style="text-align: left;">
                            <b>• ID</b> - уникальный идентификатор голоса <br>
                            <b>• Дата</b> - дата голосования в формате ДД.ММ.ГГГГ (например 27.02.2011) <br>
                            <b>• Время</b> - время голосования в формате ЧЧ:ММ:СС <br>
                            <b>• IP адрес</b> - ip-адрес проголосовавшего в формате ipv6 (например 145.45.25.10)
                            <br>
                            <b>• Имя персонажа (или логин аккаунта)</b> - имя персонажа или логин аккаунта
                            проголосовавшего <br>
                            <b>• Тип</b> - тип голоса: 1 - обычный голос, 2 - VIP голос
                        </p>
                        <p class="line-razdel"></p>
                        <div class="gameVibor">
                            <p style="margin-bottom: 0;">Статистика обновляется каждый час. Обнуляется ежемесячно, в
                                ночь на первое число.</p>
                            <h3 style="margin-top: 0;">Для просмотра месячной статистики выберите проект из
                                списка:</h3>
                            @foreach($allServers as $server)
                                <div class="itemProfil_bn">
                                    <a href="{{ route('serverStat', $server->id) }}"
                                       class="myServerLink">{{ $server->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="item-top ">
                    <div class="tableStatistic">
                        <table>
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Дата/Время</th>
                                <th>IP Адрес</th>
                                <th>Имя персоанажа ( или логин )</th>
                                <th>Тип</th>
                            </tr>
                            @forelse($votes as $vote)
                                <tr>
                                    <td>{{ $vote->id }}</td>
                                    <td>{{ $vote->created_at }}</td>
                                    <td>{{ $vote->ip }}</td>
                                    <td>{{ $vote->nickname }}</td>
                                    <td>{{ $vote->type }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" width="100%" style="text-align: center">Еще нет ни одного
                                        голоса
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--<div class="item-top ">--}}
                {{--<div class="graphickStat"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>--}}
                {{--<div class="btnTabGraphick">--}}
                {{--<span id="tabGol" class="itemTabGraphick">Голосование</span>--}}
                {{--<span id="tabPere" class="itemTabGraphick activeStat">Переходы</span>--}}
                {{--</div>--}}
                {{--<h3>График голосов и переходов</h3>--}}
                {{--<div class="clear"></div>--}}
                {{--<canvas id="graphick" class="graphick-stock chartjs-render-monitor" style="height: 440px; width: 100% !important; display: block;" width="670" height="440">--}}
                {{--</canvas>--}}
                {{--<canvas id="graphick2" class="graphick-stock chartjs-render-monitor" style="height: 440px; width: 100% !important; display: none;" width="670" height="440">--}}
                {{--</canvas>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
@endsection