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
                    <h1><i class="ico-title"><img src="/img/icon/ico-1.png" alt=""></i>Премиум услуги</h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block content-premium">
                    <h3>Покупка баннера под сервер</h3>
                    <p>
                        Прикрепите картинку в формате <span>JPEG, PNG или GIF</span>, введите E-mail для оповещения о
                        готовности и
                        нажмите на кнопку “Оплатить услугу”. Максимальное разрешение баннера: <span>240 х 650</span>
                        пикселей.
                    </p>
                </div>
                <div class="line-premium-vnut"></div>
                <div class="content-lk-block">
                    <form action="{{ route('privileges.buy') }}" method="POST">
                        @csrf
                        <div class="form-premium-block">

                            <div class="form-group-lk">
                                <label>Введите свой e-mail:</label>
                                <input type="email" class="text-ing-lk" name="email">
                                <input type="hidden" class="text-ing-lk" name="action"
                                       value="{{ \MMORATE\Privilege::PRIVILEGE_BANNER }}">
                            </div>
                            <input type="file" class="premium-file-btn" id="file-prem">
                            <label for="file-prem"><i><img src="/img/icon/ico-file.png" alt=""></i> Загрузить
                                файл</label>
                            <button class="btn-bue-premium">Перейти к оплате ›</button>
                        </div>
                    </form>
                </div>
                <div class="page-content-premium">

                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="/img/icon/ico-prem-2.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Купить возможность использовать bb коды <br>
                                    <span>Разрешено только в описании сервера</span></p>
                            </dis>
                            <a href="{{ route('privileges.bb') }}" class="btn-bue-premium">
                                <i><img src="/img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="/img/icon/ico-prem-3.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Возможность менять окончание ссылки <br>
                                    <span>Например: с /server250 на /asterios</span></p>
                            </dis>
                            <a href="{{ route('privileges.link') }}" class="btn-bue-premium">
                                <i><img src="/img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="/img/icon/ico-prem-4.png" alt="">
                            </div>
                            <div class="name-premium">
                                <p>Купить баннер в шапке на странице топов <br>
                                    <span>Разрешение баннера: 2048х3690</span></p>
                            </div>
                            <a href="{{ route('privileges.header') }}" class="btn-bue-premium">
                                <i><img src="/img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection