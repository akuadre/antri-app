<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreativeAI Studio - Unleash Your Imagination</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            500: '#f59e0b',
                            600: '#d97706'
                        },
                        accent: {
                            500: '#10b981',
                            600: '#059669'
                        },
                        purple: {
                            500: '#8b5cf6',
                            600: '#7c3aed'
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'float': 'float 6s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.3)' },
                            '100%': { boxShadow: '0 0 40px rgba(59, 130, 246, 0.6)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen overflow-x-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-blue-900/20 to-purple-900/30"></div>
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 w-48 h-48 bg-green-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -6s;"></div>
    </div>

    <!-- Main Container -->
    <div class="relative z-10 flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800/80 backdrop-blur-lg border-r border-gray-700/50 p-6 flex flex-col">
            <!-- Logo -->
            <div class="flex items-center space-x-3 mb-8">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center animate-glow">
                    <i class="fas fa-magic text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">CreativeAI</h1>
                    <p class="text-xs text-gray-400">Studio</p>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex-1 space-y-2">
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-600/20 text-blue-400 border border-blue-500/30 transition-all duration-300 hover:bg-blue-600/30">
                    <i class="fas fa-home text-lg"></i>
                    <span class="font-medium">Home</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-image text-lg"></i>
                    <span>Images</span>
                    <span class="ml-auto bg-green-500 text-xs px-2 py-1 rounded-full">NEW</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-video text-lg"></i>
                    <span>Videos</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-users text-lg"></i>
                    <span>Characters</span>
                    <span class="ml-auto bg-purple-500 text-xs px-2 py-1 rounded-full">HOT</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-book-open text-lg"></i>
                    <span>Storytelling</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-music text-lg"></i>
                    <span>Audio</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-cube text-lg"></i>
                    <span>3D Models</span>
                </a>
                <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                    <i class="fas fa-palette text-lg"></i>
                    <span>Style Palettes</span>
                </a>

                <div class="border-t border-gray-700 pt-4 mt-4">
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                        <i class="fas fa-cog text-lg"></i>
                        <span>Settings</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-300 hover:bg-gray-700/50 hover:text-white transition-all duration-300">
                        <i class="fas fa-crown text-lg text-yellow-400"></i>
                        <span>Upgrade Pro</span>
                    </a>
                </div>
            </nav>

            <!-- User Profile -->
            <div class="border-t border-gray-700 pt-4">
                <div class="flex items-center space-x-3 px-4 py-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Creative User</p>
                        <p class="text-xs text-gray-400">Free Plan</p>
                    </div>
                    <i class="fas fa-chevron-up text-gray-400"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 overflow-y-auto">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8 animate-fade-in">
                <div>
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-white via-blue-100 to-purple-100 bg-clip-text text-transparent mb-2">What would you like to create?</h1>
                    <p class="text-gray-400 text-lg">Choose from our powerful AI tools to bring your imagination to life</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="px-6 py-2 bg-gray-700/50 hover:bg-gray-600/50 rounded-lg transition-all duration-300 flex items-center space-x-2">
                        <i class="fas fa-bell"></i>
                        <span>Notifications</span>
                    </button>
                    <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-plus mr-2"></i>
                        Create New
                    </button>
                </div>
            </div>

            <!-- Main Creation Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12 animate-slide-up">
                <!-- Image Creation Card -->
                <div class="relative group overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 p-8 hover:scale-[1.02] transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-purple-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 animate-float">
                                <i class="fas fa-image text-2xl text-white"></i>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">Image Generation</h3>
                            <p class="text-blue-100 text-lg">Create stunning visuals with advanced AI models</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <button class="bg-black/30 hover:bg-black/50 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                <i class="fas fa-plus"></i>
                                <span>Create Image</span>
                            </button>
                            <button class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                <i class="fas fa-edit"></i>
                                <span>Edit Image</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Storytelling Card -->
                <div class="relative group overflow-hidden rounded-2xl bg-gradient-to-br from-yellow-500 via-orange-500 to-red-500 p-8 hover:scale-[1.02] transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 to-red-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-4 animate-float" style="animation-delay: -2s;">
                                <i class="fas fa-book-open text-2xl text-white"></i>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">AI Storytelling</h3>
                            <p class="text-yellow-100 text-lg">Craft compelling narratives with intelligent assistance</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <button class="bg-black/30 hover:bg-black/50 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                <i class="fas fa-user"></i>
                                <span>Character</span>
                            </button>
                            <button class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 backdrop-blur-sm">
                                <i class="fas fa-video"></i>
                                <span>To Video</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Starts Section -->
            <div class="mb-12 animate-fade-in" style="animation-delay: 0.3s;">
                <h2 class="text-2xl font-bold text-white mb-6">Quick Starts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-green-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-video text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Image to Video</h3>
                        <p class="text-gray-400 mb-4">Bring your images to life with AI animation</p>
                        <span class="inline-block bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-sm font-medium">New</span>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-purple-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-palette text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Choose a Style</h3>
                        <p class="text-gray-400 mb-4">Start with a style that inspires you</p>
                        <span class="inline-block bg-purple-500/20 text-purple-400 px-3 py-1 rounded-full text-sm font-medium">Popular</span>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-blue-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-th text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Explore Models</h3>
                        <p class="text-gray-400 mb-4">Discover 100+ fine-tuned AI models</p>
                        <span class="inline-block bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-pink-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-brain text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Train Model</h3>
                        <p class="text-gray-400 mb-4">Customize your creativity with personal models</p>
                        <span class="inline-block bg-pink-500/20 text-pink-400 px-3 py-1 rounded-full text-sm font-medium">Pro</span>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-yellow-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-search-plus text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Ultimate Upscale</h3>
                        <p class="text-gray-400 mb-4">Enhance your images to stunning quality</p>
                        <span class="inline-block bg-yellow-500/20 text-yellow-400 px-3 py-1 rounded-full text-sm font-medium">Enhanced</span>
                    </div>

                    <div class="bg-gray-800/60 backdrop-blur-lg rounded-xl p-6 hover:bg-gray-700/60 transition-all duration-300 border border-gray-700/50 group hover:border-emerald-500/50">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-comments text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Image to Prompt</h3>
                        <p class="text-gray-400 mb-4">Convert any image to detailed text prompt</p>
                        <span class="inline-block bg-emerald-500/20 text-emerald-400 px-3 py-1 rounded-full text-sm font-medium">Smart</span>
                    </div>
                </div>
            </div>

            <!-- Featured Apps Section -->
            <div class="animate-fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-2xl font-bold text-white mb-6">Featured AI Tools</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-xl p-6 text-white hover:scale-105 transition-all duration-300">
                        <i class="fas fa-robot text-3xl mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">AI Assistant</h3>
                        <p class="text-indigo-100 text-sm">Smart creative companion</p>
                    </div>

                    <div class="bg-gradient-to-br from-pink-600 to-red-700 rounded-xl p-6 text-white hover:scale-105 transition-all duration-300">
                        <i class="fas fa-cut text-3xl mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Background Remover</h3>
                        <p class="text-pink-100 text-sm">Remove backgrounds instantly</p>
                    </div>

                    <div class="bg-gradient-to-br from-teal-600 to-cyan-700 rounded-xl p-6 text-white hover:scale-105 transition-all duration-300">
                        <i class="fas fa-microphone text-3xl mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Voice Synthesis</h3>
                        <p class="text-teal-100 text-sm">Generate realistic voices</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-600 to-red-700 rounded-xl p-6 text-white hover:scale-105 transition-all duration-300">
                        <i class="fas fa-magic text-3xl mb-4"></i>
                        <h3 class="text-lg font-semibold mb-2">Style Transfer</h3>
                        <p class="text-orange-100 text-sm">Apply artistic styles</p>
                    </div>
                </div>
            </div>

            <!-- Recent Creations -->
            <div class="mt-12 animate-fade-in" style="animation-delay: 0.9s;">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-white">Recent Creations</h2>
                    <button class="text-blue-400 hover:text-blue-300 transition-colors duration-300">View All</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div class="aspect-square bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-play-circle text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-eye text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-download text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-yellow-500 to-orange-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-share text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-red-500 to-pink-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-heart text-white text-3xl"></i>
                        </div>
                    </div>
                    <div class="aspect-square bg-gradient-to-br from-indigo-500 to-purple-500 rounded-lg relative overflow-hidden group cursor-pointer">
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <i class="fas fa-plus text-white text-3xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <button class="fixed bottom-8 right-8 w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full shadow-lg hover:scale-110 transition-all duration-300 flex items-center justify-center z-50 animate-glow">
        <i class="fas fa-plus text-white text-xl"></i>
    </button>

    <!-- JavaScript for Interactivity -->
    <script>
        // Add smooth scrolling and interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.animate-fade-in, .animate-slide-up').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                observer.observe(el);
            });

            // Add click handlers for interactive elements
            document.querySelectorAll('button, .group').forEach(element => {
                element.addEventListener('click', function(e) {
                    // Create ripple effect
                    const ripple = document.createElement('div');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }

            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }

            button, .group {
                position: relative;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
