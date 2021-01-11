<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;

class HomeController extends Controller
{
    public function fileUpload(Request $request, HomeService $HomeService)
    {

        $data = $HomeService->fileUpload($request);
        return response()->json([
            "data" => ['success']
        ]);
    }

    
}
