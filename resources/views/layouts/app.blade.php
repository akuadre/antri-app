<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <title>@yield('title', 'Antrian')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/search.png') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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


    <!-- Script -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- SweetAlert Notifications -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Success message
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}',
                    timer: 3000,
                    showConfirmButton: false,
                    background: '{{ session('theme') === 'dark' ? '#1f2937' : '#ffffff' }}',
                    color: '{{ session('theme') === 'dark' ? '#ffffff' : '#1f2937' }}'
                });
            @endif

            // Error message
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ session('error') }}',
                    timer: 3000,
                    showConfirmButton: false,
                    background: '{{ session('theme') === 'dark' ? '#1f2937' : '#ffffff' }}',
                    color: '{{ session('theme') === 'dark' ? '#ffffff' : '#1f2937' }}'
                });
            @endif

            @if ($errors->any())
                let errorMessages = `
                    @foreach ($errors->all() as $error)
                        - {{ $error }} <br>
                    @endforeach
                `;

                Swal.fire({
                    icon: 'error',
                    title: 'Validasi Gagal',
                    html: errorMessages,
                    timer: 4000,
                    showConfirmButton: false,
                    background: '{{ session('theme') === 'dark' ? '#1f2937' : '#ffffff' }}',
                    color: '{{ session('theme') === 'dark' ? '#ffffff' : '#1f2937' }}'
                });
            @endif


            // Warning message
            @if(session('warning'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Peringatan',
                    text: '{{ session('warning') }}',
                    timer: 3000,
                    showConfirmButton: false,
                    background: '{{ session('theme') === 'dark' ? '#1f2937' : '#ffffff' }}',
                    color: '{{ session('theme') === 'dark' ? '#ffffff' : '#1f2937' }}'
                });
            @endif

            // Info message
            @if(session('info'))
                Swal.fire({
                    icon: 'info',
                    title: 'Informasi',
                    text: '{{ session('info') }}',
                    timer: 3000,
                    showConfirmButton: false,
                    background: '{{ session('theme') === 'dark' ? '#1f2937' : '#ffffff' }}',
                    color: '{{ session('theme') === 'dark' ? '#ffffff' : '#1f2937' }}'
                });
            @endif
        });

        // Confirmation for Panggil action
        function confirmPanggil(event, antrianId) {
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Panggil Antrian',
                text: "Apakah Anda yakin ingin memanggil antrian ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3b82f6',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Panggil',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('panggilForm' + antrianId).submit();
                }
            });
        }

        // Confirmation for Selesai action
        function confirmSelesai(event, antrianId) {
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Selesaikan Antrian',
                text: "Apakah Anda yakin ingin menyelesaikan antrian ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#10b981',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Selesaikan',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('selesaiForm' + antrianId).submit();
                }
            });
        }

        // Confirmation for Hapus action
        function confirmHapusDokter(event, dokterId) {
            event.preventDefault();
            Swal.fire({
                title: 'Hapus Dokter?',
                text: "Data dokter akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444', // Red-500
                cancelButtonColor: '#6b7280', // Gray-500
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937',
                iconColor: '#ef4444' // Red-500
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('hapusDokterForm' + dokterId).submit();
                }
            });
        }

        function confirmHapusPoli(event, poliId) {
            event.preventDefault();
            Swal.fire({
                title: 'Hapus Poli?',
                text: "Semua data terkait poli ini juga akan terhapus!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#8b5cf6', // Purple-400
                cancelButtonColor: '#6b7280', // Gray-500
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937',
                iconColor: '#8b5cf6' // Purple-400
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('hapusPoliForm' + poliId).submit();
                }
            });
        }

        function confirmPanggil(event, antrianId) {
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Panggil Antrian',
                text: "Apakah Anda yakin ingin memanggil antrian ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3b82f6',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Panggil',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('panggilForm' + antrianId).submit();
                }
            });
        }

        function confirmSelesai(event, antrianId) {
            event.preventDefault();
            Swal.fire({
                title: 'Konfirmasi Selesaikan Antrian',
                text: "Apakah Anda yakin ingin menyelesaikan antrian ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#10b981',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, Selesaikan',
                cancelButtonText: 'Batal',
                background: document.documentElement.classList.contains('dark') ? '#1f2937' : '#ffffff',
                color: document.documentElement.classList.contains('dark') ? '#ffffff' : '#1f2937'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('selesaiForm' + antrianId).submit();
                }
            });
        }
    </script>
</body>
</html>
