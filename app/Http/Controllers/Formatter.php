<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Formatter extends Controller
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
    public static function formatFromXLSXtoCSV(Request $request)
    {

        Log::info('formatFromXLSXtoCSV Request Data: ' . json_encode($request->all()));
        Log::info('formatFromXLSXtoCSV Request Data: ' . json_encode($request->file('files')));

        // $id = $request->id;
        // $request->validate([
        //   'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500000',
        // ]);

        // if ($request->file('file')) {
        //     $imagePath = $request->file('file');
        //     $imageName = $imagePath->getClientOriginalName();

        //     $path = $request->file('file')->storeAs('uploads', $imageName);
        // }

        // $imagePath = '/storage/' . $path;

        // return $imagePath;

        $files = $request->file('files');
        $paths  = [];
        $ds_name = $request->post()['ds-name'];
        $insert_files_n = $request->post()['insert_files_n'];
        
        $index = 1;
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename  = 'file-' . $ds_name . '-' . $index . '.' . $extension;
            $paths[] = $file->storeAs('uploads', $filename);
            $index++;
        }

        // return response()->json($paths);
        Storage::disk('public')->put('paths.json', $paths);
   

        // $path = $request->path;
        // $DataSource = $request->DataSource;
        // $DataFile_n = $request->DataFile_n;


        $process = new Process(['python3', '../app/Http/Controllers/Scripts/xlsxtocsv.py']);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $process->getOutput();

    }

}
