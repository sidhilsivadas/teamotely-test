<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class HomeService
{
    public function __construct()
    {
        $this->http_client = new \GuzzleHttp\Client();
    }

    public function fileUpload($request)
    {
        $file = $request->file('file');
        $md5Name = md5_file($file->getRealPath());
        $extension = $file->extension();
        $file = $file->storeAs('/files/csv', 'file.csv'  ,'public');
        if($file){
            $file = \Storage::disk('public')->path('files/csv/file.csv');
            $arrayFromCSV =  json_encode(array_map('str_getcsv', file($file)));
            
        }
     }

    
}
