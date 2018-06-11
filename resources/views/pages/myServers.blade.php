@extends('layouts.site')
@section('title', 'Список серверов')
@section('content')
    <div class="news-container">
        <div class="contentLogoNews">
            <a href="{{ route('main') }}">
                <img src="img/elements/logo.png" alt="">
            </a>
        </div>
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
                        <h1><i class="ico-title"><img src="img/icon/l-6.png" alt=""></i>Редактирования сервера</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="content-lk-block">
                                <div class="block-select-lk">
                                    <label>Выбирите профиль для редактирования:</label>
                                    @foreach($allServers as $server)
                                    <div class="itemProfil">
                                        <a href="{{ route('editServer', $server->id) }}" class="myServerLink">{{ $server->name }}</a>
                                    </div>
                                    @endforeach
                                </div>
                    </div>
                </div>
            </div>
@endsection