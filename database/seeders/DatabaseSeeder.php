<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Owner;
use App\Models\User;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Antrian;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);

        // Seed Admin
        Owner::create([
            'name' => 'Admin Owner',
            'email' => 'admin@puskesmas.id',
            'password' => Hash::make('admin'),
        ]);

        // Seed Polis
        $polis = [
            ['name' => 'Poli Umum', 'code' => 'PU'],
            ['name' => 'Poli Gigi', 'code' => 'PG'],
            ['name' => 'Poli Anak', 'code' => 'PA'],
            ['name' => 'Poli Kandungan', 'code' => 'PK'],
            ['name' => 'Poli THT', 'code' => 'PT'],
            ['name' => 'Poli Saraf', 'code' => 'PS'],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }

        // Seed Users (Pasien)
        $users = [
            [
                'name' => 'Adrenalin Muhammad Dewangga',
                'nik' => '34120250001',
                'nomor' => '088221344022',
                'password' => Hash::make('adrenalin'),
            ],
            [
                'name' => 'Juang Syahid Al Jihad',
                'nik' => '34120250002',
                'nomor' => '08821324421',
                'password' => Hash::make('juang'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        // Seed Dokters
        $dokters = [
            // Poli 1
            [
                'name' => 'dr. Tirta Pengpengpeng',
                'poli_id' => 1,
                'hari_kerja' => 'jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Siti Lestari',
                'poli_id' => 1,
                'hari_kerja' => 'senin,selasa,rabu',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'dr. Dimas Saputra',
                'poli_id' => 1,
                'hari_kerja' => 'senin,rabu,jumat',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Wulan Anggraini',
                'poli_id' => 1,
                'hari_kerja' => 'senin,selasa,kamis',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Ferry Gunawan',
                'poli_id' => 1,
                'hari_kerja' => 'rabu,kamis',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],

            // Poli 2
            [
                'name' => 'drg. Andi Rahman',
                'poli_id' => 2,
                'hari_kerja' => 'senin,selasa,rabu,kamis,jumat,sabtu',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'drg. Indah Pratiwi',
                'poli_id' => 2,
                'hari_kerja' => 'senin,selasa,rabu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Fajar Setiawan',
                'poli_id' => 2,
                'hari_kerja' => 'rabu,kamis,jumat',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'dr. Nia Marlina',
                'poli_id' => 2,
                'hari_kerja' => 'selasa,kamis',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Johan Sebastian',
                'poli_id' => 2,
                'hari_kerja' => 'jumat,sabtu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],

            // Poli 3
            [
                'name' => 'dr. Rina Sari',
                'poli_id' => 3,
                'hari_kerja' => 'senin,selasa,rabu,kamis,jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Galuh Putri',
                'poli_id' => 3,
                'hari_kerja' => 'senin,rabu,jumat',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'dr. Aldi Firmansyah',
                'poli_id' => 3,
                'hari_kerja' => 'selasa,kamis,sabtu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Bella Nuraini',
                'poli_id' => 3,
                'hari_kerja' => 'senin,selasa,rabu',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Hilda Ramadhani',
                'poli_id' => 3,
                'hari_kerja' => 'rabu,kamis',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],

            // Poli 4
            [
                'name' => 'dr. Bagas Nugroho',
                'poli_id' => 4,
                'hari_kerja' => 'senin,selasa,rabu,kamis,jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Kurniawan',
                'poli_id' => 4,
                'hari_kerja' => 'senin,rabu,jumat',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'drg. Rika Permatasari',
                'poli_id' => 4,
                'hari_kerja' => 'selasa,kamis',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Vivi Lestari',
                'poli_id' => 4,
                'hari_kerja' => 'jumat,sabtu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Aditya Kusuma',
                'poli_id' => 4,
                'hari_kerja' => 'senin,selasa,rabu',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],

            // Poli 5
            [
                'name' => 'dr. Tika Widya',
                'poli_id' => 5,
                'hari_kerja' => 'senin,selasa,kamis',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Retno Ayu',
                'poli_id' => 5,
                'hari_kerja' => 'rabu,kamis,jumat',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Indra Maulana',
                'poli_id' => 5,
                'hari_kerja' => 'senin,rabu,jumat',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'dr. Yudha Saputra',
                'poli_id' => 5,
                'hari_kerja' => 'selasa,kamis',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Sari Dewi',
                'poli_id' => 5,
                'hari_kerja' => 'jumat,sabtu',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],

            // Poli 6
            [
                'name' => 'dr. Rio Wahyudi',
                'poli_id' => 6,
                'hari_kerja' => 'senin,selasa,rabu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Nanda Khairunnisa',
                'poli_id' => 6,
                'hari_kerja' => 'senin,rabu,jumat',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'drg. Hani Wulandari',
                'poli_id' => 6,
                'hari_kerja' => 'selasa,kamis',
                'start_time' => '10:00:00',
                'end_time' => '14:00:00',
            ],
            [
                'name' => 'dr. Yoga Pramana',
                'poli_id' => 6,
                'hari_kerja' => 'jumat,sabtu',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'dr. Agus Wijaya',
                'poli_id' => 6,
                'hari_kerja' => 'senin,selasa,rabu,kamis',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
        ];


        foreach ($dokters as $dokter) {
            Dokter::create($dokter);
        }

        // Seed Antrian
        $antrians = [
            [
                'nomor_antrian' => 'PU-001',
                'pasien_id' => 1,
                'poli_id' => 1,
                'dokter_id' => 1,
                'keluhan' => 'Demam dan batuk sejak 2 hari lalu',
                'tanggal' => now()->toDateString(),
                'jam_daftar' => now()->format('H:i:s'),
                'status' => 'menunggu'
            ],
            [
                'nomor_antrian' => 'PG-001',
                'pasien_id' => 2,
                'poli_id' => 2,
                'dokter_id' => 2,
                'keluhan' => 'Sakit gigi belakang sejak kemarin',
                'tanggal' => now()->toDateString(),
                'jam_daftar' => now()->subMinutes(30)->format('H:i:s'),
                'status' => 'diproses'
            ],
        ];

        foreach ($antrians as $antrian) {
            Antrian::create($antrian);
        }

        // Sementara

        // Seed Laporan
        // DB::table('laporan')->insert([
        //     'id_user' => 1,
        //     'nama_tempat' => 'Cimahi Mall',
        //     'alamat' => 'Jl. Cimahi Mall',
        //     'foto' => '683401fd0aa79.jpg',
        //     'deskripsi' => 'Ada Banyak Sampah',
        //     'kategori' => 'Sampah Jalanan',
        //     'status' => 'Dikirim',
        //     // 'created_at' => now()->toDateString(),
        // ]);
    }
}
