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

    public function about()
    {
        return view('about.index');
    }

    public function data_process()
    {
        return view('data_process.index');
    }

    public function add_new_case() {
        return view('add_new_case.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function saveData(Request $request) {
        Storage::disk('public')->put('case-' . now() . '.json', response()->json($movies));
    }
}
