@extends('layouts.site')
@section('content')
    @if(!isset($game))
        @php
            $game = request()->get('g')
        @endphp
    @endif
    <div class="style-bg-content">
        <div class="content-bg-lk">
            <div class="element-desing-1">
                <img src="/img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="/img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft @if(isset($game)){{ $game.'-img' }}@endif">
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
                                        <select name="game" {{ $errors->has('game') ? 'error-input' : '' }} required onchange="addGetParam(value);">
                                            <option value="0">-- Выберите игру --</option>
                                            <option value="aion" @if(request()->get('g') == 'aion') selected @endif>Aion</option>
                                            <option value="jade" @if(request()->get('g') == 'jade') selected @endif>Jade Dynasty</option>
                                            <option value="lineage" @if(request()->get('g') == 'lineage') selected @endif>Lineage 2</option>
                                            <option value="mu" @if(request()->get('g') == 'mu') selected @endif>Mu Online</option>
                                            <option value="perfect" @if(request()->get('g') == 'perfect') selected @endif>Perfect World</option>
                                            <option value="rf" @if(request()->get('g') == 'rf') selected @endif>RF Online</option>
                                            <option value="wow" @if(request()->get('g') == 'wow') selected @endif>World Of Warcraft</option>
                                            <option value="other" @if(request()->get('g') == 'other') selected @endif>Online Games</option>
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
                                    <label>Выбирите тип мира:</label>
                                    <div class="item-select-lk">
                                        <select name="type" required>
                                            <option value="normal">Normal</option>
                                            <option value="pvp">PVP</option>
                                            <option value="pve">PVE</option>
                                            <option value="rp">RP</option>
                                            <option value="rppvp">RPPVP</option>
                                            <option value="ffapvp">FFAPVP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="block-select-lk">
                                    <label>Номер версии:</label>
                                    <div class="item-select-lk">
                                        <select name="versionNumber" required>
                                            @if(request()->get('g') == 'lineage')
                                                <option value="Saga 1: The Chaotic Chronicles">Saga 1: The Chaotic Chronicles</option>
                                                <option value="Prelude">Prelude</option>
                                                <option value="Chronicle 1: Harbingers of War">Chronicle 1: Harbingers of War</option>
                                                <option value="Chronicle 2: Age of Splendor">Chronicle 2: Age of Splendor</option>
                                                <option value="Chronicle 3: Rise of Darkness">Chronicle 3: Rise of Darkness</option>
                                                <option value="Chronicle 4: Scions of Destiny">Chronicle 4: Scions of Destiny</option>
                                                <option value="Chronicle 5: Oath of Blood">Chronicle 5: Oath of Blood</option>
                                                <option value="Saga 2: The Chaotic Throne">Saga 2: The Chaotic Throne</option>
                                                <option value="Interlude">Interlude</option>
                                                <option value="The 1st Throne: The Kamael">The 1st Throne: The Kamael</option>
                                                <option value="The 1st Throne: Hellbound">The 1st Throne: Hellbound</option>
                                                <option value="The 2nd Throne: Gracia (Part 1, Part 2)">The 2nd Throne: Gracia (Part 1, Part 2)</option>
                                                <option value="The 2nd Throne: Gracia Final">The 2nd Throne: Gracia Final</option>
                                                <option value="Gracia Plus (Epiloque)">Gracia Plus (Epiloque)</option>
                                                <option value="The 2nd Throne: Freya">The 2nd Throne: Freya</option>
                                            @elseif(request()->get('g') == 'aion')
                                                <option value="v1.5">v1.5</option>
                                                <option value="v1.9">v1.9</option>
                                                <option value="v2.0">v2.0</option>
                                                <option value="v2.1">v2.1</option>
                                                <option value="v2.5">v2.5</option>
                                                <option value="v2.6">v2.6</option>
                                                <option value="v2.7">v2.7</option>
                                                <option value="v3.0">v3.0</option>
                                                <option value="v3.5">v3.5</option>
                                                <option value="v3.7">v3.7</option>
                                                <option value="v3.9">v3.9</option>
                                                <option value="v4.0">v4.0</option>
                                                <option value="v4.3">v4.3</option>
                                                <option value="v4.">v4.5</option>
                                                <option value="v4.5.2">v4.5.2</option>
                                                <option value="v4.5.10">v4.5.10</option>
                                                <option value="4.5.0.16">4.5.0.16</option>
                                                <option value="v4.6">v4.6</option>
                                                <option value="v4.7.0">v4.7.0</option>
                                                <option value="v4.7.5">v4.7.5</option>
                                                <option value="4.8">4.8</option>
                                                <option value="v4.9">v4.9</option>
                                                <option value="v4.9.1">v4.9.1</option>
                                                <option value="v5.0">v5.0</option>
                                                <option value="v5.1">v5.1</option>
                                                <option value="v5.3">v5.3</option>
                                                <option value="v5.6">v5.6</option>
                                            @elseif(request()->get('g') == 'wow')
                                                <option value="1.12.x">1.12.x</option>
                                                <option value="2.4.3">2.4.3</option>
                                                <option value="3.3.5">3.3.5</option>
                                                <option value="4.0.6a">4.0.6a</option>
                                                <option value="4.3.4">4.3.4</option>
                                                <option value="5.0.5">5.0.5</option>
                                                <option value="5.4.1">5.4.1</option>
                                                <option value="5.4.2">5.4.2</option>
                                                <option value="5.1.0">5.1.0</option>
                                                <option value="3.3.5a">3.3.5a</option>
                                                <option value="5.4.8">5.4.8</option>
                                                <option value="6.0.3">6.0.3</option>
                                                <option value="6.1.2">6.1.2</option>
                                                <option value="6.2.3">6.2.3</option>
                                                <option value="7.0.1">7.0.1</option>
                                                <option value="7.0.3">7.0.3</option>
                                                <option value="6.2.4">6.2.4</option>
                                                <option value="7.1.0">7.1.0</option>
                                                <option value="7.1.5">7.1.5</option>
                                                <option value="7.2.0">7.2.0</option>
                                                <option value="7.2.5">7.2.5</option>
                                                <option value="7.3.2">7.3.2</option>
                                                <option value="7.3.5">7.3.5</option>
                                            @elseif(request()->get('g') == 'mu')
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="S4">S4</option>
                                                <option value="S5">S5</option>
                                                <option value="S6">S6</option>
                                                <option value="S8">S8</option>
                                                <option value="S7">S7</option>
                                                <option value="S9">S9</option>
                                                <option value="S10">S10</option>
                                                <option value="S11">S11</option>
                                                <option value="S12">S12</option>
                                                <option value="S13">S13</option>
                                                <option value="97d-99i">97d-99i</option>
                                            @elseif(request()->get('g') == 'rf')
                                                <option value="1.5">1.5</option>
                                                <option value="2.1.1">2.1.1</option>
                                                <option value="2.1.5">2.1.5</option>
                                                <option value="2.1.5.2">2.1.5.2</option>
                                                <option value="2.1.6">2.1.6</option>
                                                <option value="2.2.3">2.2.3</option>
                                                <option value="2.2.3.2">2.2.3.2</option>
                                                <option value="2.2.4">2.2.4</option>
                                                <option value="18.2.6">18.2.6</option>
                                            @elseif(request()->get('g') == 'jade')
                                                <option value="3.0.1">3.0.1</option>
                                                <option value="3.0.9">3.0.9</option>
                                                <option value="3.1.1">3.1.1</option>
                                                <option value="2.2.8">2.2.8</option>
                                                <option value="1.3.6">1.3.6</option>
                                                <option value="4.0.0">4.0.0</option>
                                                <option value="4.2.0">4.2.0</option>
                                                <option value="4.4.0">4.4.0</option>
                                            @elseif(request()->get('g') == 'perfect')
                                                <option value="1.2.6">1.2.6</option>
                                                <option value="1.3.6">1.3.6</option>
                                                <option value="1.4.0">1.4.0</option>
                                                <option value="1.4.1">1.4.1</option>
                                                <option value="1.4.2">1.4.2</option>
                                                <option value="1.4.4">1.4.4</option>
                                                <option value="1.4.5">1.4.5</option>
                                                <option value="1.4.6">1.4.6</option>
                                                <option value="1.4.7">1.4.7</option>
                                                <option value="1.4.8">1.4.8</option>
                                                <option value="1.5.0">1.5.0</option>
                                                <option value="1.5.1">1.5.1</option>
                                                <option value="1.5.3">1.5.3</option>
                                                <option value="1.5.5">1.5.5</option>
                                                <option value="1.5.6">1.5.6</option>
                                                <option value="1.5.7">1.5.7</option>
                                                <option value="1.6.0">1.6.0</option>
                                            @endif
                                        </select>
                                        <a href="{{ route('support') }}">Нет необходимой версии?</a>
                                    </div>
                                </div>
                                <div class="block-select-lk">
                                    <label>Модификации:</label>
                                    <div class="item-select-lk">
                                        <select name="modification">
                                            <option value="0">Нет</option>
                                            <option value="1">Минимальные</option>
                                            <option value="2">Средние</option>
                                            <option value="3">Большие</option>
                                            <option value="4">Баланс классов</option>
                                            <option value="5">Дисбаланс</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="block-select-lk">
                                    <label>Есть ли донат?:</label>
                                    <div class="item-select-lk">
                                        <select name="donate" required>
                                            <option value="min">Минимальный</option>
                                            <option value="mid">Средний</option>
                                            <option value="max">Большой</option>
                                            <option value="1">Вещи, влияющие на экономику</option>
                                            <option value="2">Вещи, не влияющие на экономику</option>
                                        </select>
                                        </select>
                                    </div>
                                </div>
                                <div class="block-select-lk">
                                    <label>Статус:</label>
                                    <div class="item-select-lk">
                                        <select name="status" required>
                                            <option value="open">Открытый</option>
                                            <option value="openBeta">Открытый Бета тест</option>
                                            <option value="closedBeta">Закрытый Бета тест</option>
                                            <option value="closed">Закрытый</option>
                                        </select>
                                    </div>
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
            <script>
                $("#addServerForm").validate();
                function addGetParam(p) {
                    location.href="{{ Request::url().'/?g=' }}" + p ;
                }
            </script>
@endsection