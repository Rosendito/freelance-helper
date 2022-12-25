<?php

namespace App\Http\Controllers;

use App\Services\GithubService;

class TestController extends Controller
{
    public function index()
    {
        $client = GithubService::issues();

        $data = $client->all('imcodingideas', 'palos-nocturnos');

        dd($data);
    }
}
