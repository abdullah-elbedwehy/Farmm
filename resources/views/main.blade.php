@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <header class="bg-green-700 text-white shadow">



        <div class="container mx-auto px-4 py-4 flex justify-between items-center">

            <div id="user-profile" @click="open = true" class="cursor-pointer" x-data="{ open: false }">
                <!-- User Icon -->
                <svg class="w-[41px] h-[41px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2"
                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>


                <!-- Modal -->
                <div x-show="open" x-cloak
                    class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                    <div @click.away="open = false" class="bg-white rounded-lg p-6 max-w-sm w-full shadow-lg">
                        <h2 class="text-xl font-bold mb-4 text-green-800">User Profile</h2>
                        <p class="text-gray-700 mb-4">You are logged in as:
                            <strong>{{ Auth::user()->name ?? 'Guest' }}</strong>
                        </p>

                        <div class="flex justify-end space-x-2">
                            @auth
                                <a href="/dashboard"
                                    class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Dashboard</a>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit"
                                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Logout</button>
                                </form>
                            @else
                                <a href="/" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Login</a>
                            @endauth

                            <button @click="open = false" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Close
                                <button>
                        </div>
                    </div>
                </div>
            </div>


            <h1 class="text-2xl font-bold">🌾 Farm System</h1>
            <nav class="space-x-6 text-white font-medium">

                <a href="#" class="hover:text-green-200">Home</a>
                <a href="#" class="hover:text-green-200">Features</a>
                <a href="#" class="hover:text-green-200">Contact</a>
                @auth
                    <a href="/dashboard" class="hover:text-green-200">Dashboard</a>
                @else
                    <a href="/" class="hover:text-green-200">Login</a>
                    <a href="/signup" class="hover:text-green-200">Register</a>
                @endauth
            </nav>
        </div>
    </header>

    <section class="bg-green-50 py-20 px-4 text-center">
        <h2 class="text-4xl font-bold text-green-800 mb-4">Grow with Confidence</h2>
        <p class="text-lg text-gray-700 max-w-2xl mx-auto">
            Manage your farm efficiently and effectively with our intuitive Farm Management System.
        </p>
        <a href="/"
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