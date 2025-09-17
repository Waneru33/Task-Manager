<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TodoList</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-400 via-purple-400 to-pink-400 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md animate-fade-in">
        <div class="flex flex-col items-center mb-6">
            <i data-lucide="lock" class="w-12 h-12 text-blue-600 mb-2"></i>
            <h1 class="text-2xl font-bold text-blue-700 mb-2 tracking-wide">Login</h1>
            <p class="text-gray-500 text-sm">Masuk untuk mengelola tugas dan proyek Anda</p>
        </div>
        <form method="POST" action="{{ route('login.submit') }}" class="space-y-5">
            @csrf
            <div class="relative">
                <input type="email" name="email" placeholder="Email" class="border rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400 transition" required>
                <i data-lucide="mail" class="absolute right-3 top-3 w-5 h-5 text-gray-400"></i>
            </div>
            <div class="relative">
                <input type="password" name="password" placeholder="Password" class="border rounded-lg p-3 w-full focus:outline-none focus:ring-2 focus:ring-purple-400 transition" required>
                <i data-lucide="key" class="absolute right-3 top-3 w-5 h-5 text-gray-400"></i>
            </div>
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg w-full font-semibold shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-200 flex items-center justify-center gap-2">
                <i data-lucide="log-in" class="w-5 h-5"></i>
                Login
            </button>
        </form>

        @if($errors->any())
            <div class="mt-4 text-red-500 text-center animate-pulse">
                {{ $errors->first() }}
            </div>
        @endif

        <p class="mt-6 text-center text-gray-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-semibold transition">Daftar</a>
        </p>
    </div>
    <script>
        lucide.createIcons();
    </script>
    <style>
        .animate-fade-in {
            animation: fadeIn 0.7s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</body
</html>
