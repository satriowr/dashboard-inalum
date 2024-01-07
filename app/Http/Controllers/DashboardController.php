<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    public function index()
    {
        $data_sensor = DB::table('data_tables')->get()->last();        
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
            return view('dashboard', compact('temperature', 'data', 'data_sensor'));
        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function inputData(){
        $apiUrl = 'http://api.weatherapi.com/v1/current.json';
        $apiKey = '7f87d3c204e44f6fb9c63549240201';
        $location = 'Medan';
        $useAqi = 'no';

        try {
            $data_sensor = DB::table('data_tables')->get()->last();
            //dd($data_sensor);
            $response = Http::get($apiUrl, [
                'key' => $apiKey,
                'q' => $location,
                'aqi' => $useAqi,
            ]);

            // Get the JSON response
            $data = $response->json();
            $temperature = $data['current']['temp_c'];
            return view('inputData', compact('temperature', 'data', 'data_sensor'));

        } catch (\Exception $e) {
            return view('error', ['message' => $e->getMessage()]);
        }
    }

    public function inputDataPost(Request $request){
        try {
            DB::table('data_tables')->insert([
                'scan_material' => $request->input('scan_material'),
                'load_capacity' => $request->input('load_capacity'),
                'speed_conveyor' => $request->input('speed_conveyor'),
                'duration' => $request->input('duration'),
                'power' => $request->input('power'),
            ]);

            return redirect('/admin/input')->with('success', 'Data inserted successfully.');
        } catch (\Exception $e) {
            return redirect('/admin/input')->with('error', 'Error inserting data. ' . $e->getMessage());
        }
    }

}
