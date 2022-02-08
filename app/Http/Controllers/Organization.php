<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Organization extends Controller
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
    public function organisation(Request $request)
    {
        $dataSources = $request->data;
        foreach ($dataSources as $index => $dataSource) {
            // Write Organization Logic Here
        }

        return [
            'status'=> True,
            'msg' => "Organization Function Linked Successfully"
        ];
    }

    public function casesExclusion(Request $request) {
        $DataSource = $request->dataSource;
        $casesExclusionRule = $request->casesExclusionRule;
        return "casesExclusion";
    }

    public function variablesExclusion($DataSource, $variablesExclusionRule) {
        return "variablesExclusion";
    }

    public function transformation($DataSource, $TaxonomyRule, $ReshapeRule, $SemanticRule)  {
        return "transformation";
    }

}
