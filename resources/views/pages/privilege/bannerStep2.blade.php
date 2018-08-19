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
    <div class="contentLeft" style="min-height: 977px;">
        <div class="title-lk">
            <h3>
                <i>
                    <img src="/img/icon/l-1.png" alt="">
                </i> Кабинет администратора</h3>
        </div>
        <div class="top-server-list">
            <div class="title-list-lk">
                <h1>
                    <i class="ico-title">
                        <img src="/img/icon/r_1.png" alt="">
                    </i>Размещение рекламы
                </h1>
                <div class="clear"></div>
            </div>
            <div class="content-lk-block">
                <div class="reclam">
                    <h4 class="reclam_title">Размещение рекламы всего за 4 шага:</h4>
                    <p class="reclam_text">
                        1. Выберите место для размещения баннера на схеме
                    </p>
                    <p class="reclam_text active">
                        2. Загрузите картинку для размещения и зарезервируйте необходимую сумму
                    </p>
                    <p class="reclam_text">
                        3. Дождитесь одобрения модерации загруженной картинки
                    </p>
                    <p class="reclam_text">
                        4. Готово! Ваш баннер будет опубликован в течении 20 минут
                    </p>

                </div>
                <div class="clear"></div>
            </div>

            <div class="item-top ">
                <div class="infoRek">
                    <h4>Информация по услуге</h4>
                    <p>
                        Стоимость размещения: <b>250 $</b><br>
                        Разрешение картинки не должно превышать: <b>240 х 650</b> пикселей. <br><br>
                        Прикрепите картинку в формате <b>JPEG, PNG или GIF</b>, введите E-mail для оповещения о решении <br>
                        модерации и нажмите на кнопку “Оплатить услугу”.
                    </p>
                </div>
                <div class="rekForm">
                    <form action="{{ route('privileges.banner.step3') }}" method="GET">
                        <div class="form-group-lk">
                            <label>Введите e-mail для оповещения:</label>
                            <input type="email" class="text-ing-lk" name="email">
                        </div>
                        <input type="file" class="file_rek" id="flr">
                        <label for="flr"><i><img src="/img/elements/dow.png" alt=""></i> Загрузить файл</label>
                        <button class="btn_rek_bue">Оплатить услугу ›</button>
                    </form>
                    <div class="infoRekBue">
                        <span>Важная информация ›</span> После оплаты услуги, средства будут зарезервированы до одобрения модерацией <br>
                        на размещение баннера. После успешного одобрения, вы получите контакты администрации сайта для <br>
                        разрешения каких-либо проблем в случае их возникновения. <br><br>

                        В случае отказа модерации на размещение, средства будут возвращены в полном объёме.
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection