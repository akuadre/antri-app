<div class="w-64 bg-white/90 dark:bg-gray-900/80 backdrop-blur-lg border-r border-gray-200/80 dark:border-gray-700/50 p-6 flex flex-col sticky top-0 h-screen transition-colors duration-300">
    <!-- Logo -->
    <div class="flex items-center space-x-3 mb-8 group">
        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center shadow-md group-hover:shadow-lg transition-all duration-300">
            <i class="fas fa-hospital text-white text-xl"></i>
        </div>
        <div>
            <h1 class="text-xl font-bold bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-transparent">Puskesmas</h1>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">Management System</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="space-y-1.5">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl
        {{ str_starts_with($currentRoute, 'home') ?
           'bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-900/20 text-blue-600 dark:text-blue-300 shadow-sm border border-blue-100 dark:border-blue-800/50' :
           'text-gray-600 dark:text-gray-300 hover:bg-gray-100/80 dark:hover:bg-gray-800/80 hover:text-gray-900 dark:hover:text-white' }}
        transition-all duration-300 group/nav">
            <i class="fas fa-home text-lg w-5 text-center {{ str_starts_with($currentRoute, 'home') ? 'text-blue-500 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500 group-hover/nav:text-blue-500 dark:group-hover/nav:text-blue-400' }}"></i>
            <span class="font-medium">Dashboard</span>
        </a>

        <a href="{{ route('antrian') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl
        {{ str_starts_with($currentRoute, 'antrian') ?
           'bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-900/20 text-blue-600 dark:text-blue-300 shadow-sm border border-blue-100 dark:border-blue-800/50' :
           'text-gray-600 dark:text-gray-300 hover:bg-gray-100/80 dark:hover:bg-gray-800/80 hover:text-gray-900 dark:hover:text-white' }}
        transition-all duration-300 group/nav">
            <i class="fas fa-list-ol text-lg w-5 text-center {{ str_starts_with($currentRoute, 'antrian') ? 'text-blue-500 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500 group-hover/nav:text-blue-500 dark:group-hover/nav:text-blue-400' }}"></i>
            <span>Kelola Antrian</span>
            @if($antrianCount > 0)
            <span class="ml-auto bg-red-500 text-white text-xs px-2 py-0.5 rounded-full animate-pulse">{{ $antrianCount }}</span>
            @endif
        </a>

        <a href="{{ route('dokter') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl
        {{ str_starts_with($currentRoute, 'dokter') ?
           'bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-900/20 text-blue-600 dark:text-blue-300 shadow-sm border border-blue-100 dark:border-blue-800/50' :
           'text-gray-600 dark:text-gray-300 hover:bg-gray-100/80 dark:hover:bg-gray-800/80 hover:text-gray-900 dark:hover:text-white' }}
        transition-all duration-300 group/nav">
            <i class="fas fa-user-md text-lg w-5 text-center {{ str_starts_with($currentRoute, 'dokter') ? 'text-blue-500 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500 group-hover/nav:text-blue-500 dark:group-hover/nav:text-blue-400' }}"></i>
            <span>Kelola Dokter</span>
        </a>

        <a href="{{ route('poli') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl
        {{ str_starts_with($currentRoute, 'poli') ?
           'bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-900/20 text-blue-600 dark:text-blue-300 shadow-sm border border-blue-100 dark:border-blue-800/50' :
           'text-gray-600 dark:text-gray-300 hover:bg-gray-100/80 dark:hover:bg-gray-800/80 hover:text-gray-900 dark:hover:text-white' }}
        transition-all duration-300 group/nav">
            <i class="fas fa-procedures text-lg w-5 text-center {{ str_starts_with($currentRoute, 'poli') ? 'text-blue-500 dark:text-blue-400' : 'text-gray-400 dark:text-gray-500 group-hover/nav:text-blue-500 dark:group-hover/nav:text-blue-400' }}"></i>
            <span>Kelola Poli</span>
        </a>
    </nav>

    <!-- User Profile Section -->
    <div class="mt-auto pt-4 border-t border-gray-200/50 dark:border-gray-700/50">
        <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl hover:bg-gray-100/80 dark:hover:bg-gray-800/80 transition-all duration-300 group">
            <div class="relative">
                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center shadow-md group-hover:shadow-lg transition-all duration-300">
                    <i class="fas fa-user-shield text-white"></i>
                </div>
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white dark:border-gray-900"></span>
            </div>
            <div class="flex-1 min-w-0">
                <p class="font-medium text-gray-800 dark:text-white truncate">Administrator</p>
                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">admin@puskesmas.id</p>
            </div>
            <i class="fas fa-chevron-right text-xs text-gray-400 dark:text-gray-500 group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-300"></i>
        </a>

        <form action="{{ route('logout') }}" method="POST" class="w-full mt-2">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-2.5 bg-gray-100/80 dark:bg-gray-800/80 hover:bg-red-100 dark:hover:bg-red-900/30 text-gray-700 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 rounded-lg transition-all duration-300 border border-gray-200/80 dark:border-gray-700/50 hover:border-red-200 dark:hover:border-red-800/50">
                <i class="fas fa-sign-out-alt text-sm"></i>
                <span class="text-sm font-medium">Keluar</span>
            </button>
        </form>
    </div>
</div>
