@extends('auth.layout')
@section('title', 'Регистрация')
@section('content')

  <div class="regist-content">
      <div class="content-regist">
          <div class="reg-block-logo">
              <a href="{{ route('main')}}"><img src="../img/elements/logo.png" alt=""></a>
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
                  <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                      <div class="form-group-reg">
                          <label class="title-label-reg">Введите логин:</label>
                          <input type="text" class="text-ing-reg {{ $errors->has('name') ? 'error-input' : '' }}" name="name" value="{{ old('name') }}" minlength="3" required autofocus>
                          @if ($errors->has('name'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Логин жуе занят.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Введите e-mail:</label>
                          <input type="email" class="text-ing-reg {{ $errors->has('email') ? 'error-input' : '' }}" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Email уже зарегистрирован.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Придумайте пароль:</label>
                          <input type="password" class="text-ing-reg {{ $errors->has('password') ? 'error-input' : '' }}" name="password" minlength="6" required>
                          @if ($errors->has('password'))
                              <span class="error-message" style="margin-left: 37%;display: block;">Пароль не соответсвует требованиям или несовапдает.</span>
                          @endif
                      </div>
                      <div class="form-group-reg">
                          <label class="title-label-reg">Подтвердите пароль:</label>
                          <input type="password" class="text-ing-reg {{ $errors->has('password') ? 'error-input' : '' }}" name="password_confirmation" minlength="6" required>
                      </div>
                      <div class="form-group-checkbox">
                          <input type="checkbox" id="licence" class="licenceSucsess" name="license" required>
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
@endsection
@section('scripts')
    <script>$("#registerForm").validate();</script>
    @endsection
