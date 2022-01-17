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
    public function aggregation($DataSource, $DataFile_n, $aggregationRule)
    {
        return "aggregation";
    }
    public function synchronization($DataSource, $DataFile_n, $aggregationRule)
    {
        return "synchronization";
    }
    public function timeHomogenization($DataSource, $DataFile_n, $aggregationRule)
    {
        return "timeHomogenization";
    }
    public function dealNoise($DataSource, $DataFile_n, $MissingRule, $OutlierRule, $RedundantValuesRemovalRule, $CleaningValuesRule)
    {
        return "dealNoise";
    }

}
