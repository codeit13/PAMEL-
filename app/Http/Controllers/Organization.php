<?php

namespace App\Http\Controllers;

use App\casesData;
use File;
use Illuminate\Http\Request;
use ZipArchive;

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
        $reqData = $request->all();
        $dataSourcesData = $reqData['dataSources'];

        $dataSources = $reqData['dataSources']['data'];
        $caseTitle = $reqData['caseTitle'];
        foreach ($dataSources as $index => $dataSource) {
            // Start of Organization Logic

            // End of Organization Logic

        }

        $zip = new ZipArchive;
        $zipFileName = str_replace(' ', '_', $caseTitle) . '-Organisation-' . uniqid() . '.zip';

        if ($zip->open(public_path('casesData/' . $zipFileName), ZipArchive::CREATE) === true) {
            $files = File::files(public_path('files_to_fuse'));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();

            casesData::where('caseTitle', $caseTitle)->update(array(
                'organisedFile' => $zipFileName,
            ));
        }

        return [
            'status' => true,
            'msg' => "Organization Function Linked Successfully",
        ];
    }

    public function casesExclusion(Request $request)
    {
        $DataSource = $request->dataSource;
        $casesExclusionRule = $request->casesExclusionRule;
        return "casesExclusion";
    }

    public function variablesExclusion($DataSource, $variablesExclusionRule)
    {
        return "variablesExclusion";
    }

    public function transformation($DataSource, $TaxonomyRule, $ReshapeRule, $SemanticRule)
    {
        return "transformation";
    }

}
