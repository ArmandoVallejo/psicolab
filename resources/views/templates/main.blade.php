<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Psicolab</title>

    <!-- Agregamos el CDN de Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="">
    <header class="fixed w-screen flex justify-center items-center h-18 top-0 bg-[#2C3E50] text-white">
        <nav class="w-full flex justify-between items-center px-4">
         
            <div class="flex items-center justify-center w-4/12 space-x-2">
                <img src="{{ asset('img/PsicoLogo.png') }}" alt="Logo" class="h-12">
                <h1 class="ml-2 text-3xl">PsicoLab</h1>
            </div>
    
         
            <ul class="flex justify-center w-4/12 space-x-8">
                <li><a href="{{url('/')}}" class="hover:text-gray-300 text-2xl">Home</a></li>
                <li><a href="{{route('register')}}" class="hover:text-gray-300 text-2xl">Register</a></li>
                <li><a href="{{route('login')}}" class="hover:text-gray-300 text-2xl">Login</a></li>
            </ul>
    
           
            <div class="w-4/12"></div>
        </nav>
    </header>
    
    <main class="pt-18">
        @yield('content')
    </main>
    <footer>Goodbye</footer>

</body>

</html>
