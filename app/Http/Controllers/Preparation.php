<?php

namespace App\Http\Controllers;

use App\casesData;
use File;
use Illuminate\Http\Request;
use ZipArchive;

class Preparation extends Controller
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
    public function preparation(Request $request)
    {
        $reqData = $request->all();
        $dataSourcesData = $reqData['dataSources'];

        $dataSources = $reqData['dataSources']['data'];
        $caseTitle = $reqData['caseTitle'];
        foreach ($dataSources as $index => $dataSource) {
            // Start of Preparation Logic

            // End of Preparation Logic

            // $oldFileName = str_replace(' ', '_', $dataSource['name']) . '.csv';
            // $newFileName = str_replace(' ', '_', $caseTitle) . '-' . uniqid() . '-' . $oldFileName;
            // File::copy(public_path('files_to_fuse/' . $oldFileName), public_path('casesData/' . $newFileName));
        }

        $zip = new ZipArchive;
        $zipFileName = str_replace(' ', '_', $caseTitle) . '-Preparation-' . uniqid() . '.zip';

        if ($zip->open(public_path('casesData/' . $zipFileName), ZipArchive::CREATE) === true) {
            $files = File::files(public_path('files_to_fuse'));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();

            casesData::create(array(
                'caseTitle' => $caseTitle,
                'preparationFile' => $zipFileName,
            ));

            return [
                'status' => true,
                'msg' => "Preparation Function Linked Successfully",
                'zipFileName' => $zipFileName,
            ];
        }
    }
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
