@extends('auth.layout')
@section('title', 'Регистрация')
@section('content')

  <div class="regist-content">
      <div class="content-regist">
          <div class="reg-block-logo">
              <a href=""><img src="../img/elements/logo.png" alt=""></a>
          </div>
          <div class="block-title-regist">
              <h3><i><img src="../img/icon/i-12.png" alt=""></i> Регистрация нового аккаунта</h3>
          </div>
          <div class="content-form-reg">
              <div class="infoRegist">
                  Пожалуйста, записывайте данные, для того что бы не потерять доступ к аккаунту в дальнейшем.
                  <span>Заполните все необходимые поля</span>
              </div>
              <p class="lineReg"></p>
              <div class="form-group-reg">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                      <div class="form-group-reg">
                          <label class="title-label-reg">Введите логин:</label>
                          <input type="text" class="text-ing-reg {{ $errors->has('name') ? 'error-input' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                          @if ($errors->has('name'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Логин жуе занят.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Введите e-mail:</label>
                          <input type="text" class="text-ing-reg {{ $errors->has('email') ? 'error-input' : '' }}" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Email уже зарегистрирован.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Придумайте пароль:</label>
                          <input type="password" class="text-ing-reg {{ $errors->has('password') ? 'error-input' : '' }}" name="password" required>
                          @if ($errors->has('password'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Пароль не соответсвует требованиям или несовапдает.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Подтвердите пароль:</label>
                          <input type="password" class="text-ing-reg {{ $errors->has('password') ? 'error-input' : '' }}" name="password_confirmation">
                      </div>
                      <div class="form-group-checkbox">
                          <input type="checkbox" id="licence" class="licenceSucsess" name="license">
                          <label for="licence">Я принимаю условия <a href="">лецензионного соглашения</a></label>
                          @if ($errors->has('license'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Вы не приняли соглашение.</span>
                          @endif
                      </div>
                      <div class="capcha">{!! Captcha::display() !!}</div>
                      <div class="form-group-checkbox">
                          <button type="submit" class="btn-regist"><i><img src="../img/icon/i-13.png" alt=""></i> Создать аккаунт</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="error-message">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="error-message">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="error-message">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
