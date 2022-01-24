<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $areas = Area::get()->toTree();
        return view('home', compact('areas'));
    }

    public function country(){

        $data = Http::get('https://restcountries.com/v3.1/all')->json();
        //return view('country', ['data'=>$data]);
       dd ($data);
    //  dd($data['data']['DZ']['country']);

   
    }
}
