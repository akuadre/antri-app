@php
    $currentRoute = Route::currentRouteName() ?? request()->path();
@endphp

<div class="w-64 bg-gray-800/80 backdrop-blur-lg border-r border-gray-700/50 p-6 flex flex-col sticky top-0 h-screen">
    <!-- Logo -->
    <div class="flex items-center space-x-3 mb-8">
        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center animate-glow">
            <i class="fas fa-hospital text-white text-xl"></i>
        </div>
        <div>
            <h1 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Puskesmas</h1>
            <p class="text-xs text-gray-400">Admin Dashboard</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="space-y-2">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg
        {{ str_starts_with($currentRoute, 'home') ? 'bg-blue-600/20 text-blue-400 border border-blue-500/30' : 'text-gray-300 hover:bg-gray-700/50 hover:text-white' }} transition-all duration-300">
            <i class="fas fa-home text-lg"></i>
            <span class="font-medium">Dashboard</span>
        </a>
        <a href="{{ route('antrian') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg
        {{ str_starts_with($currentRoute, 'antrian') ? 'bg-blue-600/20 text-blue-400 border border-blue-500/30' : 'text-gray-300 hover:bg-gray-700/50 hover:text-white' }} transition-all duration-300">
            <i class="fas fa-list-ol text-lg"></i>
            <span>Kelola Antrian</span>
            <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">{{ $antrianCount }}</span>
        </a>
        <a href="{{ route('dokter') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg
        {{ str_starts_with($currentRoute, 'dokter') ? 'bg-blue-600/20 text-blue-400 border border-blue-500/30' : 'text-gray-300 hover:bg-gray-700/50 hover:text-white' }} transition-all duration-300">
            <i class="fas fa-user-md text-lg"></i>
            <span>Kelola Dokter</span>
        </a>
        <a href="{{ route('poli') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg
        {{ str_starts_with($currentRoute, 'poli') ? 'bg-blue-600/20 text-blue-400 border border-blue-500/30' : 'text-gray-300 hover:bg-gray-700/50 hover:text-white' }} transition-all duration-300">
            <i class="fas fa-procedures text-lg"></i>
            <span>Kelola Poli</span>
        </a>
    </nav>

    <!-- User Profile Section -->
    <div class="mt-auto pt-4 border-t border-gray-700">
        <div class="flex items-center space-x-3 px-4 py-3">
            <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                <i class="fas fa-user text-white"></i>
            </div>
            <div>
                <p class="font-medium">Admin</p>
                <p class="text-xs text-gray-400">Super Admin</p>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="w-full mt-2">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-red-600/20 hover:bg-red-600/30 text-red-400 rounded-lg transition-all duration-300 border border-red-500/30">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>
