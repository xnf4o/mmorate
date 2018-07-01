@extends('layouts.site')
@section('title', 'Редактирование сервера сервера ' . $server->name)
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
                        <h1><i class="ico-title"><img src="/img/icon/l-6.png" alt=""></i>Редактирования сервера</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="content-lk-block">
                        <form action="{{ route('editServer.post', $server->id) }}" method="post">
                            @csrf
                            <div class="leftBlockLk">
                                <div class="block-select-lk">
                                    <label>Выбирите игру:</label>
                                    <div class="item-select-lk">
                                        <select name="game" disabled>
                                            <option value="0" @if($server->game == '0') selected @endif>-- Выберите игру
                                                --
                                            </option>
                                            <option value="aion" @if($server->game == 'aion') selected @endif>Aion
                                            </option>
                                            <option value="jade" @if($server->game == 'jade') selected @endif>Jade
                                                Dynasty
                                            </option>
                                            <option value="lineage" @if($server->game == 'lineage') selected @endif>
                                                Lineage 2
                                            </option>
                                            <option value="mu" @if($server->game == 'mu') selected @endif>Mu Online
                                            </option>
                                            <option value="perfect" @if($server->game == 'perfect') selected @endif>
                                                Perfect World
                                            </option>
                                            <option value="rf" @if($server->game == 'rf') selected @endif>RF Online
                                            </option>
                                            <option value="wow" @if($server->game == 'wow') selected @endif>World Of
                                                Warcraft
                                            </option>
                                            <option value="other" @if($server->game == 'other') selected @endif>Online
                                                Games
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group-lk">
                                    <label>Название игрового сервера:</label>
                                    <input type="text" class="text-ing-lk" name="name" alt="Название игрового сервера"
                                           value="{{ $server->name }}">
                                </div>
                                <div class="block-select-lk">
                                    <label>Выбирите страну:</label>
                                    <div class="item-select-lk">
                                        <select name="country">
                                            <option value="au" @if($server->country == 'au') selected @endif>Австралия
                                                (Australia)
                                            </option>
                                            <option value="at" @if($server->country == 'at') selected @endif>Австрия
                                                (Austria)
                                            </option>
                                            <option value="az" @if($server->country == 'az') selected @endif>Азербайджан
                                                (Azerbaijan)
                                            </option>
                                            <option value="al" @if($server->country == 'al') selected @endif>Албания
                                                (Albania)
                                            </option>
                                            <option value="dz" @if($server->country == 'dz') selected @endif>Алжир
                                                (Algeria)
                                            </option>
                                            <option value="as" @if($server->country == 'as') selected @endif>
                                                Американское Самоа (American Samoa)
                                            </option>
                                            <option value="ai" @if($server->country == 'ai') selected @endif>Ангилья
                                                (Anguilla)
                                            </option>
                                            <option value="ao" @if($server->country == 'ao') selected @endif>Ангола
                                                (Angola)
                                            </option>
                                            <option value="ad" @if($server->country == 'ad') selected @endif>Андорра
                                                (Andorra)
                                            </option>
                                            <option value="ag" @if($server->country == 'ag') selected @endif>Антигуа и
                                                Барбуда (Antigua and Barbuda)
                                            </option>
                                            <option value="ar" @if($server->country == 'ar') selected @endif>Аргентина
                                                (Argentina)
                                            </option>
                                            <option value="am" @if($server->country == 'am') selected @endif>Армения
                                                (Armenia)
                                            </option>
                                            <option value="aw" @if($server->country == 'aw') selected @endif>Аруба
                                                (Aruba)
                                            </option>
                                            <option value="af" @if($server->country == 'af') selected @endif>Афганистан
                                                (Afghanistan)
                                            </option>
                                            <option value="bs" @if($server->country == 'bs') selected @endif>Багамы (The
                                                Bahamas)
                                            </option>
                                            <option value="bd" @if($server->country == 'bd') selected @endif>Бангладеш
                                                (Bangladesh)
                                            </option>
                                            <option value="bb" @if($server->country == 'bb') selected @endif>Барбадос
                                                (Barbados)
                                            </option>
                                            <option value="bh" @if($server->country == 'bh') selected @endif>Бахрейн
                                                (Bahrain)
                                            </option>
                                            <option value="by" @if($server->country == 'by') selected @endif>Беларусь
                                                (Belarus)
                                            </option>
                                            <option value="bz" @if($server->country == 'bz') selected @endif>Белиз
                                                (Belize)
                                            </option>
                                            <option value="be" @if($server->country == 'be') selected @endif>Бельгия
                                                (Belgium)
                                            </option>
                                            <option value="bj" @if($server->country == 'bj') selected @endif>Бенин
                                                (Benin)
                                            </option>
                                            <option value="bm" @if($server->country == 'bm') selected @endif>Бермуды
                                                (Bermuda)
                                            </option>
                                            <option value="bg" @if($server->country == 'bg') selected @endif>Болгария
                                                (Bulgaria)
                                            </option>
                                            <option value="bo" @if($server->country == 'bo') selected @endif>Боливия
                                                (Bolivia)
                                            </option>
                                            <option value="ba" @if($server->country == 'ba') selected @endif>Босния и
                                                Герцеговина (Bosnia and Herzegovina)
                                            </option>
                                            <option value="bw" @if($server->country == 'bw') selected @endif>Ботсвана
                                                (Botswana)
                                            </option>
                                            <option value="br" @if($server->country == 'br') selected @endif>Бразилия
                                                (Brazil)
                                            </option>
                                            <option value="io" @if($server->country == 'io') selected @endif>Британская
                                                территория в Индийском океане (British Indian Ocean Territory)
                                            </option>
                                            <option value="bn" @if($server->country == 'bn') selected @endif>
                                                Бруней-Даруссалам (Brunei Darussalam)
                                            </option>
                                            <option value="bf" @if($server->country == 'bf') selected @endif>
                                                Буркина-Фасо (Burkina Faso)
                                            </option>
                                            <option value="bi" @if($server->country == 'bi') selected @endif>Бурунди
                                                (Burundi)
                                            </option>
                                            <option value="bt" @if($server->country == 'bt') selected @endif>Бутан
                                                (Bhutan)
                                            </option>
                                            <option value="vu" @if($server->country == 'vu') selected @endif>Вануату
                                                (Vanuatu)
                                            </option>
                                            <option value="hu" @if($server->country == 'hu') selected @endif>Венгрия
                                                (Hungary)
                                            </option>
                                            <option value="ve" @if($server->country == 've') selected @endif>Венесуэла
                                                (Venezuela)
                                            </option>
                                            <option value="vg" @if($server->country == 'vg') selected @endif>Виргинские
                                                острова, Британские (British Virgin Islands)
                                            </option>
                                            <option value="vi" @if($server->country == 'vi') selected @endif>Виргинские
                                                острова, США (USA Virgin Islands)
                                            </option>
                                            <option value="vn" @if($server->country == 'vn') selected @endif>Вьетнам
                                                (Vietnam)
                                            </option>
                                            <option value="ga" @if($server->country == 'ga') selected @endif>Габон
                                                (Gabon)
                                            </option>
                                            <option value="ht" @if($server->country == 'ht') selected @endif>Гаити
                                                (Haiti)
                                            </option>
                                            <option value="gy" @if($server->country == 'gy') selected @endif>Гайана
                                                (Guyana)
                                            </option>
                                            <option value="gm" @if($server->country == 'gm') selected @endif>Гамбия (The
                                                Gambia)
                                            </option>
                                            <option value="gh" @if($server->country == 'gh') selected @endif>Гана
                                                (Ghana)
                                            </option>
                                            <option value="gp" @if($server->country == 'gp') selected @endif>Гваделупа
                                                (Guadeloupe)
                                            </option>
                                            <option value="gt" @if($server->country == 'gt') selected @endif>Гватемала
                                                (Guatemala)
                                            </option>
                                            <option value="gn" @if($server->country == 'gn') selected @endif>Гвинея
                                                (Guinea)
                                            </option>
                                            <option value="gw" @if($server->country == 'gw') selected @endif>
                                                Гвинея-Бисау (Guinea-Bissau)
                                            </option>
                                            <option value="de" @if($server->country == 'de') selected @endif>Германия
                                                (Germany)
                                            </option>
                                            <option value="gi" @if($server->country == 'gi') selected @endif>Гибралтар
                                                (Gibraltar)
                                            </option>
                                            <option value="hn" @if($server->country == 'hn') selected @endif>Гондурас
                                                (Honduras)
                                            </option>
                                            <option value="hk" @if($server->country == 'hk') selected @endif>Гонконг
                                                (Hong Kong)
                                            </option>
                                            <option value="gd" @if($server->country == 'gd') selected @endif>Гренада
                                                (Grenada)
                                            </option>
                                            <option value="gl" @if($server->country == 'gl') selected @endif>Гренландия
                                                (Greenland)
                                            </option>
                                            <option value="gr" @if($server->country == 'gr') selected @endif>Греция
                                                (Greece)
                                            </option>
                                            <option value="ge" @if($server->country == 'ge') selected @endif>Грузия
                                                (Georgia)
                                            </option>
                                            <option value="gu" @if($server->country == 'gu') selected @endif>Гуам
                                                (Guam)
                                            </option>
                                            <option value="dk" @if($server->country == 'dk') selected @endif>Дания
                                                (Denmark)
                                            </option>
                                            <option value="dj" @if($server->country == 'dj') selected @endif>Джибути
                                                (Djibouti)
                                            </option>
                                            <option value="dm" @if($server->country == 'dm') selected @endif>Доминика
                                                (Dominica)
                                            </option>
                                            <option value="do" @if($server->country == 'do') selected @endif>
                                                Доминиканская Республика (Dominican Republic)
                                            </option>
                                            <option value="eg" @if($server->country == 'eg') selected @endif>Египет
                                                (Egypt)
                                            </option>
                                            <option value="zm" @if($server->country == 'zm') selected @endif>Замбия
                                                (Zambia)
                                            </option>
                                            <option value="eh" @if($server->country == 'eh') selected @endif>Западная
                                                Сахара (Western Sahara)
                                            </option>
                                            <option value="zw" @if($server->country == 'zw') selected @endif>Зимбабве
                                                (Zimbabwe)
                                            </option>
                                            <option value="il" @if($server->country == 'il') selected @endif>Израиль
                                                (Israel)
                                            </option>
                                            <option value="in" @if($server->country == 'in') selected @endif>Индия
                                                (India)
                                            </option>
                                            <option value="id" @if($server->country == 'id') selected @endif>Индонезия
                                                (Indonesia)
                                            </option>
                                            <option value="jo" @if($server->country == 'jo') selected @endif>Иордания
                                                (Jordan)
                                            </option>
                                            <option value="iq" @if($server->country == 'iq') selected @endif>Ирак
                                                (Iraq)
                                            </option>
                                            <option value="ir" @if($server->country == 'ir') selected @endif>Иран,
                                                Исламская Республика (Iran)
                                            </option>
                                            <option value="ie" @if($server->country == 'ie') selected @endif>Ирландия
                                                (Ireland)
                                            </option>
                                            <option value="is" @if($server->country == 'is') selected @endif>Исландия
                                                (Iceland)
                                            </option>
                                            <option value="es" @if($server->country == 'es') selected @endif>Испания
                                                (Spain)
                                            </option>
                                            <option value="it" @if($server->country == 'it') selected @endif>Италия
                                                (Italy)
                                            </option>
                                            <option value="ye" @if($server->country == 'ye') selected @endif>Йемен
                                                (Yemen)
                                            </option>
                                            <option value="cv" @if($server->country == 'cv') selected @endif>Кабо-Верде
                                                (Cape Verde)
                                            </option>
                                            <option value="kz" @if($server->country == 'kz') selected @endif>Казахстан
                                                (Kazakhstan)
                                            </option>
                                            <option value="kh" @if($server->country == 'kh') selected @endif>Камбоджа
                                                (Cambodia)
                                            </option>
                                            <option value="cm" @if($server->country == 'cm') selected @endif>Камерун
                                                (Cameroon)
                                            </option>
                                            <option value="ca" @if($server->country == 'ca') selected @endif>Канада
                                                (Canada)
                                            </option>
                                            <option value="qa" @if($server->country == 'qa') selected @endif>Катар
                                                (Qatar)
                                            </option>
                                            <option value="ke" @if($server->country == 'ke') selected @endif>Кения
                                                (Kenya)
                                            </option>
                                            <option value="cy" @if($server->country == 'cy') selected @endif>Кипр
                                                (Cyprus)
                                            </option>
                                            <option value="kg" @if($server->country == 'kg') selected @endif>Киргизия
                                                (Kyrgyzstan)
                                            </option>
                                            <option value="ki" @if($server->country == 'ki') selected @endif>Кирибати
                                                (Kiribati)
                                            </option>
                                            <option value="cn" @if($server->country == 'cn') selected @endif>Китай
                                                (China)
                                            </option>
                                            <option value="cc" @if($server->country == 'cc') selected @endif>Кокосовые
                                                (Килинг) острова (Cocos (Keeling) Islands)
                                            </option>
                                            <option value="co" @if($server->country == 'co') selected @endif>Колумбия
                                                (Colombia)
                                            </option>
                                            <option value="km" @if($server->country == 'km') selected @endif>Коморы
                                                (Comoros)
                                            </option>
                                            <option value="cg" @if($server->country == 'cg') selected @endif>Конго
                                                (Congo)
                                            </option>
                                            <option value="cd" @if($server->country == 'cd') selected @endif>Конго)
                                                Демократическая Республика (Democratic Republic of the Congo)
                                            </option>
                                            <option value="cr" @if($server->country == 'cr') selected @endif>Коста-Рика
                                                (Costa Rica)
                                            </option>
                                            <option value="ci" @if($server->country == 'ci') selected @endif>Кот д'Ивуар
                                                (Côte d'Ivoire)
                                            </option>
                                            <option value="cu" @if($server->country == 'cu') selected @endif>Куба
                                                (Cuba)
                                            </option>
                                            <option value="kw" @if($server->country == 'kw') selected @endif>Кувейт
                                                (Kuwait)
                                            </option>
                                            <option value="la" @if($server->country == 'la') selected @endif>Лаос
                                                (Laos)
                                            </option>
                                            <option value="lv" @if($server->country == 'lv') selected @endif>Латвия
                                                (Latvia)
                                            </option>
                                            <option value="ls" @if($server->country == 'ls') selected @endif>Лесото
                                                (Lesotho)
                                            </option>
                                            <option value="lr" @if($server->country == 'lr') selected @endif>Либерия
                                                (Liberia)
                                            </option>
                                            <option value="lb" @if($server->country == 'lb') selected @endif>Ливан
                                                (Lebanon)
                                            </option>
                                            <option value="ly" @if($server->country == 'ly') selected @endif>Ливийская
                                                Арабская Джамахирия (Libya)
                                            </option>
                                            <option value="lt" @if($server->country == 'lt') selected @endif>Литва
                                                (Lithuania)
                                            </option>
                                            <option value="li" @if($server->country == 'li') selected @endif>Лихтенштейн
                                                (Liechtenstein)
                                            </option>
                                            <option value="lu" @if($server->country == 'lu') selected @endif>Люксембург
                                                (Luxembourg)
                                            </option>
                                            <option value="mu" @if($server->country == 'mu') selected @endif>Маврикий
                                                (Mauritius)
                                            </option>
                                            <option value="mr" @if($server->country == 'mr') selected @endif>Мавритания
                                                (Mauritania)
                                            </option>
                                            <option value="mg" @if($server->country == 'mg') selected @endif>Мадагаскар
                                                (Madagascar)
                                            </option>
                                            <option value="yt" @if($server->country == 'yt') selected @endif>Майотта
                                                (Mayotte)
                                            </option>
                                            <option value="mo" @if($server->country == 'mo') selected @endif>Макао
                                                (Macau)
                                            </option>
                                            <option value="mw" @if($server->country == 'mw') selected @endif>Малави
                                                (Malawi)
                                            </option>
                                            <option value="my" @if($server->country == 'my') selected @endif>Малайзия
                                                (Malaysia)
                                            </option>
                                            <option value="ml" @if($server->country == 'ml') selected @endif>Мали
                                                (Mali)
                                            </option>
                                            <option value="um" @if($server->country == 'um') selected @endif>Малые
                                                Тихоокеанские отдаленные острова Соединенных Штатов (United States Minor
                                                Outlying Islands)
                                            </option>
                                            <option value="mv" @if($server->country == 'mv') selected @endif>Мальдивы
                                                (Maldives)
                                            </option>
                                            <option value="mt" @if($server->country == 'mt') selected @endif>Мальта
                                                (Malta)
                                            </option>
                                            <option value="ma" @if($server->country == 'ma') selected @endif>Марокко
                                                (Morocco)
                                            </option>
                                            <option value="mq" @if($server->country == 'mq') selected @endif>Мартиника
                                                (Martinique)
                                            </option>
                                            <option value="mh" @if($server->country == 'mh') selected @endif>Маршалловы
                                                острова (Marshall Islands)
                                            </option>
                                            <option value="mx" @if($server->country == 'mx') selected @endif>Мексика
                                                (Mexico)
                                            </option>
                                            <option value="fm" @if($server->country == 'fm') selected @endif>Микронезия,
                                                Федеративные Штаты (Micronesia)
                                            </option>
                                            <option value="mz" @if($server->country == 'mz') selected @endif>Мозамбик
                                                (Mozambique)
                                            </option>
                                            <option value="md" @if($server->country == 'md') selected @endif>Молдова,
                                                Республика (Moldova)
                                            </option>
                                            <option value="mc" @if($server->country == 'mc') selected @endif>Монако
                                                (Monaco)
                                            </option>
                                            <option value="mn" @if($server->country == 'mn') selected @endif>Монголия
                                                (Mongolia)
                                            </option>
                                            <option value="ms" @if($server->country == 'ms') selected @endif>Монтсеррат
                                                (Montserrat)
                                            </option>
                                            <option value="mm" @if($server->country == 'mm') selected @endif>Мьянма
                                                (Myanmar (Burma))
                                            </option>
                                            <option value="na" @if($server->country == 'na') selected @endif>Намибия
                                                (Namibia)
                                            </option>
                                            <option value="nr" @if($server->country == 'nr') selected @endif>Науру
                                                (Nauru)
                                            </option>
                                            <option value="np" @if($server->country == 'np') selected @endif>Непал
                                                (Nepal)
                                            </option>
                                            <option value="ne" @if($server->country == 'ne') selected @endif>Нигер
                                                (Niger)
                                            </option>
                                            <option value="ng" @if($server->country == 'ng') selected @endif>Нигерия
                                                (Nigeria)
                                            </option>
                                            <option value="an" @if($server->country == 'an') selected @endif>
                                                Нидерландские Антилы (Netherlands Antilles)
                                            </option>
                                            <option value="nl" @if($server->country == 'nl') selected @endif>Нидерланды
                                                (The Netherlands)
                                            </option>
                                            <option value="ni" @if($server->country == 'ni') selected @endif>Никарагуа
                                                (Nicaragua)
                                            </option>
                                            <option value="nu" @if($server->country == 'nu') selected @endif>Ниуэ
                                                (Niue)
                                            </option>
                                            <option value="nz" @if($server->country == 'nz') selected @endif>Новая
                                                Зеландия (New Zealand)
                                            </option>
                                            <option value="nc" @if($server->country == 'nc') selected @endif>Новая
                                                Каледония (New Caledonia)
                                            </option>
                                            <option value="no" @if($server->country == 'no') selected @endif>Норвегия
                                                (Norway)
                                            </option>
                                            <option value="ae" @if($server->country == 'ae') selected @endif>
                                                Объединенные Арабские Эмираты (United Arab Emirates)
                                            </option>
                                            <option value="om" @if($server->country == 'om') selected @endif>Оман
                                                (Oman)
                                            </option>
                                            <option value="ky" @if($server->country == 'ky') selected @endif>Острова
                                                Кайман (Cayman Islands)
                                            </option>
                                            <option value="ck" @if($server->country == 'ck') selected @endif>Острова
                                                Кука (Cook Islands)
                                            </option>
                                            <option value="tc" @if($server->country == 'tc') selected @endif>Острова
                                                Теркс и Кайкос (Turks and Caicos Islands)
                                            </option>
                                            <option value="bv" @if($server->country == 'bv') selected @endif>Остров Буве
                                                (Bouvet Island)
                                            </option>
                                            <option value="nf" @if($server->country == 'nf') selected @endif>Остров
                                                Норфолк (Norfolk Island)
                                            </option>
                                            <option value="cx" @if($server->country == 'cx') selected @endif>Остров
                                                Рождества (Christmas Island)
                                            </option>
                                            <option value="hm" @if($server->country == 'hm') selected @endif>Остров Херд
                                                и острова Макдональд (Heard Island and McDonald Islands)
                                            </option>
                                            <option value="pk" @if($server->country == 'pk') selected @endif>Пакистан
                                                (Pakistan)
                                            </option>
                                            <option value="pw" @if($server->country == 'pw') selected @endif>Палау
                                                (Palau)
                                            </option>
                                            <option value="ps" @if($server->country == 'ps') selected @endif>
                                                Палестинская территория, оккупированная (Palestine)
                                            </option>
                                            <option value="pa" @if($server->country == 'pa') selected @endif>Панама
                                                (Panama)
                                            </option>
                                            <option value="va" @if($server->country == 'va') selected @endif>Папский
                                                Престол (Государство &amp;mdash; город Ватикан) (Vatican City)
                                            </option>
                                            <option value="pg" @if($server->country == 'pg') selected @endif>Папуа-Новая
                                                Гвинея (Papua New Guinea)
                                            </option>
                                            <option value="py" @if($server->country == 'py') selected @endif>Парагвай
                                                (Paraguay)
                                            </option>
                                            <option value="pe" @if($server->country == 'pe') selected @endif>Перу
                                                (Peru)
                                            </option>
                                            <option value="pn" @if($server->country == 'pn') selected @endif>Питкерн
                                                (Pitcairn Islands)
                                            </option>
                                            <option value="pl" @if($server->country == 'pl') selected @endif>Польша
                                                (Poland)
                                            </option>
                                            <option value="pt" @if($server->country == 'pt') selected @endif>Португалия
                                                (Portugal)
                                            </option>
                                            <option value="pr" @if($server->country == 'pr') selected @endif>Пуэрто-Рико
                                                (Puerto Rico)
                                            </option>
                                            <option value="mk" @if($server->country == 'mk') selected @endif>Республика
                                                Македония (Macedonia (FYROM))
                                            </option>
                                            <option value="re" @if($server->country == 're') selected @endif>Реюньон
                                                (Reunion)
                                            </option>
                                            <option value="ru" @if($server->country == 'ru') selected @endif>Россия
                                                (Russian Federation)
                                            </option>
                                            <option value="rw" @if($server->country == 'rw') selected @endif>Руанда
                                                (Rwanda)
                                            </option>
                                            <option value="ro" @if($server->country == 'ro') selected @endif>Румыния
                                                (Romania)
                                            </option>
                                            <option value="ws" @if($server->country == 'ws') selected @endif>Самоа
                                                (Samoa)
                                            </option>
                                            <option value="sm" @if($server->country == 'sm') selected @endif>Сан-Марино
                                                (San Marino)
                                            </option>
                                            <option value="st" @if($server->country == 'st') selected @endif>Сан-Томе и
                                                Принсипи (São Tomé and Príncipe)
                                            </option>
                                            <option value="sa" @if($server->country == 'sa') selected @endif>Саудовская
                                                Аравия (Saudi Arabia)
                                            </option>
                                            <option value="sz" @if($server->country == 'sz') selected @endif>Свазиленд
                                                (Swaziland)
                                            </option>
                                            <option value="sh" @if($server->country == 'sh') selected @endif>Святая
                                                Елена (St Helena)
                                            </option>
                                            <option value="kp" @if($server->country == 'kp') selected @endif>Северная
                                                Корея (North Korea)
                                            </option>
                                            <option value="mp" @if($server->country == 'mp') selected @endif>Северные
                                                Марианские острова (Northern Mariana Islands)
                                            </option>
                                            <option value="sc" @if($server->country == 'sc') selected @endif>Сейшелы
                                                (Seychelles)
                                            </option>
                                            <option value="sn" @if($server->country == 'sn') selected @endif>Сенегал
                                                (Senegal)
                                            </option>
                                            <option value="pm" @if($server->country == 'pm') selected @endif>Сен-Пьер и
                                                Микелон (St Pierre and Miquelon)
                                            </option>
                                            <option value="vc" @if($server->country == 'vc') selected @endif>
                                                Сент-Винсент и Гренадины (St Vincent and the Grenadines)
                                            </option>
                                            <option value="kn" @if($server->country == 'kn') selected @endif>Сент-Китс и
                                                Невис (St Kitts and Nevis)
                                            </option>
                                            <option value="lc" @if($server->country == 'lc') selected @endif>Сент-Люсия
                                                (St Lucia)
                                            </option>
                                            <option value="rs" @if($server->country == 'rs') selected @endif>Сербия
                                                (Serbia)
                                            </option>
                                            <option value="sg" @if($server->country == 'sg') selected @endif>Сингапур
                                                (Singapore)
                                            </option>
                                            <option value="sy" @if($server->country == 'sy') selected @endif>Сирийская
                                                Арабская Республика (Siriyskaya Arabskaya Respublika, Posol'stvo)
                                            </option>
                                            <option value="sk" @if($server->country == 'sk') selected @endif>Словакия
                                                (Slovakia)
                                            </option>
                                            <option value="si" @if($server->country == 'si') selected @endif>Словения
                                                (Slovenia)
                                            </option>
                                            <option value="gb" @if($server->country == 'gb') selected @endif>Соединенное
                                                Королевство (United Kingdom)
                                            </option>
                                            <option value="us" @if($server->country == 'us') selected @endif>Соединенные
                                                Штаты (Soyedinennye Shtaty Ameriki (SShA) Konsul'skiy Otdel)
                                            </option>
                                            <option value="sb" @if($server->country == 'sb') selected @endif>Соломоновы
                                                острова (Solomon Islands)
                                            </option>
                                            <option value="so" @if($server->country == 'so') selected @endif>Сомали
                                                (Somalia)
                                            </option>
                                            <option value="sd" @if($server->country == 'sd') selected @endif>Судан
                                                (Sudan)
                                            </option>
                                            <option value="sr" @if($server->country == 'sr') selected @endif>Суринам
                                                (Suriname)
                                            </option>
                                            <option value="sl" @if($server->country == 'sl') selected @endif>
                                                Сьерра-Леоне (Sierra Leone)
                                            </option>
                                            <option value="tj" @if($server->country == 'tj') selected @endif>Таджикистан
                                                (Tajikistan)
                                            </option>
                                            <option value="th" @if($server->country == 'th') selected @endif>Таиланд
                                                (Thailand)
                                            </option>
                                            <option value="tw" @if($server->country == 'tw') selected @endif>Тайвань
                                                (Китай) (Taiwan)
                                            </option>
                                            <option value="tz" @if($server->country == 'tz') selected @endif>Танзания)
                                                Объединенная Республика (United Republic of Tanzania)
                                            </option>
                                            <option value="tl" @if($server->country == 'tl') selected @endif>Тимор-Лесте
                                                (Timor-Leste)
                                            </option>
                                            <option value="tg" @if($server->country == 'tg') selected @endif>Того
                                                (Togo)
                                            </option>
                                            <option value="tk" @if($server->country == 'tk') selected @endif>Токелау
                                                (Tokelau)
                                            </option>
                                            <option value="to" @if($server->country == 'to') selected @endif>Тонга
                                                (Tonga)
                                            </option>
                                            <option value="tt" @if($server->country == 'tt') selected @endif>Тринидад и
                                                Тобаго (Trinidad and Tobago)
                                            </option>
                                            <option value="tv" @if($server->country == 'tv') selected @endif>Тувалу
                                                (Tuvalu)
                                            </option>
                                            <option value="tn" @if($server->country == 'tn') selected @endif>Тунис
                                                (Tunisia)
                                            </option>
                                            <option value="tm" @if($server->country == 'tm') selected @endif>Туркмения
                                                (Turkmenistan)
                                            </option>
                                            <option value="tr" @if($server->country == 'tr') selected @endif>Турция
                                                (Turkey)
                                            </option>
                                            <option value="ug" @if($server->country == 'ug') selected @endif>Уганда
                                                (Uganda)
                                            </option>
                                            <option value="uz" @if($server->country == 'uz') selected @endif>Узбекистан
                                                (Uzbekistan)
                                            </option>
                                            <option value="ua" @if($server->country == 'ua') selected @endif>Украина
                                                (Ukraine)
                                            </option>
                                            <option value="wf" @if($server->country == 'wf') selected @endif>Уоллис и
                                                Футуна (Wallis and Futuna)
                                            </option>
                                            <option value="uy" @if($server->country == 'uy') selected @endif>Уругвай
                                                (Uruguay)
                                            </option>
                                            <option value="fo" @if($server->country == 'fo') selected @endif>Фарерские
                                                острова (Faroe Islands)
                                            </option>
                                            <option value="fj" @if($server->country == 'fj') selected @endif>Фиджи
                                                (Fiji)
                                            </option>
                                            <option value="ph" @if($server->country == 'ph') selected @endif>Филиппины
                                                (Philippines)
                                            </option>
                                            <option value="fi" @if($server->country == 'fi') selected @endif>Финляндия
                                                (Finland)
                                            </option>
                                            <option value="fk" @if($server->country == 'fk') selected @endif>
                                                Фолклендские острова (Мальвинские) (Falkland Islands)
                                            </option>
                                            <option value="fr" @if($server->country == 'fr') selected @endif>Франция
                                                (France)
                                            </option>
                                            <option value="gf" @if($server->country == 'gf') selected @endif>Французская
                                                Гвиана (French Guiana)
                                            </option>
                                            <option value="pf" @if($server->country == 'pf') selected @endif>Французская
                                                Полинезия (French Polynesia)
                                            </option>
                                            <option value="tf" @if($server->country == 'tf') selected @endif>Французские
                                                Южные территории (French Southern and Antarctic Lands)
                                            </option>
                                            <option value="hr" @if($server->country == 'hr') selected @endif>Хорватия
                                                (Croatia)
                                            </option>
                                            <option value="cf" @if($server->country == 'cf') selected @endif>
                                                Центрально-Африканская Республика (Central African Republic)
                                            </option>
                                            <option value="td" @if($server->country == 'td') selected @endif>Чад
                                                (Chad)
                                            </option>
                                            <option value="me" @if($server->country == 'me') selected @endif>Черногория
                                                (Montenegro)
                                            </option>
                                            <option value="cz" @if($server->country == 'cz') selected @endif>Чешская
                                                Республика (Czech Republic)
                                            </option>
                                            <option value="cl" @if($server->country == 'cl') selected @endif>Чили
                                                (Chile)
                                            </option>
                                            <option value="ch" @if($server->country == 'ch') selected @endif>Швейцария
                                                (Switzerland)
                                            </option>
                                            <option value="se" @if($server->country == 'se') selected @endif>Швеция
                                                (Sweden)
                                            </option>
                                            <option value="sj" @if($server->country == 'sj') selected @endif>Шпицберген
                                                и Ян Майен (Svalbard and Jan Mayen)
                                            </option>
                                            <option value="lk" @if($server->country == 'lk') selected @endif>Шри-Ланка
                                                (Sri Lanka)
                                            </option>
                                            <option value="ec" @if($server->country == 'ec') selected @endif>Эквадор
                                                (Ecuador)
                                            </option>
                                            <option value="gq" @if($server->country == 'gq') selected @endif>
                                                Экваториальная Гвинея (Equatorial Guinea)
                                            </option>
                                            <option value="ax" @if($server->country == 'ax') selected @endif>Эландские
                                                острова (Åland Islands)
                                            </option>
                                            <option value="sv" @if($server->country == 'sv') selected @endif>
                                                Эль-Сальвадор (El Salvador)
                                            </option>
                                            <option value="er" @if($server->country == 'er') selected @endif>Эритрея
                                                (Eritrea)
                                            </option>
                                            <option value="ee" @if($server->country == 'ee') selected @endif>Эстония
                                                (Estonia)
                                            </option>
                                            <option value="et" @if($server->country == 'et') selected @endif>Эфиопия
                                                (Ethiopia)
                                            </option>
                                            <option value="za" @if($server->country == 'za') selected @endif>Южная
                                                Африка (South Africa)
                                            </option>
                                            <option value="gs" @if($server->country == 'gs') selected @endif>Южная
                                                Джорджия и Южные Сандвичевы острова (South Georgia and the South
                                                Sandwich Islands)
                                            </option>
                                            <option value="kr" @if($server->country == 'kr') selected @endif>Южная Корея
                                                (South Korea)
                                            </option>
                                            <option value="jm" @if($server->country == 'jm') selected @endif>Ямайка
                                                (Jamaica)
                                            </option>
                                            <option value="jp" @if($server->country == 'jp') selected @endif>Япония
                                                (Japan)
                                            </option>
                                        </select>
                                    </div>
                                    <input type="checkbox" id="check-1" class="lkCheckSucsess" name="international"
                                           @if($server->international == 1) checked @endif>
                                    <label for="check-1">Интернацианальный</label>
                                </div>
                                <div class="form-group-lk">
                                    <label>Сайт сервера:</label>
                                    <input type="text" class="text-ing-lk" name="site" value="{{ $server->site }}">
                                </div>
                                <div class="form-group-lk">
                                    <label>Видио трейлер:</label>
                                    <input type="text" class="text-ing-lk" name="video" placeholder="Ссылка на Youtube"
                                           value="{{ $server->video }}">
                                </div>
                                <div class="form-group-lk">
                                    <label>Введите теги:</label>
                                    <input type="text" class="text-ing-lk" name="tags" placeholder="Через запятую"
                                           value="{{ $server->tags }}">
                                </div>
                            </div>
                            <div class="rightBlockLk">
                            </div>
                            <div class="clear"></div>
                            <div class="text-area-lk">
                                <label>Краткое описание сервера:</label>
                                <textarea class="textarea-style-lk"
                                          name="description">{{ $server->description }}</textarea>
                            </div>
                            <div class="text-area-lk">
                                <label>Полное описание сервера:</label>
                                <textarea class="textarea-style-lk"
                                          name="description">{{ $server->fdescription }}</textarea>
                            </div>
                            <p class="line-razdel"></p>
                            <div class="block-select-lk">
                                <input type="checkbox" id="check-2" class="lkCheckSucsess" name="adult"
                                       @if($server->adult == 1) checked @endif>
                                <label for="check-2">Ограничение “Только для совершенолетних”</label> <br>
                                <input type="checkbox" id="check-3" class="lkCheckSucsess" name="bonus"
                                       @if($server->bonus == 1) checked @endif>
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
                                          name="vote_description">{{ $server->vote_description }}</textarea>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="invalid-feedback" style="margin: 0">
                                                <strong>{{ $error }}</strong>
                                            </span>
                                @endforeach
                            @endif

                            <button class="create-server">Сохранить изменения ›</button>
                        </form>
                    </div>
                </div>
            </div>

@endsection