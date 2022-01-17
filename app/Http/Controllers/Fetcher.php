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
    public function fetchFromLocalFileSystem($path, $DataSource, $DataFile_n)
    {
        return "fetchFromLocalFileSystem";
    }

    public function fetchFromGDrive($CREDENTIALS, $DataSource, $DataFile_n)
    {
        return "fetchFromGDrive";
    }
}
