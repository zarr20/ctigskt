<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        View::share('title', "Sangfor Cyber Command");
        
        $data = ['data' => []];

        // $data = compact('latestArticles', 'banners', 'var3');
        return view('landing-page', $data);
    }

    public function thank_you()
    {
        View::share('title', "Thank You!");
        
        $data = ['data' => []];

        return view('thank-you-page', $data);
    }
}
