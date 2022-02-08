<?php

namespace App\Http\Controllers;

class Fusion extends Controller
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
    public function fusion(Request $request)
    {
        $dataSourcesData = $request->dataSources;

        $columnsRequiredInFusedFile = $request->columnsRequiredInFusedFile;

        $dataSources = $dataSources->data;
        foreach ($dataSources as $index => $dataSource) {
            // Write Fusion Logic Here
        }

        return [
            'status'=> True,
            'msg' => "Fusiona Function Linked Successfully"
        ];
    }

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
