# Antri-App 🏥

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

---

## Deskripsi Singkat

**Antri-App** adalah sistem manajemen antrean berbasis web yang dirancang untuk mengoptimalkan alur pelayanan di fasilitas kesehatan seperti klinik atau rumah sakit.

Proyek ini bertujuan untuk menggantikan proses antrean konvensional menjadi sistem digital yang terintegrasi, sehingga pengelolaan data dokter, poliklinik, dan pasien menjadi lebih efisien dan terorganisir.

---

## Fitur Utama

- **Dashboard Admin**  
  Visualisasi ringkas mengenai total antrean, jumlah poliklinik, dan dokter aktif.

- **Manajemen Poliklinik**  
  Modul untuk mengelola unit layanan kesehatan (tambah, perbarui, dan hapus data poli).

- **Manajemen Dokter**  
  Sinkronisasi data dokter dengan spesialisasi masing-masing poliklinik.

- **Sistem Nomor Antrean**  
  Proses pengambilan nomor antrean yang sistematis bagi pasien.

- **Autentikasi Keamanan**  
  Sistem login yang aman untuk pengelola sistem.

- **Antarmuka Responsif**  
  Desain modern menggunakan Tailwind CSS yang optimal di berbagai ukuran layar.

---

## Teknologi yang Digunakan

| Kategori | Teknologi |
|---|---|
| **Framework Utama** | [Laravel 11](https://laravel.com/) |
| **Bahasa Pemrograman** | PHP 8.2+ |
| **Frontend Tools** | Tailwind CSS & Vite |
| **Database** | MySQL |
| **Template Engine** | Blade (Laravel) |

---

## Prasyarat

Sebelum memulai, pastikan lingkungan pengembangan Anda telah memenuhi persyaratan berikut:

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL Server

---

## Instalasi & Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal:

### 1. Clone Repositori

```bash
git clone https://github.com/username/antri-app.git
cd antri-app
````

### 2. Instal Dependensi PHP

```bash
composer install
```

### 3. Instal Dependensi Frontend

```bash
npm install
npm run dev
```

### 4. Pengaturan Environment

Salin file `.env.example` menjadi `.env` lalu sesuaikan konfigurasi database Anda.

```bash
cp .env.example .env
```

### 5. Generate App Key & Migrasi Database

```bash
php artisan key:generate
php artisan migrate --seed
```

---

## Struktur Folder

```plaintext
antri-app/
├── app/
│   ├── Http/Controllers/    # Logika controller (Antrian, Dokter, Poli, Admin)
│   └── Models/              # Model database (Eloquent)
├── database/
│   ├── migrations/          # Skema tabel database
│   └── seeders/             # Data dummy untuk pengujian
├── resources/
│   ├── views/               # File tampilan Blade
│   └── css/                 # File styling (Tailwind)
├── routes/
│   └── web.php              # Definisi route aplikasi
└── public/                  # Aset publik (gambar, JS, CSS)
```

---

## Cara Penggunaan

Jalankan perintah berikut untuk mengaktifkan server lokal:

```bash
php artisan serve
```

Buka tautan berikut pada browser Anda:

```txt
http://localhost:8000
```

Masuk sebagai administrator untuk mulai mengelola data poliklinik dan memantau antrean yang masuk.

---

## Kontribusi

Kontribusi terbuka bagi siapa saja.

Silakan lakukan:

1. Fork repositori
2. Buat branch baru untuk fitur/perbaikan
3. Commit perubahan
4. Ajukan Pull Request

---

## Lisensi

© 2026 Antri-App Project.

```
```
