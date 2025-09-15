@extends('layouts.landing')

@section('content')
<div class="min-h-screen bg-gray-50">

    <!-- Navbar -->
    <div class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
            <div class="flex items-center space-x-3 transition-transform hover:scale-105">
                <i data-lucide="layout-dashboard" class="w-8 h-8 text-indigo-600"></i>
                <h2 class="text-2xl font-bold tracking-wide text-indigo-600">TodoList</h2>
            </div>
            <nav class="space-x-6 font-medium">
                <a href="#features" class="text-gray-700 hover:text-indigo-600 transition">Fitur</a>
                <a href="#about" class="text-gray-700 hover:text-indigo-600 transition">Tentang</a>
                <a href="#contact" class="text-gray-700 hover:text-indigo-600 transition">Kontak</a>
                <a href="{{ route('login') }}" 
                   class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                   Login
                </a>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="text-center py-24 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <h2 class="text-5xl font-extrabold mb-6">Kelola Proyek & Tugas Lebih Mudah 🚀</h2>
        <p class="text-lg max-w-2xl mx-auto mb-8">
            Website ini membantu admin dalam mengelola project, dan user untuk melihat serta menyelesaikan tugasnya masing-masing.
        </p>
        <a href="{{ route('login') }}" 
           class="px-8 py-4 bg-white text-indigo-600 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
           Login / Mulai Sekarang
        </a>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 max-w-6xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-14">✨ Fitur Utama</h3>
        <div class="grid md:grid-cols-3 gap-10 text-center">
            <!-- Feature 1 -->
            <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-transform hover:scale-105">
                <i data-lucide="folder-kanban" class="w-12 h-12 text-indigo-600 mx-auto mb-4"></i>
                <h4 class="font-bold text-xl mb-2">Manajemen Project</h4>
                <p class="text-gray-600">Admin dapat membuat, mengedit, dan menghapus project dengan mudah.</p>
            </div>
            <!-- Feature 2 -->
            <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-transform hover:scale-105">
                <i data-lucide="check-square" class="w-12 h-12 text-green-600 mx-auto mb-4"></i>
                <h4 class="font-bold text-xl mb-2">Penugasan Tugas</h4>
                <p class="text-gray-600">Setiap tugas bisa ditugaskan ke user tertentu dengan status progres.</p>
            </div>
            <!-- Feature 3 -->
            <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-2xl transition-transform hover:scale-105">
                <i data-lucide="user-check" class="w-12 h-12 text-purple-600 mx-auto mb-4"></i>
                <h4 class="font-bold text-xl mb-2">Tugas Saya</h4>
                <p class="text-gray-600">User hanya melihat dan mengelola tugas yang ditugaskan padanya.</p>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-gray-100 text-center">
        <h3 class="text-3xl font-bold mb-6">Tentang Website</h3>
        <p class="max-w-3xl mx-auto text-gray-700 leading-relaxed">
            Website ini dibuat untuk membantu tim dalam mengatur project dan task. 
            Admin dapat memantau progress project, sedangkan user hanya fokus pada tugas mereka.
        </p>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 text-center">
        <h3 class="text-3xl font-bold mb-6">Kontak</h3>
        <div class="flex justify-center items-center space-x-3 text-gray-700">
            <i data-lucide="mail" class="w-6 h-6 text-indigo-600"></i>
            <p>Hubungi kami: <span class="font-semibold">support@taskmanager.com</span></p>
        </div>
    </section>

</div>
@endsection
