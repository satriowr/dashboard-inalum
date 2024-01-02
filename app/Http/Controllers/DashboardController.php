<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{
    public function index()
    {
        // API endpoint and parameters
        $apiUrl = 'http://api.weatherapi.com/v1/current.json';
        $apiKey = '7f87d3c204e44f6fb9c63549240201';
        $location = 'Medan';
        $useAqi = 'no';

        try {
            $response = Http::get($apiUrl, [
                'key' => $apiKey,
                'q' => $location,
                'aqi' => $useAqi,
            ]);

            // Get the JSON response
            $data = $response->json();
            $temperature = $data['current']['temp_c'];
            return view('dashboard', compact('temperature'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }
}
