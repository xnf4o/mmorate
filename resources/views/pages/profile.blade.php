@extends('layouts.site')
@section('title', 'Редактирование профиля')
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
                <img src="../img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="../img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="title-lk">
                <h3><i><img src="../img/icon/l-1.png" alt=""></i> Кабинет администратора</h3>
            </div>
            <div class="top-server-list">
                <div class="title-list-lk">
                    <h1><i class="ico-title"><img src="../img/icon/l-4.png" alt=""></i><span>Настройки профиля</span></h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    <form action="{{ route('profile.edit') }}" method="post">
                        @csrf
                        <div class="leftBlockLk">
                            <div class="form-group-lk">
                                <label>Имя:</label>
                                <input type="text" class="text-ing-lk" name="fname" value="{{ auth()->user()->fname }}" placeholder="Укажите имя">
                            </div>
                            <div class="form-group-lk">
                                <label>Логин:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->name }}" disabled>
                            </div>
                            <div class="form-group-lk">
                                <label>Ник:</label>
                                <input type="text" class="text-ing-lk" name="nickname" value="{{ auth()->user()->nickname }}" placeholder="Укажите ник">
                            </div>
                            <div class="form-group-lk">
                                <label>Email:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->email }}" disabled>
                            </div>
                            <div class="form-group-lk">
                                <label>Дата рождения:</label>
                                <input type="text" class="text-ing-lk" name="bday" value="{{ auth()->user()->bday }}" id="bday" placeholder="Укажите дату рождения">
                            </div>
                            <div class="form-group-lk">
                                <label>Сайт (проект):</label>
                                <input type="text" class="text-ing-lk" name="project" value="{{ auth()->user()->project }}" placeholder="Укажите ваш проект">
                            </div>
                            <div class="form-group-lk">
                                <label>Телефон:</label>
                                <input type="text" class="text-ing-lk" id="phone" value="{{ auth()->user()->phone }}" @if(auth()->user()->phone_verified == 1) disabled @endif placeholder="Укажите телефон">
                            </div>
                            <input type="button" value="Сохранить" class="create-server">
                            @if(!auth()->user()->phone)
                                <a href="#" class="create-server" style="padding: 14px 35px;">Подтвердить телефон</a><br><br><br>
                                @endif
                        </div>
                    </form>
                    <form action="{{ route('updateAvatar') }}" method="post" id="updateAvatar" enctype="multipart/form-data">
                        @csrf
                        <div class="rightBlockLk">
                            <div class="form-group-lk">
                                <label>Изображение профиля:</label>
                                <img src="{{ auth()->user()->avatar ?? '../img/elements/prof-img.png' }}" style="border-radius: 5px;">
                                <input type="file" class="btn-load-photo" id="file-1" name="avatar" accept="image/jpeg,image/png">
                                <label for="file-1">Выбрать изображения</label>
                                <a href="{{ route('changePassword') }}" style="display:block;width:100%;background:url(../img/elements/btn-load.png) no-repeat top center;color:#614c3f;font:18px CalibriBold;text-align:center;line-height:63px;margin-top:25px;cursor:pointer;height:100%;">Сменить пароль</a>
                                <a href="#" style="display:block;width:100%;background:url(../img/elements/btn-load.png) no-repeat top center;color:#614c3f;font:18px CalibriBold;text-align:center;line-height:63px;margin-top:25px;cursor:pointer;height:100%;">Удалить профиль</a>
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    {{--</form>--}}
                </div>
            </div>
            </div>

@endsection