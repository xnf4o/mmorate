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
                    <form>
                        @csrf
                        <div class="leftBlockLk">
                            <div class="form-group-lk">
                                <label>Имя:</label>
                                <input type="text" class="text-ing-lk" name="name" value="{{ auth()->user()->name }}" placeholder="Укажите имя">
                            </div>
                            <div class="form-group-lk">
                                <label>Логин:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->name }}" disabled>
                            </div>
                            <div class="form-group-lk">
                                <label>Ник:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->nickname }}" placeholder="Укажите ник">
                            </div>
                            <div class="form-group-lk">
                                <label>Email:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->email }}" disabled>
                            </div>
                            <div class="form-group-lk">
                                <label>Дата рождения:</label>
                                <input type="text" class="text-ing-lk" value="{{ auth()->user()->bday }}" placeholder="Укажите дату рождения">
                            </div>
                            <div class="form-group-lk">
                                <label>Сайт (проект):</label>
                                <input type="text" class="text-ing-lk" name="project" value="{{ auth()->user()->project }}">
                            </div>
                            <div class="form-group-lk">
                                <label>Телефон:</label>
                                <input type="text" class="text-ing-lk" id="phone" value="{{ auth()->user()->phone }}" @if(auth()->user()->phone_verified == 1) disabled @endif placeholder="Укажите телефон">
                            </div>
                            @if(auth()->user()->phone_verified != 1)
                                <a href="#" class="create-server" style="padding: 14px 35px;">Подтвердить телефон</a><br><br><br>
                                @endif
                            {{--<div class="form-group-lk">--}}
                                {{--<label>Сайт сервера:</label>--}}
                                {{--<input type="text" class="text-ing-lk" name="">--}}
                            {{--</div>--}}
                            {{--<div class="form-group-lk">--}}
                                {{--<label>Видио трейлер:</label>--}}
                                {{--<input type="text" class="text-ing-lk" name="">--}}
                            {{--</div>--}}
                            {{--<div class="form-group-lk">--}}
                                {{--<label>Сайт сервера:</label>--}}
                                {{--<input type="text" class="text-ing-lk" name="">--}}
                            {{--</div>--}}
                            {{--<div class="form-group-lk">--}}
                                {{--<label>Видио трейлер:</label>--}}
                                {{--<input type="text" class="text-ing-lk" name="">--}}
                            {{--</div>--}}
                            {{--<div class="block-select-lk">--}}

                                {{--<input type="checkbox" id="check-1" class="lkCheckSucsess" name="">--}}
                                {{--<label for="check-1" style="margin-right: 15px;">Мужской</label>--}}
                                {{--<input type="checkbox" id="check-2" class="lkCheckSucsess" name="">--}}
                                {{--<label for="check-2">Женский</label>--}}
                            {{--</div>--}}

                            <a href="{{ route('changePassword') }}" class="create-server" style="padding: 14px 38px;">Сменить пароль</a>
                            <br><br><br>
                            <a href="#" class="create-server" style="padding: 14px 35px;">Удалить профиль</a>
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
                            </div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    {{--</form>--}}
                </div>
            </div>
            </div>

@endsection