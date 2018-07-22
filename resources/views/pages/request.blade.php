@extends('layouts.site')
@section('content')
    <div class="style-bg-content">
        <div class="content-bg-top">
            <div class="element-desing-1">
                <img src="img/elements/elem-1.png" alt="">
            </div>
            <div class="element-desing-3">
                <img src="img/elements/elem-3.png" alt="">
            </div>
        </div>
        <div class="contentLeft">
            <div class="segment-rek-top">
                <div class="bg-ramka-rek"></div>
                <a href=""><img src="img/rk/bn468.png" alt=""></a>
            </div>
            <div class="top-server-list">
                <div class="title-list-server">
                    <h1><i class="ico-title"><img src="img/icon/i20.png" alt=""></i>Техническая поддержка</h1>
                    <div class="clear"></div>
                </div>
                <div class="content-page">
                    Опишите свою проблему как можно конкретнее, для того что бы наши специалисты решили её в
                    масимально короткие сроки. <br><br>
                    Ответ прийдёт на <b>E-mail</b>, который вы укажите в форме связи.
                </div>
                <div class="form-comment">
                    <form>
                        <div class="form-group-lk">
                            <label>Введите свой e-mail:</label>
                            <input type="text" class="text-ing-lk" name="">
                        </div>
                        <div class="clear"></div>
                        <div class="text-area-comment">
                            <label>Опишите проблему</label>
                            <textarea class="textarea-style"></textarea>
                        </div>
                        <button class="send-comment">Отправить письмо</button>
                    </form>
                </div>
            </div>

        </div>
@endsection
