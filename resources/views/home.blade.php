@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-green-50 px-4">
        <div
            class="w-full max-w-md bg-white rounded-xl shadow-2xl p-8 transform transition-all duration-300 hover:scale-[1.01]">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-green-700 mb-2">🌱 Welcome Back</h1>
                <p class="text-gray-500">Login to your Farm account</p>
            </div>

            @if(session('error'))
                <div class="bg-red-100 text-red-600 px-4 py-2 mb-4 rounded text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <label class="block mb-4">
                    <span class="text-gray-700 font-medium">Email</span>
                    <input type="email" name="email" placeholder="example@farm.com"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                <label class="block mb-6">
                    <span class="text-gray-700 font-medium">Password</span>
                    <input type="password" name="password" placeholder="********"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                <button type="submit"
                    class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition-colors font-semibold">
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="/signup" class="text-green-700 font-semibold hover:underline">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
@endsection