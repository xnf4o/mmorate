@extends('layouts.site')
@section('title', 'Контакты')
@section('content')
  <div class="news-container">
      <div class="contentLogoNews">
          <a href="{{ route('main') }}">
          <img src="../img/elements/logo.png" alt="">
      </a>
      </div>
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
              <div class="segment-rek-top">
                  <div class="bg-ramka-rek"></div>
                  <a href=""><img src="../img/rk/bn468.png" alt=""></a>
              </div>
              <div class="top-server-list">
                  <div class="title-list-server">
                      <h1><i class="ico-title"><img src="../img/icon/i-17.png" alt=""></i>Связь с администрацией</h1>
                      <div class="clear"></div>
                  </div>
                  <div class="content-page">
                      Вы можете связаться с нами различными способами, как через почту, так и через социальные сети,
                      и мессенджеры.
                      <p class="itemContact">
                          E-mail: <span>support@mmorate.ru</span>
                      </p>
                      <p class="itemContact">
                          Группа Вконтакте: <span>vk.com/mmorate</span>
                      </p>
                      <p class="itemContact">
                          WhatsApp: <span>+7 (980) 210-50-30</span>
                      </p>
                      <p class="itemContact">
                          Icq: <span>9578254875</span>
                      </p>
                  </div>
              </div>

          </div>
@endsection
