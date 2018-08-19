<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use MMORATE\Servers;
use SEO;

class PagesController extends Controller
{

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Выход
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * О нас
     */
    public function about()
    {
        SEO::setTitle('О проекте');
        return view('pages.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Правила
     */
    public function rules()
    {
        SEO::setTitle('Правила');
        return view('pages.rules');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Контакты
     */
    public function contacts()
    {
        SEO::setTitle('Контакты');
        return view('pages.contacts');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Поддержка
     */
    public function support()
    {
        SEO::setTitle('Техническая поддержка');
        return view('pages.support');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Поддержка
     */
    public function request()
    {
        SEO::setTitle('Запрос в техническую поддержку');
        return view('pages.request');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Вопросы и ответы
     */
    public function faq()
    {
        SEO::setTitle('Вопросы и ответы');
        return view('pages.faq');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Промо страница
     */
    public function promo()
    {
        return view('pages.promo');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Баннepы
     */
    public function banners()
    {
        SEO::setTitle('Баннеры и кнопки');
        $servers = Servers::where('user_id', \Auth::id())->get();
        return view('pages.banners', compact('servers'));
    }
}
