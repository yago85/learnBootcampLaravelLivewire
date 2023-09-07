<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // для Response
//    public function index(): Response
//    {
//        return response('Hello, World!');
//    }

    // для View
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }

}
