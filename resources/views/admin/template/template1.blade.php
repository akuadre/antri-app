@extends('layouts.app')

@section('title', 'Buat Akun')

@section('content')
    <!-- Main Container -->
    <div class="relative z-10 flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800/80 backdrop-blur-lg border-r border-gray-700/50 p-6 flex flex-col sticky top-0 h-screen">
            <!-- Logo -->
            <div class="flex items-center space-x-3 mb-8">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center animate-glow">
                    <i class="fas fa-users text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Antrianku</h1>
                    <p class="text-xs text-gray-400">Admin Dashboard</p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="space-y-2">
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-600/20 text-blue-400 border border-blue-500/30 transition-all duration-300 hover:bg-blue-600/30">
                    <i class="fas fa-home text-lg"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-list-ol text-lg"></i>
                    <span>Queue Management</span>
                    <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">24</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-th-large text-lg"></i>
                    <span>Service Categories</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-hospital text-lg"></i>
                    <span>Health Services</span>
                    <span class="ml-auto bg-green-500 text-xs px-2 py-1 rounded-full">12</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-university text-lg"></i>
                    <span>Finance Services</span>
                    <span class="ml-auto bg-yellow-500 text-xs px-2 py-1 rounded-full">8</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-utensils text-lg"></i>
                    <span>Food & Beverage</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-store text-lg"></i>
                    <span>Retail Services</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-chart-bar text-lg"></i>
                    <span>Analytics</span>
                </a>

                <div class="border-t border-gray-700 pt-4 mt-4">
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                        <i class="fas fa-cog text-lg"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                        <i class="fas fa-users-cog text-lg"></i>
                        <span>User Management</span>
                    </a>
                </div>
            </nav>

            <!-- User Profile Section -->
            <div class="border-t border-gray-700 pt-4">
                <div class="flex items-center space-x-3 px-4 py-3 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Admin User</p>
                        <p class="text-xs text-gray-400">Administrator</p>
                    </div>
                </div>

                <!-- Secure Logout Form -->
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center space-x-2 px-4 py-3 bg-red-600/20 hover:bg-red-600/30 text-red-400 rounded-lg transition-all duration-300 border border-red-500/30">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen">
            <!-- Top Header -->
            <header class="bg-gray-800/60 backdrop-blur-lg border-b border-gray-700/50 p-6 sticky top-0 z-20">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold bg-gradient-to-r from-white via-blue-100 to-purple-100 bg-clip-text text-transparent">Queue Management Dashboard</h1>
                        <p class="text-gray-400 text-lg">Monitor and manage digital queues across all service categories</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="px-4 py-2 bg-gray-700/50 hover:bg-gray-600/50 rounded-lg transition-all duration-300 flex items-center space-x-2">
                            <i class="fas fa-bell"></i>
                            <span class="hidden md:inline">Notifications</span>
                            <span class="bg-red-500 text-xs px-2 py-1 rounded-full ml-2">3</span>
                        </button>
                        <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i>
                            <span class="hidden md:inline">Add Service</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Dashboard Content -->
            <div class="flex-1 p-8 overflow-y-auto">
                <!-- Dashboard Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 animate-fade-in">
                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Active Queues</p>
                                <p class="text-3xl font-bold text-white mt-2">127</p>
                                <p class="text-green-400 text-sm mt-2">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    +12% from yesterday
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-list-ol text-blue-400 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-green-500/50 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Served Today</p>
                                <p class="text-3xl font-bold text-white mt-2">1,847</p>
                                <p class="text-green-400 text-sm mt-2">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    +8% from yesterday
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-check-circle text-green-400 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-yellow-500/50 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Avg. Wait Time</p>
                                <p class="text-3xl font-bold text-white mt-2">23m</p>
                                <p class="text-red-400 text-sm mt-2">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    +3m from yesterday
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-clock text-yellow-400 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 group">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-400 text-sm font-medium">Service Categories</p>
                                <p class="text-3xl font-bold text-white mt-2">6</p>
                                <p class="text-gray-400 text-sm mt-2">
                                    <i class="fas fa-equals mr-1"></i>
                                    No change
                                </p>
                            </div>
                            <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-th-large text-purple-400 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Category Management -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8 animate-slide-up">
                    <!-- Queue Status Card -->
                    <div class="relative group overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 p-8 hover:scale-[1.02] transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-purple-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="mb-6">
                                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 animate-float">
                                    <i class="fas fa-list-ol text-2xl text-white"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-white mb-2">Real-time Queue Status</h3>
                                <p class="text-blue-100 text-lg">Monitor active queues across all service categories</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="bg-black/30 hover:bg-black/50 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                    <i class="fas fa-eye"></i>
                                    <span>View All</span>
                                </button>
                                <button class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                    <i class="fas fa-plus"></i>
                                    <span>Add Queue</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Service Management Card -->
                    <div class="relative group overflow-hidden rounded-2xl bg-gradient-to-br from-green-500 via-emerald-500 to-teal-500 p-8 hover:scale-[1.02] transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-400/20 to-teal-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="relative z-10">
                            <div class="mb-6">
                                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 animate-float" style="animation-delay: -2s;">
                                    <i class="fas fa-cogs text-2xl text-white"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-white mb-2">Service Management</h3>
                                <p class="text-green-100 text-lg">Configure and manage service categories</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="bg-black/30 hover:bg-black/50 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                    <i class="fas fa-edit"></i>
                                    <span>Configure</span>
                                </button>
                                <button class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Reports</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Profile Form Section -->
                <div class="mb-8 animate-fade-in" style="animation-delay: 0.3s;">
                    <h2 class="text-2xl font-bold text-white mb-6">Admin Profile Settings</h2>
                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-8 border border-gray-700/50">
                        <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Input -->
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Full Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    value="Admin User"
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300"
                                    placeholder="Enter full name"
                                >
                            </div>

                            <!-- Email Input -->
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300">Email Address</label>
                                <input
                                    type="email"
                                    name="email"
                                    value="admin@antrianku.com"
                                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white placeholder-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition-all duration-300"
                                    placeholder="Enter email address"
                                >
                            </div>

                            <!-- Profile Photo Upload -->
                            <div class="md:col-span-2 space-y-4">
                                <label class="text-sm font-medium text-gray-300">Profile Photo</label>
                                <div class="flex items-center space-x-6">
                                    <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user text-white text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <input
                                            type="file"
                                            name="profile_photo"
                                            accept="image/*"
                                            class="hidden"
                                            id="profile-photo"
                                        >
                                        <label
                                            for="profile-photo"
                                            class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-lg cursor-pointer transition-all duration-300 transform hover:scale-105"
                                        >
                                            <i class="fas fa-upload mr-2"></i>
                                            Upload Photo
                                        </label>
                                        <p class="text-gray-400 text-sm mt-2">Recommended: 400x400px, JPG or PNG, max 5MB</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Save Button -->
                            <div class="md:col-span-2">
                                <button
                                    type="submit"
                                    class="px-8 py-3 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-500 hover:to-emerald-500 text-white rounded-lg font-medium transition-all duration-300 transform hover:scale-105"
                                >
                                    <i class="fas fa-save mr-2"></i>
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Service Categories Overview -->
                <div class="mb-8 animate-fade-in" style="animation-delay: 0.4s;">
                    <h2 class="text-2xl font-bold text-white mb-6">Service Categories</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-red-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-hospital text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Health Services</h3>
                            <p class="text-gray-400 mb-4">Medical appointments and consultations</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-red-500/20 text-red-400 px-3 py-1 rounded-full text-sm font-medium">12 Active</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-yellow-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-university text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Finance Services</h3>
                            <p class="text-gray-400 mb-4">Banking and financial services</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-sm font-medium">8 Active</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-blue-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-tools text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Service Center</h3>
                            <p class="text-gray-400 mb-4">Technical support and repairs</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-sm font-medium">15 Active</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-green-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-utensils text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Food & Beverage</h3>
                            <p class="text-gray-400 mb-4">Restaurant and cafe services</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-medium">23 Active</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-purple-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-store text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Retail Services</h3>
                            <p class="text-gray-400 mb-4">Shopping and retail assistance</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-purple-500/20 text-purple-400 px-3 py-1 rounded-full text-sm font-medium">18 Active</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-indigo-500/50">
                            <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-plus text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">Add Category</h3>
                            <p class="text-gray-400 mb-4">Create a new service category</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-block bg-indigo-500/20 text-indigo-400 px-3 py-1 rounded-full text-sm font-medium">Configure</span>
                                <button class="text-gray-400 hover:text-white transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Queue Activity -->
                <div class="animate-fade-in" style="animation-delay: 0.5s;">
                    <h2 class="text-2xl font-bold text-white mb-6">Recent Queue Activity</h2>
                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl border border-gray-700/50 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-700/50 border-b border-gray-600/50">
                                    <tr>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Queue ID</th>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Service Category</th>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Customer</th>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Status</th>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Wait Time</th>
                                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-600/50">
                                    <tr class="hover:bg-gray-700/30 transition-colors">
                                        <td class="px-6 py-4 text-sm text-white font-medium">Q001</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">Health Services</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">John Doe</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-xs font-medium">Waiting</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-300">15m</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-400 hover:text-blue-300 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-green-400 hover:text-green-300">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-700/30 transition-colors">
                                        <td class="px-6 py-4 text-sm text-white font-medium">Q002</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">Finance Services</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">Jane Smith</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-xs font-medium">Being Served</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-300">8m</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-400 hover:text-blue-300 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-green-400 hover:text-green-300">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-700/30 transition-colors">
                                        <td class="px-6 py-4 text-sm text-white font-medium">Q003</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">Food & Beverage</td>
                                        <td class="px-6 py-4 text-sm text-gray-300">Mike Johnson</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-xs font-medium">Completed</span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-300">12m</td>
                                        <td class="px-6 py-4">
                                            <button class="text-blue-400 hover:text-blue-300 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-gray-500">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 space-y-4 z-50">
        <button class="w-14 h-14 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 rounded-full shadow-lg flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 animate-float">
            <i class="fas fa-plus text-xl"></i>
        </button>
        <button class="w-14 h-14 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-500 hover:to-emerald-500 rounded-full shadow-lg flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 animate-float" style="animation-delay: -2s;">
            <i class="fas fa-headset text-xl"></i>
        </button>
    </div>
@endsection
