@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="bg-green-50 min-h-screen py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <a href="{{ url('/home') }}"
                class="inline-block mb-6 px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                ⬅️ Back to Home
            </a>

            <h1 class="text-3xl font-bold text-green-800 mb-6 text-center">🌿 Smart Farm Dashboard</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-center">
                <!-- Temperature -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">🌡️ Temperature</h2>
                    <p class="text-4xl font-bold text-green-400">{{ $temperature }}°C</p>
                </div>

                <!-- Humidity -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">💧 Humidity</h2>
                    <p class="text-4xl font-bold text-blue-600">{{ $humidity }}%</p>
                </div>

                <!-- Water Level -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">🌊 Water Level</h2>
                    <p class="text-4xl font-bold text-cyan-700">{{ $waterLevel }} cm</p>
                </div>

                <!-- Raindrop Sensor -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">☔ Raindrop</h2>
                    <p class="text-4xl font-bold text-indigo-600">
                        {{ $raindrop > 0 ? 'Rain Detected' : 'No Rain' }}
                    </p>
                </div>

                <!-- Soil Moisture -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">🌱 Soil Moisture</h2>
                    <p class="text-4xl font-bold text-amber-700">{{ $soilMoisture }}%</p>
                </div>

                <!-- Flame Sensor -->
                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">🔥 Flame Status</h2>
                    <p class="text-4xl font-bold {{ $flame > 0 ? 'text-red-600' : 'text-green-600' }}">
                        {{ $flame > 0 ? '🔥 Detected!' : '✅ Safe' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection