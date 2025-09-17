<aside class="w-64 bg-gradient-to-b from-blue-800 to-blue-600 text-white min-h-screen p-6 shadow-lg">
    <div class="flex items-center space-x-3 mb-12 transition-transform hover:scale-105">
        <i data-lucide="layout-dashboard" class="w-8 h-8"></i>
        <h2 class="text-2xl font-bold tracking-wide">TodoList</h2>
    </div>

    <nav class="space-y-4">
        @if(auth()->check())
            @if(auth()->user()->role === 'admin')

                <a href="{{ route('projects.index') }}"
                   class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-blue-500 hover:shadow-md hover:translate-x-1">
                    <i data-lucide="folder-kanban" class="w-5 h-5"></i>
                    <span class="font-medium">Kelola Project</span>
                </a>

                <a href="{{ route('tasks.index') }}"
                   class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-blue-500 hover:shadow-md hover:translate-x-1">
                    <i data-lucide="list-checks" class="w-5 h-5"></i>
                    <span class="font-medium">Kelola Task</span>
                </a>
            @else
                <a href="{{ route('tasks.my') }}"
                   class="flex items-center space-x-3 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-blue-500 hover:shadow-md hover:translate-x-1">
                    <i data-lucide="clipboard-check" class="w-5 h-5"></i>
                    <span class="font-medium">Tugas Saya</span>
                </a>
            @endif
        @endif
    </nav>
</aside>
