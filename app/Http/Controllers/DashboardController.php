<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the Smart Farm Dashboard.
     */
    public function index()
    {
        // Simulated sensor values (replace with real-time DB/API later)
        $sensorData = [
            'temperature' => 27.5,
            'humidity' => 62,
            'waterLevel' => 15,     // in cm
            'raindrop' => 0,      // 0 = no rain, 1 = rain detected
            'soilMoisture' => 40,     // in percentage
            'flame' => 0       // 0 = no flame, 1 = fire detected
        ];

        return view('dashboard', $sensorData);
    }
}
