<?php

namespace MMORATE\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 404
     */
      public function errorCode404()
      {
        return view('errors.404');
      }
}
