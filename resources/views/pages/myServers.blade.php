@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-lk">
            <div class="element-desing-1">
                <img src="img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="title-lk">
                <h3><i><img src="img/icon/l-1.png" alt=""></i> Кабинет администратора</h3>
            </div>
            <div class="top-server-list">
                <div class="title-list-lk">
                    <h1><i class="ico-title"><img src="img/icon/i-23.png" alt=""></i><span>Список серверов</span>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="lk-list-server">
                    @foreach($allServers as $server)
                        @php
                            if ($server->game == 'aion') $server->game = 'Aion';
                            if ($server->game == 'lineage') $server->game = 'Lineage 2';
                            if ($server->game == 'jade') $server->game = 'Jade Dynasty';
                            if ($server->game == 'wow') $server->game = 'World Of Warcraft';
                            if ($server->game == 'rf') $server->game = 'RF Online';
                            if ($server->game == 'mu') $server->game = 'MU Online';
                            if ($server->game == 'perfect') $server->game = 'Perfect World';
                            if ($server->game == 'other') $server->game = 'Онлайн игра';
                        @endphp
                        <div class="item-server-lk">
                            <div class="imgList">
                                <img src="img/elements/img.png" alt="">

                            </div>
                            <div class="text-list-server">
                                <h4><a href="{{ route('serverPage', $server->id) }}"
                                       style="color: inherit;">{{ $server->name }}</a></h4>
                                <p>Игра: <span>{{ $server->game }}</span></p>
                                <span class="rate-list"><i><img src="img/icon/i-24.png"
                                                                alt=""></i> Рейтинг: {{ sprintf("%.2f", $server->rating) }}
                                    баллов</span>
                            </div>
                            <div class="link-list-server">
                                <a href="{{ route('editServer', $server->id) }}"><img src="img/icon/l1.png" alt=""></a>
                                <a href="{{ route('serverStat', $server->id) }}"><img src="img/icon/l2.png" alt=""></a>
                                <div class="clear"></div>
                                <a href="{{ $server->site }}" class="link-site-game">{{ $server->site }}</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>


@endsection