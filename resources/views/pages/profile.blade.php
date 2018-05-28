@extends('layouts.site')
@section('title', 'Редактирование профиля')
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
                    <h1><i class="ico-title"><img src="../img/icon/l-4.png" alt=""></i>Настройки профиля</span></h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    <form>
                        <div class="leftBlockLk">

                            <div class="form-group-lk">
                                <label>Сайт сервера:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="form-group-lk">
                                <label>Видио трейлер:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="form-group-lk">
                                <label>Сайт сервера:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="form-group-lk">
                                <label>Видио трейлер:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="form-group-lk">
                                <label>Сайт сервера:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="form-group-lk">
                                <label>Видио трейлер:</label>
                                <input type="text" class="text-ing-lk" name="">
                            </div>
                            <div class="block-select-lk">

                                <input type="checkbox" id="check-1" class="lkCheckSucsess" name="">
                                <label for="check-1" style="margin-right: 15px;">Мужской</label>
                                <input type="checkbox" id="check-2" class="lkCheckSucsess" name="">
                                <label for="check-2">Женский</label>
                            </div>

                        </div>
                        <div class="rightBlockLk">
                            <div class="form-group-lk">
                                <label>Изображение профиля:</label>
                                <img src="{{ Auth::user()->avatar ?? '../img/elements/prof-img.png' }}" alt="">
                                <input type="file" class="btn-load-photo" id="file-1" name="">
                                <label for="file-1">Выбрать изображения</label>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="text-area-lk">
                            <label>Описание сервера:</label>
                            <textarea class="textarea-style-lk"></textarea>
                        </div>
                        <p class="line-razdel"></p>
                        <h4 class="titlePassLk">Смена пароля</h4>
                        <div class="form-group-lk">
                            <label>Введите старый пароль:</label>
                            <input type="text" class="text-ing-lk" name="">
                        </div>
                        <div class="form-group-lk">
                            <label>Введите новый пароль:</label>
                            <input type="text" class="text-ing-lk" name="">
                        </div>
                        <div class="form-group-lk">
                            <label>Подтвердите новый пароль:</label>
                            <input type="text" class="text-ing-lk" name="">
                        </div>
                        <button class="create-server">Сохранить изменения</button>
                    </form>
                </div>
            </div>
            </div>

@endsection