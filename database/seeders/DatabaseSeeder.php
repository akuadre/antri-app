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
            'email' => 'admin@gmail.com',
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
                'name' => 'Adrenalin Muhammad D',
                'nik' => '3210123456780001',
                'nomor' => '088221344022',
                'password' => Hash::make('adrenalin'),
            ],
            [
                'name' => 'Juang Syahid Al Jihad',
                'nik' => '3210123456780002',
                'nomor' => '08821324421',
                'password' => Hash::make('juang'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        // Seed Dokters
        $dokters = [
            [
                'name' => 'dr. Tirta Pengpengpeng',
                'poli_id' => 1,
                'hari_kerja' => 'Jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
            ],
            [
                'name' => 'drg. Andi Rahman',
                'poli_id' => 2,
                'hari_kerja' => 'Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
                'start_time' => '09:00:00',
                'end_time' => '13:00:00',
            ],
            [
                'name' => 'dr. Rina Sari',
                'poli_id' => 3,
                'hari_kerja' => 'Senin,Selasa,Rabu,Kamis,Jumat',
                'start_time' => '08:00:00',
                'end_time' => '12:00:00',
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

        // Sementara

        // Seed Laporan
        DB::table('laporan')->insert([
            'id_user' => 1,
            'nama_tempat' => 'Cimahi Mall',
            'alamat' => 'Jl. Cimahi Mall',
            'foto' => '683401fd0aa79.jpg',
            'deskripsi' => 'Ada Banyak Sampah',
            'kategori' => 'Sampah Jalanan',
            'status' => 'Dikirim',
            // 'created_at' => now()->toDateString(),
        ]);
    }
}
