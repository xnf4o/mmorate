<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MMORATE\Privilege;
use SEO;

class PrivilegesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная страница вип услуг
     */
    public function main()
    {
        $myPrivileges = Privilege::where('user_id', Auth::id())->get();
        return view('pages.privilege.privilege', compact('myPrivileges'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная страница рекламы
     */
    public function ads()
    {
        $myPrivileges = Privilege::where('user_id', Auth::id())->get();
        return view('pages.ad', compact('myPrivileges'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница покупки BB кодов
     */
    public function bb()
    {
        SEO::setTitle('Покупка возможности применения BB кодов');
        return view('pages.privilege.bb');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница покупки ссылки для серверов
     */
    public function link()
    {
        SEO::setTitle('Покупка возможности менять окончание ссылки');
        return view('pages.privilege.link');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страница покупки баннера в щапке
     */
    public function header()
    {
        SEO::setTitle('Покупка биннера для шапки на странице топов');
        return view('pages.privilege.header');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Первый шаг покупки баннера
     */
    public function banner()
    {
        SEO::setTitle('Покупка баннера под сервер');
        return view('pages.privilege.banner');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Второй шаг покупки баннера
     */
    public function bannerStep2()
    {
        SEO::setTitle('Покупка баннера под сервер');
        return view('pages.privilege.bannerStep2');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Третий шаг покупки баннера
     */
    public function bannerStep3(Request $r)
    {
        $r->validate([
            'email' => 'email|required',
        ]);

        $this->takeMoney(250);

        SEO::setTitle('Покупка баннера под сервер');
        return view('pages.privilege.bannerStep3');
    }

    /**
     * @return mixed
     * Функция изъятия баланса у пользователя
     */
    private function takeMoney($amount)
    {
        if (Auth::user()->balance < $amount) return Redirect::back()->withErrors(['msg', 'Недостаточно баланса.']);

        $user = Auth::user();
        $user->balance -= $amount;
        $user->save();
    }

    public function buy(Request $r)
    {
        $privilege = new Privilege;
        $privilege->user_id = Auth::id();
        $privilege->action = $r->get('action');
        $privilege->status = 1;
        $privilege->save();

        $this->takeMoney($r->get('amount'));

        return redirect()->back()->with('Успешно!');

    }

    public function activate()
    {

    }

}
