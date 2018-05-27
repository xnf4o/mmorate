@extends('layout')
@section('title', 'Добавление мира')
@section('content')
    <div class="news-container">
        <div class="contentLogoNews">
            <a href="{{ route('main') }}">
                <img src="/img/elements/logo.png" alt="">
            </a>
        </div>
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
                        <h1><i class="ico-title"><img src="/img/icon/l-3.png" alt=""></i><span>Добавление сервера</span></h1>
                        <div class="clear"></div>
                    </div>
                    <div class="content-lk-block">
                        <form action="{{ route('addWorld.post', $server->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="server_id" value="{{ $server->id }}">
                            <div class="leftBlockLk">

                                <div class="form-group-lk">
                                    <label>Введите название мира:</label>
                                    <input type="text" class="text-ing-lk" name="name">
                                </div>
                                <div class="form-group-lk">
                                    <span class="reteIcon">X</span>
                                    <label>Введите рейты:</label>
                                    <input type="text" class="text-ing-lk customInputRate" name="rate">
                                </div>
                                <div class="block-select-lk">
                                    <label>Выбирите тип мира:</label>
                                    <div class="item-select-lk">
                                        <select name="type">
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
                                    <label>Есть ли донат?:</label>
                                    <div class="item-select-lk">
                                        <select name="donate">
                                            <option value="0">Нет</option>
                                            <option value="1">Вещи, влияющие на экономику</option>
                                            <option value="2">Вещи, не влияющие на экономику</option></select>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group-lk">
                                    <label>Игроков онлайн:</label>
                                    <input type="text" class="text-ing-lk" name="onlineUrl">
                                    <span>Введите данные онлайна вручную или укажите ссылку на текстовый файл, например: http://example.com/online.txt</span>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="text-area-lk-srv">
                                <label>Описание мира:</label>
                                <textarea class="textarea-style-lk" name="description"></textarea>
                            </div>
                            <div class="leftBlockLk">

                                <div class="form-group-lk">
                                    <label>IP Логин сервера: Порт:</label>
                                    <input type="text" class="text-ing-lk" name="IpLogin">
                                </div>
                                <div class="form-group-lk">
                                    <label>IP Гейм сервера: Порт</label>
                                    <input type="text" class="text-ing-lk" name="IpGame">
                                </div>
                                <div class="form-group-lk">
                                    <label>Дата создания:</label>
                                    <input type="text" class="text-ing-lk" name="created">
                                </div>
                                <div class="block-select-lk">
                                    <label>Статус:</label>
                                    <div class="item-select-lk">
                                        <select name="status">
                                            <option value="open">Открытый</option>
                                            <option value="openBeta">Открытый Бета тест</option>
                                            <option value="closedBeta">Закрытый Бета тест</option>
                                            <option value="closed">Закрытый</option>
                                        </select>
                                    </div>
                                </div>
                                @if($server->game == 'linegae' || $server->game == 'wow')
                                <div class="block-select-lk">
                                    <label>Версия игры:</label>
                                    <div class="item-select-lk">
                                        <select name="gameVersion">
                                            @if($server->game == 'lineage')
                                                <option value="Lineage 2 The 1st Throne: The Kamael">Lineage 2 The 1st Throne: The Kamael</option>
                                                <option value="Lineage 2 Saga 2: The Chaotic Throne">Lineage 2 Saga 2: The Chaotic Throne</option>
                                                <option value="Lineage 2: Interlude">Lineage 2: Interlude</option>
                                                <option value="Lineage 2 The 1st Throne: Hellbound">Lineage 2 The 1st Throne: Hellbound</option>
                                                <option value="Lineage 2 The 2nd Throne: Gracia">Lineage 2 The 2nd Throne: Gracia</option>
                                                <option value="Lineage 2 Chronicle 4: Scions of Destiny">Lineage 2 Chronicle 4: Scions of Destiny</option>
                                                <option value="Lineage 2 Saga 1: The Chaotic Chronicles">Lineage 2 Saga 1: The Chaotic Chronicles</option>
                                                <option value="Lineage 2: Prelude">Lineage 2: Prelude</option>
                                                <option value="Lineage 2 Chronicle 1: Harbingers of War">Lineage 2 Chronicle 1: Harbingers of War</option>
                                                <option value="Lineage 2 Chronicle 2: Age of Splendor">Lineage 2 Chronicle 2: Age of Splendor</option>
                                                <option value="Lineage 2 Chronicle 3: Rise of Darkness">Lineage 2 Chronicle 3: Rise of Darkness</option>
                                                <option value="Lineage 2 Chronicle 5: Oath of Blood">Lineage 2 Chronicle 5: Oath of Blood</option>
                                                <option value="Lineage 2 The 2nd Throne: Gracia Part 1">Lineage 2 The 2nd Throne: Gracia Part 1</option>
                                                <option value="Lineage 2 The 2nd Throne: Gracia Part 2">Lineage 2 The 2nd Throne: Gracia Part 2</option>
                                                <option value="Lineage 2 The 2nd Throne: Gracia Final">Lineage 2 The 2nd Throne: Gracia Final</option>
                                                <option value="Lineage 2 The 2nd Throne: Freya">Lineage 2 The 2nd Throne: Freya</option>
                                                <option value="Lineage 2: Gracia Plus">Lineage 2: Gracia Plus</option>
                                            @elseif($server->game == 'wow')
                                                <option value="World of Warcraft: Wrath of the Lich King">World of Warcraft: Wrath of the Lich King</option>
                                                <option value="World of Warcraft: Legion">World of Warcraft: Legion</option>
                                                <option value="World of Warcraft: Mists of Pandaria">World of Warcraft: Mists of Pandaria</option>
                                                <option value="World of Warcraft: Cataclysm">World of Warcraft: Cataclysm</option>
                                                <option value="World of Warcraft: The Burning Crus">World of Warcraft: The Burning Crusade</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                    @endif
                                <div class="block-select-lk">
                                    <label>Номер версии:</label>
                                    <div class="item-select-lk">
                                        <select name="versionNumber">
                                            @if($server->game == 'lineage')
                                                <option value="Goddess of Destruction">Goddess of Destruction</option>
                                                <option value="High Five">High Five</option>
                                                <option value="Freya">Freya</option>
                                                <option value="Gracia Final">Gracia Final</option>
                                                <option value="Gracia">Gracia</option>
                                                <option value="Epilogue">Epilogue</option>
                                                <option value="Hellbound">Hellbound</option>
                                                <option value="Kamael">Kamael</option>
                                                <option value="Interlude">Interlude</option>
                                                <option value="C5">C5</option>
                                                <option value="C4">C4</option>
                                                <option value="C3">C3</option>
                                                <option value="C2">C2</option>
                                                <option value="C1">C1</option>
                                                <option value="Ertheia">Ertheia</option>
                                                <option value="Lindvior">Lindvior</option>
                                                <option value="Awakening">Awakening</option>
                                                <option value="Harmony">Harmony</option>
                                                <option value="Tauti">Tauti</option>
                                                <option value="Glory Days">Glory Days</option>
                                                <option value="C1 Classic">C1 Classic</option>
                                                <option value="Odyssey">Odyssey</option>
                                                <option value="Helios">Helios</option>
                                                <option value="Classic 2.0">Classic 2.0</option>
                                                <option value="Classic 2.5">Classic 2.5</option>
                                                <option value="Grand Crusade">Grand Crusade</option>
                                                <option value="Salvation">Salvation</option>
                                            @elseif($server->game == 'aion')
                                                <option value="4.6">4.6</option>
                                                <option value="v1.5">v1.5</option>
                                                <option value="v1.9">v1.9</option>
                                                <option value="v2.0">v2.0</option>
                                                <option value="v2.1">v2.1</option>
                                                <option value="v2.5">v2.5</option>
                                                <option value="v2.6">v2.6</option>
                                                <option value="v2.7">v2.7</option>
                                                <option value="v3.0">v3.0</option>
                                                <option value="v3.5">v3.5</option>
                                                <option value="v3.6">v3.6</option>
                                                <option value="v3.7">v3.7</option>
                                                <option value="v3.9">v3.9</option>
                                                <option value="v4.0">v4.0</option>
                                                <option value="v4.3">v4.3</option>
                                                <option value="v4.">v4.5</option>
                                                <option value="v4.5.2">v4.5.2</option>
                                                <option value="v4.7.0">v4.7.0</option>
                                                <option value="v4.5.10">v4.5.10</option>
                                                <option value="4.5.0.16">4.5.0.16</option>
                                                <option value="4.8">4.8</option>
                                                <option value="v4.7.5">v4.7.5</option>
                                                <option value="v5.0">v5.0</option>
                                                <option value="v5.1">v5.1</option>
                                                <option value="v4.9">v4.9</option>
                                                <option value="v4.9.1">v4.9.1</option>
                                                <option value="v5.3">v5.3</option>
                                                <option value="v5.6">v5.6</option>
                                            @elseif($server->game == 'wow')
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
                                                @elseif($server->game == 'mu')
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="S4">S4</option>
                                                <option value="S5">S5</option>
                                                <option value="S6">S6</option>
                                                <option value="S8">S8</option>
                                                <option value="97d-99i">97d-99i</option>
                                                <option value="S1">S1</option>
                                                <option value="S7">S7</option>
                                                <option value="S9">S9</option>
                                                <option value="S10">S10</option>
                                                <option value="S11">S11</option>
                                                <option value="S12">S12</option>
                                                <option value="S13">S13</option>
                                                @elseif($server->game == 'rf')
                                                <option value="2.1.1">2.1.1</option>
                                                <option value="2.1.5">2.1.5</option>
                                                <option value="2.1.5.2">2.1.5.2</option>
                                                <option value="2.1.6">2.1.6</option>
                                                <option value="2.2.3">2.2.3</option>
                                                <option value="2.2.3.2">2.2.3.2</option>
                                                <option value="2.2.4">2.2.4</option>
                                                <option value="1.5">1.5</option>
                                                <option value="18.2.6">18.2.6</option>
                                                @elseif($server->game == 'jade')
                                                <option value="3.0.1">3.0.1</option>
                                                <option value="3.0.9">3.0.9</option>
                                                <option value="3.1.1">3.1.1</option>
                                                <option value="2.2.8">2.2.8</option>
                                                <option value="1.3.6">1.3.6</option>
                                                <option value="4.0.0">4.0.0</option>
                                                <option value="4.2.0">4.2.0</option>
                                                <option value="4.4.0">4.4.0</option>
                                                @elseif($server->game == 'perfect')
                                                <option value="1.3.6">1.3.6</option>
                                                <option value="1.3.7">1.3.7</option>
                                                <option value="1.4.4">1.4.4</option>
                                                <option value="1.4.5">1.4.5</option>
                                                <option value="1.4.6">1.4.6</option>
                                                <option value="1.4.7">1.4.7</option>
                                                <option value="1.5.0">1.5.0</option>
                                                <option value="1.4.8">1.4.8</option>
                                                <option value="1.5.1">1.5.1</option>
                                                <option value="1.4.2">1.4.2</option>
                                                <option value="1.4.0">1.4.0</option>
                                                <option value="1.4.3">1.4.3</option>
                                                <option value="1.5.2">1.5.2</option>
                                                <option value="1.4.1">1.4.1</option>
                                                <option value="1.5.3">1.5.3</option>
                                                <option value="1.5.4">1.5.4</option>
                                                <option value="1.5.5">1.5.5</option>
                                                <option value="1.5.6">1.5.6</option>
                                            @endif
                                        </select>
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
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="text-area-lk-srv">
                                <label>Описание модификаций:</label>
                                <textarea class="textarea-style-lk" name="modDesc"></textarea>
                            </div>
                            <div class="block-select-lk">
                                <input type="checkbox" id="check-1" class="lkCheckSucsess" name="clans">
                                <label for="check-1">Присутствует возможность переноса кланов?</label>
                            </div>
                            <div class="form-group-lk">
                                <label>Введите теги:</label>
                                <input type="text" class="text-ing-lk" name="tags" placeholder="Через запятую">
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="invalid-feedback" style="margin: 0">
                                                <strong>{{ $error }}</strong>
                                            </span>
                                @endforeach
                            @endif
                            <button class="create-server">Добавить сервер</button>
                        </form>
                    </div>
                </div>
            </div>
    @endsection()