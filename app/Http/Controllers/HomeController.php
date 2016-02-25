<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getValidatePage() {
        return view('validate');
    }

    public function postValidatePage(Request $request) {
        $validator = \Validator::make($request->all(), [
            'name'    => 'required|min:10',
            'captcha' => 'required'
        ]);
        // var_dump($validator->messages()->all());
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }
}
