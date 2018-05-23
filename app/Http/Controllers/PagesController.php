<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function logout()
    {
      auth()->logout();
      return redirect('/');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function rules()
    {
        return view('pages.rules');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function support()
    {
        return view('pages.support');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function banners()
    {
        return view('pages.banners');
    }
}
