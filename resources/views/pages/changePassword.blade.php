@extends('layouts.site')
@section('title', 'Смена пароля')
@section('content')
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
                        <h1><i class="ico-title"><img src="../img/icon/l-4.png"
                                                      alt=""></i><span>Настройки профиля</span></h1>
                        <div class="clear"></div>
                    </div>
                    <h4 class="content-lk-block">
                        <form action="{{ route('changePassword.post') }}" method="post">
                            @csrf
                            <h4 class="titlePassLk">Смена пароля</h4>
                            @if(isset($success))
                                <h4 class="titlePassLk" style="color: #3c763d;">Данные успешно сохранены</h4>
                            @endif
                            @foreach ($errors->all() as $error)
                                <h4 class="titlePassLk" style="color: #a94442;">{{ $error }}</h4>
                            @endforeach
                            <div class="form-group-lk">
                                <label>Введите старый пароль:</label>
                                <input type="text" class="text-ing-lk" name="oldpass">
                            </div>
                            <div class="form-group-lk">
                                <label>Введите новый пароль:</label>
                                <input type="text" class="text-ing-lk" name="pass">
                            </div>
                            <div class="capcha">{!! Captcha::display() !!}</div>
                            <div class="form-group-lk">
                                <label>Подтвердите новый пароль:</label>
                                <input type="text" class="text-ing-lk" name="pass_confirmation">
                            </div>
                            <button type="submit" class="create-server">Сохранить изменения</button>
                        </form>
                </div>
            </div>

@endsection