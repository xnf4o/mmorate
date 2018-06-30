<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use MMORATE\Servers;

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
        return view('pages.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Правила
     */
    public function rules()
    {
        return view('pages.rules');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Контакты
     */
    public function contacts()
    {
        return view('pages.contacts');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Поддержка
     */
    public function support()
    {
        return view('pages.support');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Поддержка
     */
    public function request()
    {
        return view('pages.request');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Вопросы и ответы
     */
    public function faq()
    {
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
     * Баннеры
     */
    public function banners()
    {
        $servers = Servers::where('user_id', \Auth::id())->get();
        return view('pages.banners', compact('servers'));
    }
}
