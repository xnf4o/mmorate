@extends('auth.layout')
@section('title', 'Авторизация')
@section('content')

    <div class="regist-content">
        <div class="content-regist">
            <div class="reg-block-logo">
                <a href="{{ route('main') }}"><img src="../img/elements/logo.png" alt=""></a>
            </div>
            <div class="block-title-regist">
                <h3><i><img src="../img/icon/i-12.png" alt=""></i> Авторизация</h3>
            </div>
            <div class="content-form-reg">
                <div class="form-group-reg">
                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        <div class="form-group-reg">
                            <label class="title-label-reg">E-mail:</label>
                            <input type="email" class="text-ing-reg {{ $errors->has('email') ? 'error-input' : '' }}"
                                   name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="error-message">Имя пользователя и пароль не совпадают.</span>
                            @endif
                        </div>
                        <div class="form-group-reg">
                            <label class="title-label-reg">Пароль:</label>
                            <input type="password"
                                   class="text-ing-reg {{ $errors->has('password') ? 'error-input' : '' }}"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <span class="error-message">Имя пользователя и пароль не совпадают.</span>
                            @endif
                        </div>
                        <div class="capcha">{!! Captcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="error-message">Подтвердите капчу</span>
                            @endif
                        </div>
                        <div class="form-group-checkbox">
                            <button type="submit" class="btn-regist"><i><img src="../img/icon/i-13.png" alt=""></i>
                                Войти
                            </button>
                            <br>
                            <br>
                            <br>
                            <button type="button" class="btn-regist" onclick="location.href='{{ route('password.request') }}'">
                                Забыли пароль?
                            </button>
                            <br>
                            <br>
                            <br>
                            <button type="button" class="btn-regist" onclick="location.href='{{ route('register') }}'">
                                Регистрация
                            </button>
                            {{--<a href="{{ route('password.request') }}">Забыли пароль?</a><br>--}}
                            {{--<a href="{{ route('register') }}">Реистрация</a>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>$("#loginForm").validate();</script>
@endsection