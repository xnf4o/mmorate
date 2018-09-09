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
                    <h1><i class="ico-title"><img src="/img/icon/l-3.png" alt=""></i><span>Добавление сервера</span>
                    </h1>
                    <div class="clear"></div>
                </div>
                <div class="content-lk-block">
                    <form action="{{ route('editWorld.post', $world->id) }}" method="post" id="addWorldForm">
                        @csrf
                        <input type="hidden" name="world_id" value="{{ $world->id }}">
                        <div class="leftBlockLk">

                            <div class="form-group-lk">
                                <label>Введите название мира:</label>
                                <input type="text" class="text-ing-lk" name="name" value="{{ $world->name }}" required
                                       minlength="3">
                            </div>
                            <div class="form-group-lk">
                                <span class="reteIcon">X</span>
                                <label>Введите рейты:</label>
                                <input type="number" class="text-ing-lk customInputRate" name="rate"
                                       value="{{ $world->rate }}" required>
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
                                <label>Есть ли донат?:</label>
                                <div class="item-select-lk">
                                    <select name="donate" required>
                                        <option value="0">Нет</option>
                                        <option value="1">Вещи, влияющие на экономику</option>
                                        <option value="2">Вещи, не влияющие на экономику</option>
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group-lk">
                                <label>Игроков онлайн:</label>
                                <input type="text" class="text-ing-lk" name="onlineUrl"
                                       value="{{ $world->onlineUrl }}" required>
                                <span>Введите данные онлайна вручную</span>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="text-area-lk-srv">
                            <label>Описание мира:</label>
                            <textarea class="textarea-style-lk"
                                      name="description" required minlength="30">{{ $world->description }}</textarea>
                        </div>
                        <div class="leftBlockLk">

                            <div class="form-group-lk">
                                <label>IP:PORT Логин сервера:</label>
                                <input type="text" class="text-ing-lk" name="IpLogin" value="{{ $world->IpLogin }}"
                                       id="ipLog"
                                       required>
                                <span id="ipLogSpan"></span>
                            </div>
                            <div class="form-group-lk">
                                <label>IP:PORT Гейм сервера:</label>
                                <input type="text" class="text-ing-lk" name="IpGame" value="{{ $world->IpGame }}"
                                       id="ipGame"
                                       required>
                                <span id="ipGameSpan"></span>
                            </div>
                            <div class="form-group-lk">
                                <label>Дата создания:</label>
                                <input type="text" class="text-ing-lk" name="created" id="created" data-lang="ru"
                                       data-years="50" data-format="DD.MM.YYYY" data-sundayfirst="false"
                                       value="{{ $world->created }}" required>
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
                            <textarea class="textarea-style-lk" name="modDesc" required
                                      minlength="30">{{ $world->modDesc }}</textarea>
                        </div>
                        <div class="block-select-lk">
                            <input type="checkbox" id="check-1" class="lkCheckSucsess" name="clans">
                            <label for="check-1">Присутствует возможность переноса кланов?</label>
                        </div>
                        <div class="form-group-lk">
                            <label>Введите теги:</label>
                            <input type="text" class="text-ing-lk" name="tags" placeholder="Через запятую"
                                   value="{{ $world->tags }}">
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <span class="invalid-feedback" style="margin: 0">
                                                <strong>{{ $error }}</strong>
                                            </span>
                            @endforeach
                        @endif
                        <button class="create-server">Сохранить изменения</button>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('scripts')
            <script>$("#addWorldForm").validate();</script>
@endsection