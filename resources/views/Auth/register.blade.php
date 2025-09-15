<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TodoList</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow w-96">
        <h1 class="text-xl font-bold mb-4">Register</h1>

        <form method="POST" action="{{ route('register.submit') }}" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap" class="border p-2 w-full" required>
            <input type="email" name="email" placeholder="Email" class="border p-2 w-full" required>
            <input type="password" name="password" placeholder="Password" class="border p-2 w-full" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="border p-2 w-full" required>

            <button class="bg-green-600 text-white px-4 py-2 rounded w-full">Daftar</button>
        </form>

        @if($errors->any())
            <div class="mt-4 text-red-500 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- 🔹 Link ke Login -->
        <p class="mt-4 text-center text-gray-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>
    </div>
</body>
</html>
