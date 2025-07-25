<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <title>@yield('title', 'Antrian')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/search.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Check for saved theme preference or use system preference
        const storedTheme = localStorage.getItem('theme') ||
                          (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

        // Apply the theme
        if (storedTheme) {
            document.documentElement.classList.add(storedTheme);
            document.documentElement.classList.remove(storedTheme === 'dark' ? 'light' : 'dark');
        }

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
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-white min-h-screen overflow-x-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-100 via-blue-50/20 to-purple-50/30 dark:from-gray-900 dark:via-blue-900/20 dark:to-purple-900/30"></div>
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-200/20 dark:bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-purple-200/20 dark:bg-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-1/2 w-48 h-48 bg-green-200/20 dark:bg-green-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -6s;"></div>
    </div>

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
