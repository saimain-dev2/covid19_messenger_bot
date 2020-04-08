<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConfirmedResource;
use App\Http\Resources\OverviewResource;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function Overview()
    {
        $response = Http::get('https://covid19.joymogok.com/mm.json');
        $data = $response->json();

        return new OverviewResource($data);
    }

    public function ConfirmedData()
    {
        $response = Http::get('https://covid19.joymogok.com/mmconfirmedcase.json');
        $data = $response->json();

        return new ConfirmedResource($data);
    }
}
