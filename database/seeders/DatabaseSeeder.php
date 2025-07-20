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
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        // Seed Polis
        $polis = [
            ['name' => 'Poli Umum', 'code' => 'UM'],
            ['name' => 'Poli Gigi', 'code' => 'GG'],
            ['name' => 'Poli Anak', 'code' => 'AN'],
            ['name' => 'Poli Kandungan', 'code' => 'OB'],
            ['name' => 'Poli Penyakit Dalam', 'code' => 'PD'],
            ['name' => 'Poli Saraf', 'code' => 'NS'],
        ];

        foreach ($polis as $poli) {
            Poli::create($poli);
        }

        // Seed Users (Pasien)
        $users = [
            [
                'name' => 'Ahmad Nur',
                'nik' => '3210123456780001',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Dina Lestari',
                'nik' => '3210123456780002',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        // Seed Dokters
        $dokters = [
            [
                'name' => 'dr. Rina Sari',
                'poli_id' => 1,
                'start_day' => 'Senin',
                'end_day' => 'Jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'drg. Andi Rahman',
                'poli_id' => 2,
                'start_day' => 'Selasa',
                'end_day' => 'Jumat',
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
                'nomor_antrian' => 'UM-001',
                'pasien_id' => 1,
                'poli_id' => 1,
                'dokter_id' => 1,
                'keluhan' => 'Demam dan batuk sejak 2 hari lalu',
                'tanggal' => now()->toDateString(),
                'jam_daftar' => now()->format('H:i:s'),
                'status' => 'menunggu'
            ],
            [
                'nomor_antrian' => 'GG-001',
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
    }
}
