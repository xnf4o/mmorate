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
                            <input type="text" class="text-ing-reg" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="capcha"><img src="../img/bg/capha.png" alt=""></div>
                        <div class="form-group-checkbox">
                            <button type="submit" class="btn-regist"><i><img src="../img/icon/i-15.png" alt=""></i> Получить письмо</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
