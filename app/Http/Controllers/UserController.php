<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ViewErrorBag;
use Image;

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
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Смена пароля
     */
    public function changePasswordPost(Request $r){
        $user = Auth::user();
        $data = $r->all();
        $success = false;

        if (isset($data['oldpass'])) {
            $r->validate([
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

    /**
     * @param Request $r
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Функция смены аватарки
     */
    public function updateAvatar(Request $r){
        if($r->hasFile('avatar')){
            $avatar = $r->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(258, 258)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = '/uploads/avatars/' . $filename;
            $user->save();
        }
        return redirect()->route('profile');
    }

}
