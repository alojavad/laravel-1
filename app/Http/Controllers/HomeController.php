<?php namespace App\Http\Controllers;
use DB;
use URL;
use Auth;
use Input;
use Config;
use Request;
use Redirect;
use Response;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $titr1 = DB::table('news')->where('publi',6)->orderBy('created_at', 'desc')->first();
        $titr = DB::table('news')->where('publi',6)->orderBy('created_at', 'desc')->take(4)->get();
        $spec1 = DB::table('news')->where('publi',4)->orderBy('created_at', 'desc')->first();
        $spec2 = DB::table('news')->where('publi',4)->orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $spec3 = DB::table('news')->where('publi',5)->orderBy('created_at', 'desc')->first();
        $spec4 = DB::table('news')->where('publi',5)->orderBy('created_at', 'desc')->skip(1)->take(1)->get();
        $best = DB::table('news')->where('publi',3)->orderBy('created_at', 'desc')->take(8)->get();
        $lastk = DB::table('news')->where('publi',2)->where('dep',1)->orderBy('created_at', 'desc')->take(30)->get();
        $lasts = DB::table('news')->where('publi',2)->where('dep',2)->orderBy('created_at', 'desc')->take(30)->get();
        $lastt = DB::table('news')->where('publi',2)->where('dep',3)->orderBy('created_at', 'desc')->take(30)->get();
        $lastso = DB::table('news')->where('publi',2)->where('dep',4)->orderBy('created_at', 'desc')->take(30)->get();
		return view('home')->with(array('titr1' => $titr1,'titr' => $titr, 'spec1' => $spec1, 'spec2' => $spec2,
            'spec3' => $spec3, 'spec4' => $spec4, 'best' => $best, 'lastk' => $lastk, 'lasts' => $lasts,
            'lastt' => $lastt, 'lastso' => $lastso));
	}

}
