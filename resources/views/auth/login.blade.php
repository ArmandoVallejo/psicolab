@extends('templates.main')
@section('content')
    @if ( session('success') )
        <div class="text-green-500 mb-5 text-center text-2xl ring-2 border-green-500 rounded-md z-50 fixed top-0 left-0 right-0 m-4 p-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/2 h-full flex justify-center items-center bg-black">
            <img src="img/LoginImg.jpg" alt="Sesion de Terapia" class="h-full w-full object-cover opacity-60">
        </div>
        <div class="w-1/2 h-full flex justify-center items-start">
            <form action="{{ route('login') }}" method="POST" class="p-20">
                @csrf
                @if (session('error'))
                    <div class="text-red-500 mb-5 text-center text-2xl ring-2 border-red-500 rounded-md">
                        {{ session('error') }}
                    </div>
                @endif
                <h2 class="text-4xl font-bold mb-4 text-start text-black">Welcome back</h2>
                <p class="text-lg mb-6 text-start text-[#2C3E50]">Welcome back, please log in to your account!</p>

                <!-- Campo de Email -->
                <div class="mb-4">
                    <label for="email" class="block text-lg font-medium text-black">Email</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2"
                        placeholder="Your email address">
                </div>

                <!-- Campo de Contraseña -->
                <div class="mb-6">
                    <label for="password" class="block text-lg font-medium text-black">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2"
                        placeholder="Your password">
                </div>

                <!-- Recuperar Contraseña -->
                <div class="mb-6">
                    <a href="#" class="text-blue-600 hover:text-blue-800">Forgot your password?</a>
                </div>

                <!-- Botón de Enviar -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="btn btn-soft btn-wide">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection