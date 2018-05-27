<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ViewErrorBag;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Страницы профиля
     */
    public function profile(){
        return view('pages.profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Странца смены пароля
     */
    public function changePassword(){
        return view('pages.changePassword');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Смена пароля
     */
    public function changePasswordPost(Request $request){
        $user = Auth::user();
        $data = $request->all();
        $success = false;

        if (isset($data['oldpass'])) {
            $request->validate([
                'oldpass' => 'required',
                'pass' => 'required|string|min:6|confirmed',
            ]);
            if (Hash::check($data['oldpass'], $user->getAuthPassword())) {
                $user->fill(['password' => Hash::make($data['pass'])])->save();
                $success = true;
            } else {
                return back()->withErrors(["Старый пароль указан неверно"]);
            }
        }
        return back()->with("success", $success);
    }

}
