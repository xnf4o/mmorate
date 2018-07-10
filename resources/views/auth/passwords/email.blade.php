@extends('auth.layout')
@section('title', 'Восстановление пароля')
@section('content')
    @if (session('status'))
        <div class="regist-content">
            <div class="content-regist">
                <div class="reg-block-logo">
                    <a href=""><img src="../img/elements/logo.png" alt=""></a>
                </div>
                <div class="block-title-regist">
                    <h3><i><img src="../img/icon/i-14.png" alt=""></i> Восстановление забытого пароля</h3>
                </div>
                <div class="content-form-reg">
                    <div class="blockVostPass1">
                        <div class="blockVostPass2">
                            <span class="colorGreen">Спасибо, E-mail найден.</span> <br>
                            Письмо отправлено на Ваш E-mail.
                            {{-- Письмо отправлено на <span class="colorRed">{{ dd($success) }}</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="regist-content">
            <div class="content-regist">
                <div class="reg-block-logo">
                    <a href="{{ route('main') }}"><img src="../img/elements/logo.png" alt=""></a>
                </div>
                <div class="block-title-regist">
                    <h3><i><img src="../img/icon/i-14.png" alt=""></i> Восстановление забытого пароля</h3>
                </div>
                <div class="content-form-reg">
                    <div class="infoRegist">
                        На ваш e-mail будет отправлено письмо с ссылкой, пройдя по которой вы сможете изменить пароль
                        <span>Для восстановления доступа, введите логин</span>
                    </div>
                    <p class="lineReg"></p>
                    <div class="form-group-reg">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group-reg">
                                <label class="title-label-reg">Введите email:</label>
                                <input type="text" class="text-ing-reg {{ $errors->has('email') ? 'error-input' : '' }}"
                                       name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="error-message" style="margin-left: 37%;display: block;">Не удалось найти пользователя с указанным электронным адресом.</span>
                                @endif
                            </div>


                            <div class="capcha">{!! Captcha::display() !!}</div>
                            <div class="form-group-checkbox">
                                <button type="submit" class="btn-regist"><i><img src="../img/icon/i-15.png" alt=""></i>
                                    Получить письмо
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
