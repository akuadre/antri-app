<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntrianSehat - Sistem Antrian Digital Puskesmas</title>
    <meta name="description" content="Sistem antrian digital terdepan untuk Puskesmas. Daftar online, pantau antrian real-time, hemat waktu hingga 80%." />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            50: '#f0f9ff',
                            500: '#06b6d4',
                            600: '#0891b2'
                        },
                        accent: {
                            500: '#10b981',
                            600: '#059669'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-gray-700 bg-white/95 dark:bg-gray-900/95 backdrop-blur">
        <div class="container mx-auto flex h-16 items-center justify-between px-4 md:px-6">
            <div class="flex items-center space-x-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-primary-500 to-secondary-500 shadow-lg">
                    <i data-lucide="heart-pulse" class="h-6 w-6 text-white"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900 dark:text-white">AntrianSehat</h1>
                    <p class="text-xs text-gray-600 dark:text-gray-400">Sistem Antrian Digital</p>
                </div>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <a href="#features" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Fitur</a>
                <a href="#how-it-works" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Cara Kerja</a>
                <a href="#testimonials" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Testimoni</a>
                <a href="#contact" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Kontak</a>
            </nav>

            <div class="flex items-center space-x-4">
                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <i data-lucide="sun" class="h-5 w-5 hidden dark:block"></i>
                    <i data-lucide="moon" class="h-5 w-5 block dark:hidden"></i>
                </button>

                <a href="{{ route('login') }}" class="hidden md:inline-flex px-4 py-2 text-sm font-medium text-gray-700 dark:text-slate-800 dark:bg-slate-200 hover:bg-gray-100 dark:hover:bg-slate-300 rounded-md transition-colors">
                    Login
                </a>
                {{-- <button class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 rounded-md transition-all shadow-lg hover:shadow-xl">
                    Daftar Gratis
                </button> --}}

                <button id="mobile-menu-button" class="md:hidden p-2 text-gray-700 dark:text-gray-300">
                    <i data-lucide="menu" class="h-6 w-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
            <div class="px-4 py-2 space-y-2">
                <a href="#features" class="block py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Fitur</a>
                <a href="#how-it-works" class="block py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Cara Kerja</a>
                <a href="#testimonials" class="block py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Testimoni</a>
                <a href="#contact" class="block py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-50 via-white to-secondary-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-20 md:py-32">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="container mx-auto px-4 md:px-6 relative">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-center">
                <div class="space-y-8">
                    <div class="space-y-6">
                        <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-accent-500/10 text-accent-600 dark:text-accent-400 border border-accent-500/20">
                            <i data-lucide="sparkles" class="h-4 w-4 mr-2"></i>
                            Hemat Waktu Hingga 80%
                        </div>
                        <h1 class="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl lg:text-7xl text-gray-900 dark:text-white">
                            Antrian Digital
                            <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">
                                Puskesmas
                            </span>
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl">
                            Revolusi pelayanan kesehatan dengan sistem antrian digital yang menghemat waktu hingga 80%.
                            Daftar online, pantau antrian real-time, dan nikmati pelayanan yang lebih efisien.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white bg-gradient-to-r from-primary-600 to-secondary-600 hover:from-primary-700 hover:to-secondary-700 rounded-lg transition-all shadow-lg hover:shadow-xl">
                            Mulai Daftar Antrian
                            <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                        </button>
                        <button class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium border border-gray-300 dark:border-gray-600 bg-transparent hover:bg-gray-50 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg transition-all">
                            <i data-lucide="play" class="mr-2 h-5 w-5"></i>
                            Lihat Demo
                        </button>
                    </div>

                    <div class="flex items-center space-x-8 text-sm text-gray-600 dark:text-gray-400">
                        <div class="flex items-center space-x-2">
                            <i data-lucide="check-circle" class="h-4 w-4 text-accent-500"></i>
                            <span>Gratis untuk pasien</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i data-lucide="shield-check" class="h-4 w-4 text-accent-500"></i>
                            <span>Data aman & terlindungi</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-secondary-400 rounded-3xl blur-3xl opacity-20"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl p-8 border border-gray-200 dark:border-gray-700">
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Dashboard Antrian</h3>
                                <div class="flex items-center space-x-2 text-sm text-accent-600 dark:text-accent-400">
                                    <div class="w-2 h-2 bg-accent-500 rounded-full animate-pulse"></div>
                                    <span>Live</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-primary-50 dark:bg-primary-900/20 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-primary-600 dark:text-primary-400">23</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Antrian Aktif</div>
                                </div>
                                <div class="bg-accent-50 dark:bg-accent-900/20 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-accent-600 dark:text-accent-400">5</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">Poli Tersedia</div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-8 h-8 bg-primary-100 dark:bg-primary-900 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-medium text-primary-600 dark:text-primary-400">A12</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900 dark:text-white">Poli Umum</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Estimasi: 15 menit</div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-accent-600 dark:text-accent-400 font-medium">Dipanggil</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 md:py-32 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300">
                    Fitur Unggulan
                </div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl text-gray-900 dark:text-white">
                    Solusi Lengkap Antrian Digital
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Fitur-fitur canggih yang dirancang khusus untuk meningkatkan efisiensi pelayanan kesehatan di Puskesmas.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 flex items-center justify-center mb-4">
                        <i data-lucide="smartphone" class="h-6 w-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Antrian Real-time</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Pantau posisi antrian Anda secara real-time melalui smartphone dengan notifikasi otomatis.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-accent-500 to-accent-600 flex items-center justify-center mb-4">
                        <i data-lucide="calendar-plus" class="h-6 w-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Pendaftaran Online</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Daftar antrian dari rumah tanpa perlu datang ke Puskesmas. Pilih poli dan jadwal yang tersedia.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-secondary-500 to-secondary-600 flex items-center justify-center mb-4">
                        <i data-lucide="bell" class="h-6 w-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Notifikasi Pintar</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Terima notifikasi via WhatsApp atau SMS ketika giliran Anda sudah dekat untuk dipanggil.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow rounded-lg p-6">
                    <div class="h-12 w-12 rounded-lg bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center mb-4">
                        <i data-lucide="building-2" class="h-6 w-6 text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white">Multi-Poli</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Kelola antrian untuk berbagai poli secara bersamaan dengan sistem terintegrasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 md:py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-secondary-100 dark:bg-secondary-900 text-secondary-700 dark:text-secondary-300">
                    Cara Kerja
                </div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl text-gray-900 dark:text-white">
                    4 Langkah Mudah
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Proses yang sederhana dan intuitif untuk mendapatkan pelayanan kesehatan yang lebih efisien.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="text-center">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-r from-primary-500 to-primary-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            1
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-accent-500 rounded-full flex items-center justify-center">
                            <i data-lucide="smartphone" class="h-3 w-3 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Daftar Online</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Buka website atau aplikasi AntrianSehat dan pilih Puskesmas terdekat.
                    </p>
                </div>

                <div class="text-center">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-r from-secondary-500 to-secondary-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            2
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-accent-500 rounded-full flex items-center justify-center">
                            <i data-lucide="calendar" class="h-3 w-3 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Pilih Poli & Jadwal</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Tentukan poli yang diinginkan dan pilih jadwal yang sesuai dengan kebutuhan Anda.
                    </p>
                </div>

                <div class="text-center">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-r from-accent-500 to-accent-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            3
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-accent-500 rounded-full flex items-center justify-center">
                            <i data-lucide="clock" class="h-3 w-3 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Pantau Antrian</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Pantau posisi antrian Anda secara real-time dan estimasi waktu tunggu.
                    </p>
                </div>

                <div class="text-center">
                    <div class="relative mb-6">
                        <div class="w-16 h-16 mx-auto bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            4
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-accent-500 rounded-full flex items-center justify-center">
                            <i data-lucide="heart-pulse" class="h-3 w-3 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Terima Pelayanan</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Datang ke Puskesmas saat giliran Anda dan nikmati pelayanan yang lebih cepat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 md:py-32 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center space-y-4 mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-accent-100 dark:bg-accent-900 text-accent-700 dark:text-accent-300">
                    Testimoni
                </div>
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl text-gray-900 dark:text-white">
                    Dipercaya Ribuan Pengguna
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Lihat bagaimana AntrianSehat membantu dokter, pasien, dan staff Puskesmas meningkatkan efisiensi pelayanan.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-primary-600 rounded-full flex items-center justify-center text-white font-semibold">
                            DR
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Dr. Sarah Wijaya</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Dokter Umum, Puskesmas Sehat</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "AntrianSehat sangat membantu mengatur jadwal pasien. Tidak ada lagi antrian panjang dan pasien bisa datang tepat waktu."
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-accent-500 to-accent-600 rounded-full flex items-center justify-center text-white font-semibold">
                            IB
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Ibu Sari Indah</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pasien Puskesmas</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "Sekarang saya tidak perlu menunggu lama di Puskesmas. Bisa pantau antrian dari rumah dan datang saat giliran saya hampir tiba."
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-secondary-500 to-secondary-600 rounded-full flex items-center justify-center text-white font-semibold">
                            AL
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white">Ahmad Lutfi</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Admin Puskesmas</p>
                        </div>
                    </div>
                    <div class="flex space-x-1 mb-4">
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                        <i data-lucide="star" class="h-4 w-4 fill-yellow-400 text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">
                        "Sistem ini memudahkan pekerjaan kami. Data pasien lebih terorganisir dan laporan antrian bisa dibuat otomatis."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 md:py-32 bg-gradient-to-r from-primary-600 to-secondary-600 dark:from-primary-700 dark:to-secondary-700">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <div class="max-w-3xl mx-auto space-y-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl text-white">
                    Siap Merasakan Pelayanan Kesehatan yang Lebih Efisien?
                </h2>
                <p class="text-xl text-primary-100">
                    Bergabunglah dengan ribuan Puskesmas yang telah merasakan manfaat AntrianSehat.
                    Mulai transformasi digital hari ini juga!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium bg-white text-primary-600 hover:bg-gray-100 rounded-lg transition-all shadow-lg hover:shadow-xl">
                        Daftar Sekarang
                        <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                    </button>
                    <button class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium border border-white text-white hover:bg-white hover:text-primary-600 rounded-lg transition-all bg-transparent">
                        Konsultasi Gratis
                    </button>
                </div>
                <div class="flex items-center justify-center space-x-8 text-sm text-primary-100">
                    <div class="flex items-center space-x-2">
                        <i data-lucide="check-circle" class="h-4 w-4"></i>
                        <span>Setup gratis</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i data-lucide="headphones" class="h-4 w-4"></i>
                        <span>Support 24/7</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i data-lucide="shield" class="h-4 w-4"></i>
                        <span>Data aman</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 dark:bg-black text-white py-16">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-primary-500 to-secondary-500">
                            <i data-lucide="heart-pulse" class="h-6 w-6 text-white"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold">AntrianSehat</h1>
                            <p class="text-xs text-gray-400">Sistem Antrian Digital</p>
                        </div>
                    </div>
                    <p class="text-gray-400 max-w-xs">
                        Revolusi pelayanan kesehatan dengan sistem antrian digital yang menghemat waktu hingga 80%.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="facebook" class="h-5 w-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="twitter" class="h-5 w-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="instagram" class="h-5 w-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-lucide="linkedin" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Produk</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Fitur Utama</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Dashboard</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Notifikasi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Laporan</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="font-semibold">Dukungan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Dokumentasi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2024 AntrianSehat. Seluruh hak cipta dilindungi.</p>
                <div class="flex space-x-6 mt-4 md:mt-0 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Syarat Layanan</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        // Check for saved theme preference or default to light mode
        const savedTheme = localStorage.getItem('theme') || 'light';
        html.classList.toggle('dark', savedTheme === 'dark');

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', currentTheme);
        });

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
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Add loading animation to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                // Add loading state for demo purposes
                if (this.textContent.includes('Daftar') || this.textContent.includes('Demo')) {
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i data-lucide="loader-2" class="h-4 w-4 animate-spin mr-2"></i>Loading...';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                        lucide.createIcons();
                    }, 2000);
                }
            });
        });
    </script>
</body>
</html>
