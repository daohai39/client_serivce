<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class BaseController extends Controller
{
    //
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'news.dev/api/v1/',
        ]);
    }
}
