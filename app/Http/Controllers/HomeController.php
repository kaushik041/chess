<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tournament;
use App\UserRegister;
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
        $tournaments = tournament::all();
        return view('tournament_list',compact('tournaments'));
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
    public function store_tournament()
    {
        $data = request()->all();
        //dd($data);
        $user = tournament::create($data);
        return back(); 
    }
    public function admin_tournament_list()
    {
        $tournaments = tournament::all();
        return view('admin_tournament_list',compact('tournaments'));
    }
    public function user_list()
    {
        $dist=[
        '01'=>'Darjiling',
        '02'=>'Jalpaiguri',
        '03'=>'Kochbihar',
        '04'=>'Uttardinajpur',
        '05'=>'DakshinDinajpur',
        '06'=>'Maldah',
        '07'=>'Murshidabad',
        '08'=>'Birbhum',
        '09'=>'Barddhaman',
        '10'=>'Nadia',
        '11'=>'NorthTwentyFourParganas',
        '12'=>'Hugli',
        '13'=>'Bankura',
        '14'=>'Puruliya',
        '15'=>'Haora',
        '16'=>'Kolkata',
        '17'=>'SouthTwentyFourParganas',
        '18'=>'PaschimMedinipur',
        '19'=>'Purbamedinipur'
    ];

        $users = UserRegister::all();
        return view('user_list',compact('users','dist'));
    }
    public function transaction_list()
    {
        return view('transaction_list');
    }
    public function ckeckUser(Request $request){
        $data = $request->all();
        //dd($data);
        $check = UserRegister::where(['joidId'=>$data['join_id'],'dob'=>$data['user_dob']])->get();
        if($check->count()>0)
            return view('user_payment',compact('check'));
        else
            return back()->with('status','Incorrect Credentials');    
    }

}
