@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="../img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="../img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="title-lk">
                <h3><i><img src="/img/icon/l-1.png" alt=""></i> Кабинет администратора</h3>
            </div>
            <div class="top-server-list">
                <div class="title-list-lk">
                    <h1><i class="ico-title"><img src="/img/icon/i-22.png" alt=""></i><span>Подтверждение по СМС и E-mail</span>
                    </h1>
                    <div class="clear"></div>
                </div>
                @if(auth()->user()->email_confirmed == 0)
                    <div class="podtverz-block" id="emblck">
                        <h4>Подтверждение по e-mail</h4>
                        <div class="group-block-inp-pod">
                            <div class="message-sucsess-pod" id="mes-1">
                                На ваш E-mail отправлено письмо с кодом подтверждения
                            </div>
                            <form id="form-1">
                                <p>Введите свой E-mail</p>
                                <input type="text" class="input-pod-content" value="{{ auth()->user()->email }}"
                                       id="mail">
                                <button type="button" class="send-email-btn" id="sendEmBtn">Отправить код</button>
                            </form>
                        </div>
                        <div class="group-block-inp-pod-right">
                            <div class="message-sucsess-pod-2" id="mes-3">
                                E-mail успешно подтвержден
                            </div>
                            <form id="form-3">
                                <p>Введите код из письма</p>
                                <input type="text" class="input-pod-content" id="code">
                                <button type="button" class="send-email-btn" id="accEmBtn"></button>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endif
                @if(auth()->user()->phone_confirmed == 0)
                    <div class="podtverz-block-2" id="phnblck">
                        <h4>Подтверждение по номеру телефона</h4>
                        <div class="group-block-inp-pod">
                            <div class="message-sucsess-pod" id="mes-2">
                                На ваш телефон отправлено смс с кодом подтверждения
                            </div>
                            <form id="form-2">
                                <p>Введите свой телефон</p>
                                <input type="text" class="input-pod-content" name="phone" id="phone"
                                       value="{{ auth()->user()->phone }}">
                                <button type="button" class="send-email-btn" id="sendSmsBtn">Отправить код</button>
                            </form>
                        </div>
                        <div class="group-block-inp-pod-right">
                            <div class="message-sucsess-pod-2" id="mes-4">
                                Телефон успешно подтвержден
                            </div>
                            <form id="form-4">
                                <p>Введите код из SMS</p>
                                <input type="text" class="input-pod-content" id="smsCode">
                                <button type="button" class="send-email-btn" id="accSmsBtn"></button>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endif
            </div>
        </div>
@endsection
