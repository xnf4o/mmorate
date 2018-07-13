@extends('layouts.site')
@section('title', 'Голосование за сервер ' . $server->name)
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="/img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-2">
                <img src="/img/elements/elem-2.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="/img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href=""><img src="/img/rk/bn468.png" alt=""></a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <h1><i class="ico-title"><img src="/img/icon/i-6.png"
                                                  alt=""></i><span>Голосование за сервер</span></h1>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="item-top no-bg">
                @if(auth()->user()->email_confirmed == 1 and auth()->user()->phone_confirmed == 1)
                    <div class="title-item-golos">
                        <div class="number-top-server goldNumber">
                            1
                        </div>
                        <p class="name-server-golos">{{ $server->name }} <span>{{ number_format($server->rates,0,",",".") }}
                                Голосов получено</span></p>
                    </div>
                    <form action="{{ route('voteServer.post', $server->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="adBlockIsEnabled" id="ad">
                        <div class="form-group-golos">
                            <label class="title-label-golos">Выберите сервер:</label>
                            @forelse($rates as $i => $rate)
                                <input type="radio" id="rate-{{ $i }}" class="radio-rate" name="server">
                                <label for="rate-{{ $i }}">{{ $rate->name }} x{{ $rate->rate }}</label>
                            @empty
                                Нет серверов
                            @endforelse
                        </div>
                        <div class="form-group-golos">
                            <label class="title-label-golos">Укажите ник своего персоанажа:</label>
                            <input type="text" class="text-ing-golos" name="nickname" value="{{ old('nickname') }}"
                                   required minlength="3">
                            @if ($errors->has('nickname'))
                                <span class="invalid-feedback" style="margin: 0">
                                    <strong>{{ $errors->first('nickname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="capcha-golos">
                            {!! Captcha::display() !!}
                        </div>
                        @php
                            $vote = \MMORATE\Votes::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->first();
                        @endphp
                        <button class="btn-golos-form" type="submit"
                                @if(isset($vote) and $vote->created_at->isToday()) disabled @endif>@if(isset($vote) and $vote->created_at->isToday())
                                Сегодня вы уже голосовали @else Голосовать за сервер@endif</button>
                    </form>
                    <div class="text-info-golos">
                        <p>
                            Для голосования в рейтинге действует правило: любой пользователь может проголосовать только
                            один раз
                            в календарные сутки. <br><br>

                            Это означает, что если вы уже голосовали сегодня, то следующий голос может быть принят в
                            00:01
                        </p>
                    </div>
                    <div class="text-info-golos">
                        <p>
                            А так же Вы всегда можете поддержать сервер "{{ $server->name }}" с помощью VIP голосования!
                        </p>
                        <a href="mmorate(Голосование-VIP).html" class="link-vip-golos">
                            <i><img src="/img/icon/i-7.png" alt=""></i> Отдать VIP голос
                        </a>
                    </div>
                @else
                    <div class="infoRegist">
                        Голосование за сервер станет доступно после подтверждения почты и телефона.
                        <span>Подтвердите почту и телефон.</span>
                    </div>
                    <p class="lineReg"></p>
                @endif
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>$("#editServerForm").validate();</script>
@endsection