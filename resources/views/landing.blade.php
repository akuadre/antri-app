<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreamLine - Streamline Your Workflow</title>
    <meta name="description" content="Boost productivity by 300% with our AI-powered project management platform. Automate tasks, collaborate seamlessly, and deliver projects faster than ever.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'spin': 'spin 1s linear infinite',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-white">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur">
        <div class="container mx-auto flex h-16 items-center justify-between px-4 md:px-6">
            <div class="flex items-center space-x-2">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-purple-600">
                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
                <span class="text-xl font-bold">StreamLine</span>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <a href="#features" class="text-sm font-medium hover:text-blue-600 transition-colors">Features</a>
                <a href="#testimonials" class="text-sm font-medium hover:text-blue-600 transition-colors">Testimonials</a>
                <a href="#pricing" class="text-sm font-medium hover:text-blue-600 transition-colors">Pricing</a>
                <a href="#contact" class="text-sm font-medium hover:text-blue-600 transition-colors">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href ="{{ route('login') }}" class="hidden md:inline-flex px-4 py-2 text-sm font-medium hover:bg-gray-100 rounded-md transition-colors">
                    Sign In
                </a>
                <button class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 rounded-md transition-all">
                    Start Free Trial
                </button>
                <button id="mobile-menu-button" class="md:hidden p-2">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t bg-white">
            <div class="px-4 py-2 space-y-2">
                <a href="#features" class="block py-2 text-sm font-medium hover:text-blue-600 transition-colors">Features</a>
                <a href="#testimonials" class="block py-2 text-sm font-medium hover:text-blue-600 transition-colors">Testimonials</a>
                <a href="#pricing" class="block py-2 text-sm font-medium hover:text-blue-600 transition-colors">Pricing</a>
                <a href="#contact" class="block py-2 text-sm font-medium hover:text-blue-600 transition-colors">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-purple-50 py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-center">
                <div class="space-y-8">
                    <div class="space-y-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-700">
                            🚀 New: AI-Powered Workflows
                        </span>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl">
                            Streamline Your
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                                Workflow
                            </span>
                        </h1>
                        <p class="text-xl text-gray-600 max-w-2xl">
                            Boost productivity by 300% with our AI-powered project management platform. Automate tasks,
                            collaborate seamlessly, and deliver projects faster than ever.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="inline-flex items-center justify-center px-8 py-6 text-lg font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 rounded-md transition-all">
                            Start Free Trial
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                        <button class="inline-flex items-center justify-center px-8 py-6 text-lg font-medium border border-gray-300 bg-transparent hover:bg-gray-50 rounded-md transition-all">
                            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                            Watch Demo
                        </button>
                    </div>

                    <div class="flex items-center space-x-8 text-sm text-gray-600">
                        <div class="flex items-center space-x-2">
                            <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>14-day free trial</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>No credit card required</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-400 rounded-3xl blur-3xl opacity-20"></div>
                    <img src="/placeholder.svg?height=600&width=800" alt="StreamLine Dashboard" class="relative rounded-2xl shadow-2xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-700">
                    Features
                </span>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">
                    Everything you need to succeed
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Powerful features designed to help teams collaborate better and deliver exceptional results.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white border-0 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">AI-Powered Automation</h3>
                    <p class="text-gray-600">
                        Automate repetitive tasks with intelligent workflows that learn from your team's patterns.
                    </p>
                </div>

                <div class="bg-white border-0 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Team Collaboration</h3>
                    <p class="text-gray-600">
                        Real-time collaboration tools that keep your team aligned and productive from anywhere.
                    </p>
                </div>

                <div class="bg-white border-0 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Enterprise Security</h3>
                    <p class="text-gray-600">
                        Bank-level security with SOC 2 compliance, SSO, and advanced permission controls.
                    </p>
                </div>

                <div class="bg-white border-0 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-orange-500 to-orange-600 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Smart Analytics</h3>
                    <p class="text-gray-600">
                        Gain insights into team performance with detailed analytics and customizable reports.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 md:py-32 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-700">
                    Testimonials
                </span>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Loved by teams worldwide</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    See what our customers have to say about StreamLine.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white border-0 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="/placeholder.svg?height=48&width=48" alt="Sarah Johnson" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-sm text-gray-600">Product Manager, TechCorp</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600">
                        "StreamLine transformed how our team works. We've reduced project delivery time by 40% and our team
                        collaboration has never been better."
                    </p>
                </div>

                <div class="bg-white border-0 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="/placeholder.svg?height=48&width=48" alt="Michael Chen" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <p class="text-sm text-gray-600">CTO, StartupXYZ</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600">
                        "The AI automation features are incredible. Tasks that used to take hours now happen automatically.
                        It's like having an extra team member."
                    </p>
                </div>

                <div class="bg-white border-0 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="/placeholder.svg?height=48&width=48" alt="Emily Rodriguez" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-semibold">Emily Rodriguez</h4>
                            <p class="text-sm text-gray-600">Operations Director, GrowthCo</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="h-4 w-4 fill-yellow-400 text-yellow-400" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-600">
                        "Security was our biggest concern, but StreamLine exceeded our expectations. The enterprise features
                        give us complete peace of mind."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-700">
                    Pricing
                </span>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Simple, transparent pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose the perfect plan for your team. All plans include a 14-day free trial.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3 max-w-5xl mx-auto">
                <div class="bg-white border-2 hover:border-blue-200 transition-colors rounded-lg p-6">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-2">Starter</h3>
                        <p class="text-gray-600 mb-4">Perfect for small teams getting started</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold">$9</span>
                            <span class="text-gray-600">/user/month</span>
                        </div>
                    </div>
                    <div class="space-y-4 mb-6">
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Up to 10 team members</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Basic automation</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>5GB storage</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Email support</span>
                            </li>
                        </ul>
                    </div>
                    <button class="w-full px-4 py-2 border border-gray-300 bg-transparent hover:bg-gray-50 rounded-md transition-all">
                        Start Free Trial
                    </button>
                </div>

                <div class="bg-white border-2 border-blue-500 relative hover:border-blue-600 transition-colors rounded-lg p-6">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600">Most Popular</span>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-2">Professional</h3>
                        <p class="text-gray-600 mb-4">Best for growing teams and businesses</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold">$19</span>
                            <span class="text-gray-600">/user/month</span>
                        </div>
                    </div>
                    <div class="space-y-4 mb-6">
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Up to 50 team members</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Advanced AI automation</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>100GB storage</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Priority support</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Custom integrations</span>
                            </li>
                        </ul>
                    </div>
                    <button class="w-full px-4 py-2 text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 rounded-md transition-all">
                        Start Free Trial
                    </button>
                </div>

                <div class="bg-white border-2 hover:border-purple-200 transition-colors rounded-lg p-6">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                        <p class="text-gray-600 mb-4">For large organizations with advanced needs</p>
                        <div class="mt-4">
                            <span class="text-4xl font-bold">$39</span>
                            <span class="text-gray-600">/user/month</span>
                        </div>
                    </div>
                    <div class="space-y-4 mb-6">
                        <ul class="space-y-3">
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Unlimited team members</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Full AI automation suite</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Unlimited storage</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>24/7 dedicated support</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>SSO & advanced security</span>
                            </li>
                        </ul>
                    </div>
                    <button class="w-full px-4 py-2 border border-gray-300 bg-transparent hover:bg-gray-50 rounded-md transition-all">
                        Contact Sales
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 md:py-32 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <div class="max-w-3xl mx-auto space-y-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl text-white">
                    Ready to streamline your workflow?
                </h2>
                <p class="text-xl text-blue-100">
                    Join thousands of teams who have transformed their productivity with StreamLine. Start your free trial
                    today and see the difference.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="inline-flex items-center justify-center px-8 py-6 text-lg font-medium bg-white text-blue-600 hover:bg-gray-100 rounded-md transition-all">
                        Start Free Trial
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                    <button class="inline-flex items-center justify-center px-8 py-6 text-lg font-medium border border-white text-white hover:bg-white hover:text-blue-600 rounded-md transition-all bg-transparent">
                        Schedule Demo
                    </button>
                </div>
                <p class="text-sm text-blue-100">14-day free trial • No credit card required • Cancel anytime</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="space-y-4">
                    <div class="flex items-center space-x-2">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-r from-blue-600 to-purple-600">
                            <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        </div>
                        <span class="text-xl font-bold">StreamLine</span>
                    </div>
                    <p class="text-gray-400 max-w-xs">
                        Streamline your workflow and boost productivity with our AI-powered project management platform.
                    </p>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Product</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Integrations</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Company</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Status</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Security</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2024 StreamLine. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>
