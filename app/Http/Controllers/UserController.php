<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use Mail;
use MMORATE\Notifications\smsNotification;
use MMORATE\User;

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
    public function profile()
    {
        return view('pages.profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Странца смены пароля
     */
    public function changePassword()
    {
        return view('pages.changePassword');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Смена пароля
     */
    public function changePasswordPost(Request $r)
    {
        $user = Auth::user();
        $data = $r->all();
        $success = false;

        if (isset($data['oldpass'])) {
            $r->validate([
                'oldpass' => 'required',
                'pass' => 'required|string|min:6|confirmed',
                'g-recaptcha-response' => 'required|captcha'
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
    public function updateAvatar(Request $r)
    {
        if ($r->hasFile('avatar')) {
            $avatar = $r->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(258, 258)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = '/uploads/avatars/' . $filename;
            $user->save();
        }
        return redirect()->route('profile');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\RedirectResponse
     * Функция сохранения отредактированных данных пользователя
     */
    public function update(Request $r)
    {
        $user = Auth::user();
        $user->fname = $r->get('fname');
        $user->nickname = $r->get('nickname');
        $user->project = $r->get('project');
        $user->bday = $r->get('bday');
        $user->email = $r->get('email');
//        $user->phone = $r->get('phone');
        $user->save();

        return redirect()->route('profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     * Страница подтверждения почты и телефона
     */
    public function confirmation()
    {
        if (Auth::user()->phone_confirmed == 0 or Auth::user()->email_confirmed == 0)
            return view('pages.confirmation');
        return redirect()->route('profile');
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\JsonResponse
     * Функция отправки письма на почту
     */
    public function sendEmailCode(Request $r)
    {
        $user = Auth::user();
        if ($user->email != $r->get('email')) $user->email = $r->get('email');
        $user->email_code = rand(00000, 99999);
        $user->save();

        Mail::send('emails.code', ['user' => $user], function ($m) use ($user) {
            $m->from(env('MAIL_USERNAME'), 'MMORATE');
            $m->to($user->email, $user->name)->subject('Код подтверждения');
        });
        return response()->json(['success' => 'true']);
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\JsonResponse
     * Функция сверения и подтверждения кода из почты
     */
    public function verifyEmail(Request $r)
    {
        $user = User::where('email_code', $r->get('code'))->first();
        if (!$user) return response()->json(['error' => 'true'], 404);
        $user->email_confirmed = 1;
        $user->save();
        return response()->json(['success' => 'true']);
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\JsonResponse
     * Функция отправки смс
     */
    public function sendSmsCode(Request $r)
    {
        $user = Auth::user();
        if ($user->phone != $r->get('phone')) {
            $user->phone = $r->get('phone');
            $user->save();
        }
        \Notification::send($user, new smsNotification());
        return response()->json(['success' => 'true']);
    }

    /**
     * @param Request $r
     * @return \Illuminate\Http\JsonResponse
     * Функция сверения и подтверждения кода из смс
     */
    public function verifySms(Request $r)
    {
        $user = User::where('phone_code', $r->get('code'))->first();
        if (!$user) return response()->json(['error' => 'true'], 404);
        $user->phone_confirmed = 1;
        $user->save();
        return response()->json(['success' => 'true']);
    }
}
