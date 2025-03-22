@extends('templates.main')
@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/2 h-full flex justify-center items-start">
            <form action="{{ route('register') }}" method="POST" class="p-20">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500 mb-5 text-center text-2xl ring-2 border-red-500 rounded-md">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2 class="text-4xl font-bold mb-4 text-start text-black">Create your account</h2>
                <p class="text-lg mb-6 text-start text-[#2C3E50]">Create an account and start your journey</p>

                <!-- Campo de Nombre -->
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium text-black">Full name</label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2"
                        placeholder="Your full name">
                </div>

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

                <!-- Campo de Confirmación de Contraseña -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-lg font-medium text-black">Confirm
                        Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2"
                        placeholder="Confirm your password">
                </div>

                <div class="mt-4 mb-4 text-center">
                    <p>Already have an account? <a href="{{ route('login') }}"
                            class="text-[#2C3E50] hover:text-blue-500">Login</a></p>
                </div>


                <!-- Botón de Enviar -->
                <div class="flex justify-center">
                    <button type="submit"
                        class="w-full px-4 py-2 bg-[#2C3E50] text-white text-xl rounded-md hover:scale-105 hover:cursor-pointer transition">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
        <div class="w-1/2 h-full flex justify-center items-center bg-black">
            <img src="img/RegisterImg.jpg" alt="Sesion de Terapia" class="h-full w-full object-cover opacity-60">
        </div>
    </div>
@endsection
