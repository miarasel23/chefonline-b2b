<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function loadDataFromJson()
    {
        $publicPath = resource_path();
        $file_name = '/data/data.json';
        $items = file_get_contents($publicPath . $file_name);
        return json_decode($items, true);
    }

    public function index()
    {
        $data = $this->loadDataFromJson();
        $chefOnlineEpos = $data['category'][0];
        return view('frontend.home', ['chefOnlineEpos' => $chefOnlineEpos]);
    }
}
