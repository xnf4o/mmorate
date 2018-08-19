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
                    <h3>Покупка возможности применения BB кодов</h3>
                    <p>
                        BB коды возможно использовать только в описании к серверу.
                        Введите E-mail для оповещения о готовности и нажмите на кнопку “Оплатить услугу”.
                    </p>
                </div>
                <div class="line-premium-vnut"></div>
                <div class="content-lk-block">
                    <form action="{{ route('privileges.buy') }}" method="POST">
                        @csrf
                        <div class="form-premium-block">
                            <div class="form-group-lk custom-width2">
                                <label>Введите свой e-mail:</label>
                                <input type="email" class="text-ing-lk" name="email">
                                <input type="hidden" class="text-ing-lk" name="amount" value="50">
                                <input type="hidden" class="text-ing-lk" name="action"
                                       value="{{ \MMORATE\Privilege::PRIVILEGE_BB }}">
                            </div>

                            <button class="btn-bue-premium">Купить услугу ›</button>
                        </div>
                    </form>
                </div>
                <div class="page-content-premium">

                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="/img/icon/ico-prem-1.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Купить баннер под свой сервер<br>
                                    <span>Разрешение баннера: 235х490</span></p>
                            </dis>
                            <a href="{{ route('privileges.banner') }}" class="btn-bue-premium">
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
                            <dis class="name-premium">
                                <p>Купить баннер в шапке на странице топов <br>
                                    <span>Разрешение баннера: 2048х3690</span></p>
                            </dis>
                            <a href="{{ route('privileges.header') }}" class="btn-bue-premium">
                                <i><img src="/img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection