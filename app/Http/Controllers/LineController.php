<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineController extends Controller
{
    //
    public function index(Request $request)
    {
        error_log(json_encode($request->all()));
        error_log($request->enents[0][0]);

        return response('ok','200');


    }
}
