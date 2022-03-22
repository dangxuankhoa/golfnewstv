<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class News extends Controller
{
    public function index()
    {
        $url = 'https://api-golfnew.vhandicap.com/api/v1/magazine/list_new?number=6';

        $response = file_get_contents($url);
        $newsData = json_decode($response);


        return view('news.index',compact('newsData'));
    }
}
