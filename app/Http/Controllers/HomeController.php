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
        $lastk = DB::table('news')->where('publi',2)->where('dep',1)->orderBy('created_at', 'desc')->take(30)->get();
        $bestk = DB::table('news')->where('publi',3)->where('dep',1)->orderBy('created_at', 'desc')->take(15)->get();
        $speck = DB::table('news')->where('publi',4)->where('dep',1)->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
        $speckk = DB::table('news')->where('publi',4)->where('dep',1)->orderBy('created_at', 'desc')->first();
        $lasts = DB::table('news')->where('publi',2)->where('dep',2)->orderBy('created_at', 'desc')->take(30)->get();
        $bests = DB::table('news')->where('publi',3)->where('dep',2)->orderBy('created_at', 'desc')->take(15)->get();
        $specs = DB::table('news')->where('publi',4)->where('dep',2)->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
        $specss = DB::table('news')->where('publi',4)->where('dep',2)->orderBy('created_at', 'desc')->first();
        $lastt = DB::table('news')->where('publi',2)->where('dep',3)->orderBy('created_at', 'desc')->take(30)->get();
        $bestt = DB::table('news')->where('publi',3)->where('dep',3)->orderBy('created_at', 'desc')->take(15)->get();
        $spect = DB::table('news')->where('publi',4)->where('dep',3)->orderBy('created_at', 'desc')->skip(1)->take(3)->get();
        $spectt = DB::table('news')->where('publi',4)->where('dep',3)->orderBy('created_at', 'desc')->first();
		return view('home')->with(array('lastk' => $lastk,'bestk' => $bestk, 'speck' => $speck, 'lasts' => $lasts,
            'bests' => $bests, 'specs' => $specs, 'lastt' => $lastt, 'bestt' => $bestt, 'spect' => $spect,
            'speckk' => $speckk, 'specss' => $specss, 'spectt' => $spectt));
	}

}
