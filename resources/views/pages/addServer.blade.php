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
                    <h1><i class="ico-title"><img src="/img/icon/l-2.png" alt=""></i>Создание профиля <span
                                class="miniTextTitle">›   Добавление сервера</span></h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    @if(auth()->user()->email_confirmed == 1 and auth()->user()->phone_confirmed == 1)
                        <form action="{{ route('addServer.post') }}" method="post" id="addServerForm">
                            @csrf
                            <div class="leftBlockLk">
                                <div class="block-select-lk">
                                    <label>Выбирите игру:</label>
                                    <div class="item-select-lk">
                                        <select name="game" {{ $errors->has('game') ? 'error-input' : '' }} required>
                                            <option value="0">-- Выберите игру --</option>
                                            <option value="aion">Aion</option>
                                            <option value="jade">Jade Dynasty</option>
                                            <option value="lineage">Lineage 2</option>
                                            <option value="mu">Mu Online</option>
                                            <option value="perfect">Perfect World</option>
                                            <option value="rf">RF Online</option>
                                            <option value="wow">World Of Warcraft</option>
                                            <option value="other">Online Games</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group-lk">
                                    <label>Название игрового сервера:</label>
                                    <input type="text"
                                           class="text-ing-lk {{ $errors->has('name') ? 'error-input' : '' }}"
                                           name="name" alt="Название игрового сервера" value="{{ old('name') }}"
                                           required minlength="3">
                                    @if ($errors->has('name'))
                                        <span class="error-message">Введите название сервера.</span>
                                    @endif
                                </div>
                                <div class="block-select-lk">
                                    <label>Выбирите страну:</label>
                                    <div class="item-select-lk">
                                        <select name="country" required>
                                            <option value="au">Австралия (Australia)</option>
                                            <option value="at">Австрия (Austria)</option>
                                            <option value="az">Азербайджан (Azerbaijan)</option>
                                            <option value="al">Албания (Albania)</option>
                                            <option value="dz">Алжир (Algeria)</option>
                                            <option value="as">Американское Самоа (American Samoa)</option>
                                            <option value="ai">Ангилья (Anguilla)</option>
                                            <option value="ao">Ангола (Angola)</option>
                                            <option value="ad">Андорра (Andorra)</option>
                                            <option value="ag">Антигуа и Барбуда (Antigua and Barbuda)</option>
                                            <option value="ar">Аргентина (Argentina)</option>
                                            <option value="am">Армения (Armenia)</option>
                                            <option value="aw">Аруба (Aruba)</option>
                                            <option value="af">Афганистан (Afghanistan)</option>
                                            <option value="bs">Багамы (The Bahamas)</option>
                                            <option value="bd">Бангладеш (Bangladesh)</option>
                                            <option value="bb">Барбадос (Barbados)</option>
                                            <option value="bh">Бахрейн (Bahrain)</option>
                                            <option value="by">Беларусь (Belarus)</option>
                                            <option value="bz">Белиз (Belize)</option>
                                            <option value="be">Бельгия (Belgium)</option>
                                            <option value="bj">Бенин (Benin)</option>
                                            <option value="bm">Бермуды (Bermuda)</option>
                                            <option value="bg">Болгария (Bulgaria)</option>
                                            <option value="bo">Боливия (Bolivia)</option>
                                            <option value="ba">Босния и Герцеговина (Bosnia and Herzegovina)</option>
                                            <option value="bw">Ботсвана (Botswana)</option>
                                            <option value="br">Бразилия (Brazil)</option>
                                            <option value="io">Британская территория в Индийском океане (British Indian
                                                Ocean Territory)
                                            </option>
                                            <option value="bn">Бруней-Даруссалам (Brunei Darussalam)</option>
                                            <option value="bf">Буркина-Фасо (Burkina Faso)</option>
                                            <option value="bi">Бурунди (Burundi)</option>
                                            <option value="bt">Бутан (Bhutan)</option>
                                            <option value="vu">Вануату (Vanuatu)</option>
                                            <option value="hu">Венгрия (Hungary)</option>
                                            <option value="ve">Венесуэла (Venezuela)</option>
                                            <option value="vg">Виргинские острова, Британские (British Virgin Islands)
                                            </option>
                                            <option value="vi">Виргинские острова, США (USA Virgin Islands)</option>
                                            <option value="vn">Вьетнам (Vietnam)</option>
                                            <option value="ga">Габон (Gabon)</option>
                                            <option value="ht">Гаити (Haiti)</option>
                                            <option value="gy">Гайана (Guyana)</option>
                                            <option value="gm">Гамбия (The Gambia)</option>
                                            <option value="gh">Гана (Ghana)</option>
                                            <option value="gp">Гваделупа (Guadeloupe)</option>
                                            <option value="gt">Гватемала (Guatemala)</option>
                                            <option value="gn">Гвинея (Guinea)</option>
                                            <option value="gw">Гвинея-Бисау (Guinea-Bissau)</option>
                                            <option value="de">Германия (Germany)</option>
                                            <option value="gi">Гибралтар (Gibraltar)</option>
                                            <option value="hn">Гондурас (Honduras)</option>
                                            <option value="hk">Гонконг (Hong Kong)</option>
                                            <option value="gd">Гренада (Grenada)</option>
                                            <option value="gl">Гренландия (Greenland)</option>
                                            <option value="gr">Греция (Greece)</option>
                                            <option value="ge">Грузия (Georgia)</option>
                                            <option value="gu">Гуам (Guam)</option>
                                            <option value="dk">Дания (Denmark)</option>
                                            <option value="dj">Джибути (Djibouti)</option>
                                            <option value="dm">Доминика (Dominica)</option>
                                            <option value="do">Доминиканская Республика (Dominican Republic)</option>
                                            <option value="eg">Египет (Egypt)</option>
                                            <option value="zm">Замбия (Zambia)</option>
                                            <option value="eh">Западная Сахара (Western Sahara)</option>
                                            <option value="zw">Зимбабве (Zimbabwe)</option>
                                            <option value="il">Израиль (Israel)</option>
                                            <option value="in">Индия (India)</option>
                                            <option value="id">Индонезия (Indonesia)</option>
                                            <option value="jo">Иордания (Jordan)</option>
                                            <option value="iq">Ирак (Iraq)</option>
                                            <option value="ir">Иран, Исламская Республика (Iran)</option>
                                            <option value="ie">Ирландия (Ireland)</option>
                                            <option value="is">Исландия (Iceland)</option>
                                            <option value="es">Испания (Spain)</option>
                                            <option value="it">Италия (Italy)</option>
                                            <option value="ye">Йемен (Yemen)</option>
                                            <option value="cv">Кабо-Верде (Cape Verde)</option>
                                            <option value="kz">Казахстан (Kazakhstan)</option>
                                            <option value="kh">Камбоджа (Cambodia)</option>
                                            <option value="cm">Камерун (Cameroon)</option>
                                            <option value="ca">Канада (Canada)</option>
                                            <option value="qa">Катар (Qatar)</option>
                                            <option value="ke">Кения (Kenya)</option>
                                            <option value="cy">Кипр (Cyprus)</option>
                                            <option value="kg">Киргизия (Kyrgyzstan)</option>
                                            <option value="ki">Кирибати (Kiribati)</option>
                                            <option value="cn">Китай (China)</option>
                                            <option value="cc">Кокосовые (Килинг) острова (Cocos (Keeling) Islands)
                                            </option>
                                            <option value="co">Колумбия (Colombia)</option>
                                            <option value="km">Коморы (Comoros)</option>
                                            <option value="cg">Конго (Congo)</option>
                                            <option value="cd">Конго) Демократическая Республика (Democratic Republic of
                                                the Congo)
                                            </option>
                                            <option value="cr">Коста-Рика (Costa Rica)</option>
                                            <option value="ci">Кот д'Ивуар (Côte d'Ivoire)</option>
                                            <option value="cu">Куба (Cuba)</option>
                                            <option value="kw">Кувейт (Kuwait)</option>
                                            <option value="la">Лаос (Laos)</option>
                                            <option value="lv">Латвия (Latvia)</option>
                                            <option value="ls">Лесото (Lesotho)</option>
                                            <option value="lr">Либерия (Liberia)</option>
                                            <option value="lb">Ливан (Lebanon)</option>
                                            <option value="ly">Ливийская Арабская Джамахирия (Libya)</option>
                                            <option value="lt">Литва (Lithuania)</option>
                                            <option value="li">Лихтенштейн (Liechtenstein)</option>
                                            <option value="lu">Люксембург (Luxembourg)</option>
                                            <option value="mu">Маврикий (Mauritius)</option>
                                            <option value="mr">Мавритания (Mauritania)</option>
                                            <option value="mg">Мадагаскар (Madagascar)</option>
                                            <option value="yt">Майотта (Mayotte)</option>
                                            <option value="mo">Макао (Macau)</option>
                                            <option value="mw">Малави (Malawi)</option>
                                            <option value="my">Малайзия (Malaysia)</option>
                                            <option value="ml">Мали (Mali)</option>
                                            <option value="um">Малые Тихоокеанские отдаленные острова Соединенных Штатов
                                                (United States Minor Outlying Islands)
                                            </option>
                                            <option value="mv">Мальдивы (Maldives)</option>
                                            <option value="mt">Мальта (Malta)</option>
                                            <option value="ma">Марокко (Morocco)</option>
                                            <option value="mq">Мартиника (Martinique)</option>
                                            <option value="mh">Маршалловы острова (Marshall Islands)</option>
                                            <option value="mx">Мексика (Mexico)</option>
                                            <option value="fm">Микронезия, Федеративные Штаты (Micronesia)</option>
                                            <option value="mz">Мозамбик (Mozambique)</option>
                                            <option value="md">Молдова, Республика (Moldova)</option>
                                            <option value="mc">Монако (Monaco)</option>
                                            <option value="mn">Монголия (Mongolia)</option>
                                            <option value="ms">Монтсеррат (Montserrat)</option>
                                            <option value="mm">Мьянма (Myanmar (Burma))</option>
                                            <option value="na">Намибия (Namibia)</option>
                                            <option value="nr">Науру (Nauru)</option>
                                            <option value="np">Непал (Nepal)</option>
                                            <option value="ne">Нигер (Niger)</option>
                                            <option value="ng">Нигерия (Nigeria)</option>
                                            <option value="an">Нидерландские Антилы (Netherlands Antilles)</option>
                                            <option value="nl">Нидерланды (The Netherlands)</option>
                                            <option value="ni">Никарагуа (Nicaragua)</option>
                                            <option value="nu">Ниуэ (Niue)</option>
                                            <option value="nz">Новая Зеландия (New Zealand)</option>
                                            <option value="nc">Новая Каледония (New Caledonia)</option>
                                            <option value="no">Норвегия (Norway)</option>
                                            <option value="ae">Объединенные Арабские Эмираты (United Arab Emirates)
                                            </option>
                                            <option value="om">Оман (Oman)</option>
                                            <option value="ky">Острова Кайман (Cayman Islands)</option>
                                            <option value="ck">Острова Кука (Cook Islands)</option>
                                            <option value="tc">Острова Теркс и Кайкос (Turks and Caicos Islands)
                                            </option>
                                            <option value="bv">Остров Буве (Bouvet Island)</option>
                                            <option value="nf">Остров Норфолк (Norfolk Island)</option>
                                            <option value="cx">Остров Рождества (Christmas Island)</option>
                                            <option value="hm">Остров Херд и острова Макдональд (Heard Island and
                                                McDonald Islands)
                                            </option>
                                            <option value="pk">Пакистан (Pakistan)</option>
                                            <option value="pw">Палау (Palau)</option>
                                            <option value="ps">Палестинская территория, оккупированная (Palestine)
                                            </option>
                                            <option value="pa">Панама (Panama)</option>
                                            <option value="va">Папский Престол (Государство &amp;mdash; город Ватикан)
                                                (Vatican City)
                                            </option>
                                            <option value="pg">Папуа-Новая Гвинея (Papua New Guinea)</option>
                                            <option value="py">Парагвай (Paraguay)</option>
                                            <option value="pe">Перу (Peru)</option>
                                            <option value="pn">Питкерн (Pitcairn Islands)</option>
                                            <option value="pl">Польша (Poland)</option>
                                            <option value="pt">Португалия (Portugal)</option>
                                            <option value="pr">Пуэрто-Рико (Puerto Rico)</option>
                                            <option value="mk">Республика Македония (Macedonia (FYROM))</option>
                                            <option value="re">Реюньон (Reunion)</option>
                                            <option value="ru" selected="selected">Россия (Russian Federation)</option>
                                            <option value="rw">Руанда (Rwanda)</option>
                                            <option value="ro">Румыния (Romania)</option>
                                            <option value="ws">Самоа (Samoa)</option>
                                            <option value="sm">Сан-Марино (San Marino)</option>
                                            <option value="st">Сан-Томе и Принсипи (São Tomé and Príncipe)</option>
                                            <option value="sa">Саудовская Аравия (Saudi Arabia)</option>
                                            <option value="sz">Свазиленд (Swaziland)</option>
                                            <option value="sh">Святая Елена (St Helena)</option>
                                            <option value="kp">Северная Корея (North Korea)</option>
                                            <option value="mp">Северные Марианские острова (Northern Mariana Islands)
                                            </option>
                                            <option value="sc">Сейшелы (Seychelles)</option>
                                            <option value="sn">Сенегал (Senegal)</option>
                                            <option value="pm">Сен-Пьер и Микелон (St Pierre and Miquelon)</option>
                                            <option value="vc">Сент-Винсент и Гренадины (St Vincent and the
                                                Grenadines)
                                            </option>
                                            <option value="kn">Сент-Китс и Невис (St Kitts and Nevis)</option>
                                            <option value="lc">Сент-Люсия (St Lucia)</option>
                                            <option value="rs">Сербия (Serbia)</option>
                                            <option value="sg">Сингапур (Singapore)</option>
                                            <option value="sy">Сирийская Арабская Республика (Siriyskaya Arabskaya
                                                Respublika, Posol'stvo)
                                            </option>
                                            <option value="sk">Словакия (Slovakia)</option>
                                            <option value="si">Словения (Slovenia)</option>
                                            <option value="gb">Соединенное Королевство (United Kingdom)</option>
                                            <option value="us">Соединенные Штаты (Soyedinennye Shtaty Ameriki (SShA)
                                                Konsul'skiy Otdel)
                                            </option>
                                            <option value="sb">Соломоновы острова (Solomon Islands)</option>
                                            <option value="so">Сомали (Somalia)</option>
                                            <option value="sd">Судан (Sudan)</option>
                                            <option value="sr">Суринам (Suriname)</option>
                                            <option value="sl">Сьерра-Леоне (Sierra Leone)</option>
                                            <option value="tj">Таджикистан (Tajikistan)</option>
                                            <option value="th">Таиланд (Thailand)</option>
                                            <option value="tw">Тайвань (Китай) (Taiwan)</option>
                                            <option value="tz">Танзания) Объединенная Республика (United Republic of
                                                Tanzania)
                                            </option>
                                            <option value="tl">Тимор-Лесте (Timor-Leste)</option>
                                            <option value="tg">Того (Togo)</option>
                                            <option value="tk">Токелау (Tokelau)</option>
                                            <option value="to">Тонга (Tonga)</option>
                                            <option value="tt">Тринидад и Тобаго (Trinidad and Tobago)</option>
                                            <option value="tv">Тувалу (Tuvalu)</option>
                                            <option value="tn">Тунис (Tunisia)</option>
                                            <option value="tm">Туркмения (Turkmenistan)</option>
                                            <option value="tr">Турция (Turkey)</option>
                                            <option value="ug">Уганда (Uganda)</option>
                                            <option value="uz">Узбекистан (Uzbekistan)</option>
                                            <option value="ua">Украина (Ukraine)</option>
                                            <option value="wf">Уоллис и Футуна (Wallis and Futuna)</option>
                                            <option value="uy">Уругвай (Uruguay)</option>
                                            <option value="fo">Фарерские острова (Faroe Islands)</option>
                                            <option value="fj">Фиджи (Fiji)</option>
                                            <option value="ph">Филиппины (Philippines)</option>
                                            <option value="fi">Финляндия (Finland)</option>
                                            <option value="fk">Фолклендские острова (Мальвинские) (Falkland Islands)
                                            </option>
                                            <option value="fr">Франция (France)</option>
                                            <option value="gf">Французская Гвиана (French Guiana)</option>
                                            <option value="pf">Французская Полинезия (French Polynesia)</option>
                                            <option value="tf">Французские Южные территории (French Southern and
                                                Antarctic Lands)
                                            </option>
                                            <option value="hr">Хорватия (Croatia)</option>
                                            <option value="cf">Центрально-Африканская Республика (Central African
                                                Republic)
                                            </option>
                                            <option value="td">Чад (Chad)</option>
                                            <option value="me">Черногория (Montenegro)</option>
                                            <option value="cz">Чешская Республика (Czech Republic)</option>
                                            <option value="cl">Чили (Chile)</option>
                                            <option value="ch">Швейцария (Switzerland)</option>
                                            <option value="se">Швеция (Sweden)</option>
                                            <option value="sj">Шпицберген и Ян Майен (Svalbard and Jan Mayen)</option>
                                            <option value="lk">Шри-Ланка (Sri Lanka)</option>
                                            <option value="ec">Эквадор (Ecuador)</option>
                                            <option value="gq">Экваториальная Гвинея (Equatorial Guinea)</option>
                                            <option value="ax">Эландские острова (Åland Islands)</option>
                                            <option value="sv">Эль-Сальвадор (El Salvador)</option>
                                            <option value="er">Эритрея (Eritrea)</option>
                                            <option value="ee">Эстония (Estonia)</option>
                                            <option value="et">Эфиопия (Ethiopia)</option>
                                            <option value="za">Южная Африка (South Africa)</option>
                                            <option value="gs">Южная Джорджия и Южные Сандвичевы острова (South Georgia
                                                and the South Sandwich Islands)
                                            </option>
                                            <option value="kr">Южная Корея (South Korea)</option>
                                            <option value="jm">Ямайка (Jamaica)</option>
                                            <option value="jp">Япония (Japan)</option>
                                        </select>
                                    </div>
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="international">
                                    <label for="check-1">Интернацианальный</label>
                                </div>
                                <div class="form-group-lk">
                                    <label>Сайт сервера:</label>
                                    <input type="url"
                                           class="text-ing-lk {{ $errors->has('site') ? 'error-input' : '' }}"
                                           name="site" value="{{ old('site') }}" placeholder="http://site.ru" required>
                                    @if ($errors->has('site'))
                                        <span class="error-message">Ссылка на сайт должны быть вида http://site.ru.</span>
                                    @endif
                                </div>
                                <div class="form-group-lk">
                                    <label>Видио трейлер:</label>
                                    <input type="url" class="text-ing-lk" name="trailer" placeholder="Ссылка на Youtube"
                                           value="{{ old('trailer') }}">
                                </div>
                                <div class="form-group-lk">
                                    <label>Введите теги:</label>
                                    <input type="text" class="text-ing-lk" name="tags" placeholder="Через запятую"
                                           value="{{ old('tags') }}">
                                </div>
                            </div>
                            <div class="rightBlockLk">
                            </div>
                            <div class="clear"></div>
                            <div class="text-area-lk">
                                <label>Кратакое описание сервера:</label>
                                <textarea
                                        class="textarea-style-lk {{ $errors->has('description') ? 'error-input' : '' }}"
                                        name="description" required minlength="30">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="error-message">Описание сервера должно быть не менее 80 символов.</span>
                                @endif
                            </div>
                            <div class="text-area-lk">
                                <label>Полное описание сервера:</label>
                                <textarea
                                        class="textarea-style-lk {{ $errors->has('fdescription') ? 'error-input' : '' }}"
                                        name="fdescription" required minlength="30">{{ old('fdescription') }}</textarea>
                                @if ($errors->has('fdescription'))
                                    <span class="error-message">Полное описание сервера должно быть не менее 80 символов.</span>
                                @endif
                            </div>
                            <p class="line-razdel"></p>
                            <div class="block-select-lk">
                                <input type="checkbox" id="check-2" class="lkCheckSucsess" name="adult">
                                <label for="check-2">Ограничение “Только для совершенолетних”</label> <br>
                                <input type="checkbox" id="check-3" class="lkCheckSucsess" name="bonus">
                                <label for="check-3">Начисляете ли Вы игрокам бонусы за голосование?</label>
                            </div>
                            <div class="block-select-lk" id="vote_description" style="display: none;">
                                <label>Правила голосования для игроков:</label>
                                {{--<div class="item-select-lk">--}}
                                {{--<select>--}}
                                {{--<option>Ник персоанажа</option>--}}
                                {{--<option>Ник персоанажа</option>--}}
                                {{--<option>Ник персоанажа</option>--}}
                                {{--<option>Ник персоанажа</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                <textarea class="textarea-style-lk"
                                          name="vote_description">{{ old('vote_description') }}</textarea>
                            </div>
                            {{--@if ($errors->any())--}}
                            {{--@foreach ($errors->all() as $error)--}}
                            {{--<span class="invalid-feedback" style="margin: 0">--}}
                            {{--<strong>{{ $error }}</strong>--}}
                            {{--</span>--}}
                            {{--@endforeach--}}
                            {{--@endif--}}

                            <button class="create-server">Следующий шаг ›</button>
                        </form>
                    @else
                        <div class="infoRegist">
                            Добавление сервера станет доступно после подтверждения почты и телефона.
                            <span><a href="{{ route('confirmation') }}">Подтвердите почту и телефон.</a></span>
                        </div>
                        <p class="lineReg"></p>
                    @endif
                </div>
            </div>
        </div>

        @endsection
        @section('scripts')
            <script>$("#addServerForm").validate();</script>
@endsection