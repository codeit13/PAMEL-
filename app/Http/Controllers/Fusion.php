<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

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
        $config = $request->all();
        $dataSourcesData = $config['dataSources'];

        $columnsRequiredInFusedFile = $config['columnsRequiredInFusedFile'];

        $dataSources = $dataSourcesData['data'];

        foreach ($dataSources as $index => $dataSource) {
            // Write Fusion Logic Here
            if ($dataSource["fusion"]["caseAggregation"]["requires"] == "YES") {
                $dsName = $dataSource["name"];
                Log::info('Case Aggregation needed for ' . $dsName);
                $process = new Process(['python3', '../app/Http/Controllers/Scripts/case_aggregation.py', $dsName]);
                $process->run();
                if (!$process->isSuccessful()) {
                    throw new ProcessFailedException($process);
                }

                $process->getOutput();
            }
        }

        $process = new Process(['python3', '../app/Http/Controllers/Scripts/fusion.py']);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $process->getOutput();

        // return [
        //     'status' => true,
        //     'msg' => "Fusiona Function Linked Successfully",
        // ];
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
