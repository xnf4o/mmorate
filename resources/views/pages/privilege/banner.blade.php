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
                        <p class="reclam_text active">
                            1. Выберите место для размещения баннера на схеме
                        </p>
                        <p class="reclam_text">
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
                    <div class="selectReclam">
                        <a class="select_item1" href="{{ route('privileges.banner.step2') }}">
                            Баннер в шапке (1024х3970px)
                        </a>
                        <div class="select_item2">
                            <a class="select_link" href="{{ route('privileges.banner.step2') }}"> Баннер 1 (768х68px)</a>
                            <img src="/img/elements/rek_1.png" alt="">
                        </div>
                        <div class="select_item3">
                            <a class="select_link" href="{{ route('privileges.banner.step2') }}"> Баннер 2 (768х68px)</a>
                            <a class="select_link2" href="{{ route('privileges.banner.step2') }}"> Баннер 3 (768х68px)</a>
                            <img src="/img/elements/rek_2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item-top ">
                    <div class="priceReklam">
                        <h4 class="priceReklam_title">Стоимость размещения рекламы</h4>
                        <p class="priceReklam_item">Баннер в шапке (1024х3970 px) <span>250 $ / 1 неделя</span></p>
                        <p class="priceReklam_item">Баннер в шапке (1024х3970 px) <span>250 $ / 1 неделя</span></p>
                        <p class="priceReklam_item">Баннер в шапке (1024х3970 px) <span>250 $ / 1 неделя</span></p>
                        <p class="priceReklam_item">Баннер в шапке (1024х3970 px) <span>250 $ / 1 неделя</span></p>

                    </div>
                </div>
            </div>
        </div>
@endsection