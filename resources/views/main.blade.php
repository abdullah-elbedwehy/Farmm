@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <header class="bg-green-700 text-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">🌾 Farm System</h1>
            <nav class="space-x-6 text-white font-medium">
                <a href="#" class="hover:text-green-200">Home</a>
                <a href="#" class="hover:text-green-200">Features</a>
                <a href="#" class="hover:text-green-200">Contact</a>
                @auth
                    <a href="" class="hover:text-green-200">Dashboard</a>
                @else
                    <a href="/login" class="hover:text-green-200">Login</a>
                    <a href="/register" class="hover:text-green-200">Register</a>
                @endauth
            </nav>
        </div>
    </header>

    <section class="bg-green-50 py-20 px-4 text-center">
        <h2 class="text-4xl font-bold text-green-800 mb-4">Grow with Confidence</h2>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto">
            Manage your farm efficiently and effectively with our intuitive Farm Management System.
        </p>
        <a href="/register"
            class="inline-block mt-8 bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
            Get Started
        </a>
    </section>

    <section class="py-16 bg-white px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-green-800 mb-4">Crop Monitoring</h3>
                <p class="text-gray-700">
                    Monitor crop growth, track conditions, and receive insights to improve your yield with our built-in
                    tools.
                </p>
            </div>
            <div>
                <h3 class="text-2xl font-bold text-green-800 mb-4">Livestock Tracking</h3>
                <p class="text-gray-700">
                    Manage livestock inventory, health records, and movements in one convenient place.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-green-100 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-green-800 mb-4">Smart Reports & Analytics</h3>
            <p class="text-gray-700">
                Get access to real-time data and reports to help you make informed decisions for your farm.
            </p>
        </div>
    </section>
@endsection