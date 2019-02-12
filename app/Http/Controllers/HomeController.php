<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function user_registration()
    {
        return view('user_registration');
    }
    public function user_home()
    {
        return view('user_home');
    }
    public function tournament_list()
    {
        return view('tournament_list');
    }
    public function user_tournament_join()
    {
        return view('user_tournament_join');
    }
    public function user_payment()
    {
        return view('user_payment');
    }



    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }
    public function add_tournament()
    {
        return view('add_tournament');
    }
    public function admin_tournament_list()
    {
        return view('admin_tournament_list');
    }
    public function user_list()
    {
        return view('user_list');
    }
    public function transaction_list()
    {
        return view('transaction_list');
    }

}
