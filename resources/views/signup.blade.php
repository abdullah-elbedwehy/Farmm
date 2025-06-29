@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-green-50 px-4 m-">
        <div
            class="w-full max-w-md bg-white rounded-xl shadow-2xl p-8 transform transition-all duration-300 hover:scale-[1.01]">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-green-700 mb-2">🌿 Create Account</h1>
                <p class="text-gray-500">Join the Farm Management System</p>
            </div>

            @if($errors->any())
                <div class="bg-red-100 text-red-600 px-4 py-2 mb-4 rounded text-sm">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register">
                @csrf

                {{-- Name --}}
                <label class="block mb-4">
                    <span class="text-gray-700 font-medium">Full Name</span>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                {{-- Email --}}
                <label class="block mb-4">
                    <span class="text-gray-700 font-medium">Email</span>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@farm.com"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                {{-- Gender --}}
                <label class="block mb-4">
                    <span class="text-gray-700 font-medium">Gender</span>
                    <select name="gender"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                        <option value="">-- Select Gender --</option>
                        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </label>

                {{-- Password --}}
                <label class="block mb-4">
                    <span class="text-gray-700 font-medium">Password</span>
                    <input type="password" name="password" placeholder="********"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                {{-- Confirm Password --}}
                <label class="block mb-6">
                    <span class="text-gray-700 font-medium">Confirm Password</span>
                    <input type="password" name="password_confirmation" placeholder="********"
                        class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-green-400 focus:outline-none"
                        required>
                </label>

                <button type="submit"
                    class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition-colors font-semibold">
                    Register
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="/" class="text-green-700 font-semibold hover:underline">
                    Sign In
                </a>
            </div>
        </div>
    </div>
@endsection