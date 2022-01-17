<?php

namespace App\Http\Controllers;

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
    public function aggregation($DataSource, $DataFile_n, $aggregationRule)
    {
        return "aggregation";
    }
    public function mapping($DataSource, $variablesCorrelationRule, $casesCorrelationRule)
    {
        return "mapping";
    }
    public function join($DataSource, $joinRule)
    {
        return "join";
    }
    public function fusedFileProperties($fileFormat, $dataStructure, $repositoryLocation, $fileName)
    {
        return "fusedFileProperties";
    }

}
