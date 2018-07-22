@extends('layouts.site')
@section('title', 'VIP профиль')
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
                    <h1><i class="ico-title"><img src="img/icon/ico-1.png" alt=""></i>Премиум услуги</h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="img/icon/ico-prem-1.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Купить баннер под свой сервер<br>
                                    <span>Разрешение баннера: 235х490</span></p>
                            </dis>
                            <a href="{{ route('privileges.banner') }}" class="btn-bue-premium">
                                <i><img src="img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="img/icon/ico-prem-2.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Купить возможность использовать BB коды <br>
                                    <span>Разрешено только в описании сервера</span></p>
                            </dis>
                            <a href="{{ route('privileges.bb') }}" class="btn-bue-premium">
                                <i><img src="img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="img/icon/ico-prem-3.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Возможность менять окончание ссылки <br>
                                    <span>Например: с /server250 на /asterios</span></p>
                            </dis>
                            <a href="{{ route('privileges.link') }}" class="btn-bue-premium">
                                <i><img src="img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                    <div class="item-premium">
                        <div class="premium-content-item">
                            <div class="img-premium">
                                <img src="img/icon/ico-prem-4.png" alt="">
                            </div>
                            <dis class="name-premium">
                                <p>Купить баннер в шапке на странице топов <br>
                                    <span>Разрешение баннера: 2048х3690</span></p>
                            </dis>
                            <a href="{{ route('privileges.header') }}" class="btn-bue-premium">
                                <i><img src="img/icon/ico-btn.png" alt=""></i>Заказать услугу ›
                            </a>
                        </div>
                    </div>
                </div>
                <div class="line-item-premium">
                    <div class="table-statistic-premium">
                        <table>
                            <tbody>
                            <tr>
                                <th>
                                    ID аккаунта
                                </th>
                                <th>
                                    Вид услуги
                                </th>
                                <th>
                                    Статус услуги
                                </th>
                                <th>
                                    Дата активации
                                </th>
                            </tr>
                            @forelse($myPrivileges as $p)
                                <tr>
                                    <th>
                                        {{ $p->id }}
                                    </th>
                                    <th>
                                        @switch($p->action)
                                            @case(\MMORATE\Privilege::PRIVILEGE_BANNER)
                                            Баннер под сервер
                                            @break
                                            @case(\MMORATE\Privilege::PRIVILEGE_BB)
                                            BB коды
                                            @break
                                            @case(\MMORATE\Privilege::PRIVILEGE_SERVER_LINK)
                                            Своя ссылка на сервер
                                            @break
                                            @case(\MMORATE\Privilege::PRIVILEGE_HEADER)
                                            Своя шапка
                                            @break
                                        @endswitch
                                    </th>
                                    <th>
                                        @switch($p->status)
                                            @case(0)
                                            <span class="not-active-premium">Отключена</span>
                                            @break
                                            @case(1)
                                            <span class="active-premium">Активна</span>
                                            @break
                                            @endswitch
                                    </th>
                                    <th>
                                        {{ $p->created_at }}
                                    </th>
                                </tr>
                            @empty
                                <tr>
                                <td colspan="5" width="100%" style="text-align: center">Тут ничего нет ¯\_(ツ)_/¯</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection