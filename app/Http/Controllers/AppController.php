<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Syntax\SteamApi\Facades\SteamApi;
use Syntax\SteamApi\Exceptions\ApiCallFailedException;

class AppController extends Controller
{
    public function index(Request $request)
    {
        $appId = $request->get('appId');
        $data = null;

        if ($appId) {
            try {
                $apps = SteamApi::app()->appDetails($appId);
                $data = $apps->first();
            } catch (ApiCallFailedException $e) {
            }
        }

        return view('index', compact('data', 'appId'));
    }
}
