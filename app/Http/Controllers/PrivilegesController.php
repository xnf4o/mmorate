<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use MMORATE\Privilege;
use Illuminate\Support\Facades\Auth;
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

    public function bb()
    {
        SEO::setTitle('Покупка возможности применения BB кодов');
        return view('pages.privilege.bb');
    }

    public function link()
    {
        SEO::setTitle('Покупка возможности менять окончание ссылки');
        return view('pages.privilege.link');
    }

    public function header()
    {
        SEO::setTitle('Покупка биннера для шапки на странице топов');
        return view('pages.privilege.header');
    }

    public function banner()
    {
        SEO::setTitle('Покупка баннера под сервер');
        return view('pages.privilege.banner');
    }

    public function buy(Request $r)
    {
        $privilege = new Privilege;
        $privilege->user_id = Auth::id();
        $privilege->action  = $r->get('action');
        $privilege->status  = 1;
        $privilege->save();
        return redirect()->back()->with('Успешно!');

    }

    public function activate()
    {

    }

}
