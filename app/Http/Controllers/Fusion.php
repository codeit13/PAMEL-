<?php

namespace App\Http\Controllers;

use App\casesData;
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

        $caseTitle = $config['lesson']['caseTitle'];

        $columnsRequiredInFusedFile = $config['columnsRequiredInFusedFile'];

        $dataSources = $dataSourcesData['data'];

        foreach ($dataSources as $index => $dataSource) {
            // Write Fusion Logic Here
            if ($dataSource["fusion"]["caseAggregation"]["requires"] == "YES") {
                $dsName = $dataSource["name"];
                Log::info('Case Aggregation needed for ' . $dsName);
                $process = new Process(['python3', '../app/Http/Controllers/Scripts/case_aggregation.py', $dsName, $caseTitle]);
                $process->run();
                if (!$process->isSuccessful()) {
                    throw new ProcessFailedException($process);
                }

                $process->getOutput();
            }
        }

        $process = new Process(['python3', '../app/Http/Controllers/Scripts/fusion.py', $caseTitle . '-' . uniqid()]);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $fusedFileName = $process->getOutput();

        $configFilename = $caseTitle . '-config-' . uniqid() . '.json';

        $configJsonString = json_encode($config, JSON_PRETTY_PRINT);
        file_put_contents(base_path('public/casesData/' . $configFilename), stripslashes($configJsonString));

        casesData::where('caseTitle', $caseTitle)->update(array(
            'fusedFile' => $fusedFileName,
            'configFile' => $configFilename,
        ));

        return [
            'status' => true,
            'msg' => "Fusion Function Linked Successfully",
            'fusedFile' => $fusedFileName,
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
