<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class InstaController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = 	'https://graph.instagram.com/17841445368714984/media?fields=id,username,media_url,caption,permalink&access_token=IGQVJYWm94ZAzRRRHJYQTBaUzBlOW96UzhPV3RNbzZArNVVwVkI4b3pSSmt2NEhPa1UzbHc3em40eTk5TDc1M1AwamFMLXlua29iRDd4dlg5RUkycVZAKa0NwbjdBZAkFuVXBoY0szVXItVV9OWjVYQTVkRgZDZD';

        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody());
        $total = $responseBody->data;
        return view('welcome', compact('total'));
    }
}
