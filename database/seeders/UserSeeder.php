<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdm = new User();
        $userAdm->name = "Site Administrator";
        $userAdm->email = "admin@gmail.com";
        $userAdm->email_verified_at = now();
        $userAdm->password = Hash::make("admin");
        $userAdm->tipe = "admin";
        $userAdm->save();

        Admin::create([
            'tipe' => 'admin',
            'nama_lengkap' => 'Site Administrator',
            'user_id' => $userAdm->id,
        ]);

        $this->command->info("User Admin Berhasil ditambahkan admin@gmail.com:admin");
    }
}
