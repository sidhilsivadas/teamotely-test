<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class HomeService
{
    public function __construct()
    {
        $this->http_client = new \GuzzleHttp\Client();
    }

    public function fileUpload()
    {
        //code
    }

    
}
