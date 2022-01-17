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
    public function casesExclusion($DataSource, $casesExclusionRule) {
        return "casesExclusion";
    }

    public function variablesExclusion($DataSource, $variablesExclusionRule) {
        return "variablesExclusion";
    }

    public function transformation($DataSource, $TaxonomyRule, $ReshapeRule, $SemanticRule)  {
        return "transformation";
    }

}
