<?php

namespace Database\Seeders;

use App\Models\BerkasModel;
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

        BerkasModel::create([
            "nama" => "ibjan syarif",
            "nim" => "1901010163",
            "universitas" => "Bumigora",
            "prodi" => "Ilmu Komputer",
            "semester" => "7",
            "alamat" => "jl. ismail marzuki",
            "tgl_lahir" => "2022-10-04",
            "tmp_lahir" => "mataram",
            "jenis_kelamin" => "Laki-Laki",
            "agama" => "Islam",
            "ayah" => "fulan",
            "pekerjaan_ayah" => "pegawai negri",
            "ibu" => "fulana",
            "pekerjaan_ibu" => "swasta",
            "saudara" => "2",
            "foto" => "https://assets.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=770",
            "ktp" => "https://assets.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=770",
            "kk" => "https://blog-media.lifepal.co.id/app/uploads/sites/3/2019/09/16204806/bg1-1-1.jpg",
            "transkip"=> "transkip.pdf",
            "khs" => "https://blog-media.lifepal.co.id/app/uploads/sites/3/2019/09/16204806/bg1-1-1.jpg",
            "form_a1" => "https://i2.wp.com/www.krishandsoftware.com/blog/wp-content/uploads/2020/02/Picture4-1.png?resize=627%2C1024&ssl=1",
            "suket_beasiswa"=> "https://imgv2-2-f.scribdassets.com/img/document/497484115/original/36fb3699f2/1661543687?v=1",
            "sktm"=> "https://data03.123doks.com/thumbv2/123dok/001/115/1115247/cover.webp",
            "sertifikat"=> "sertifikat.pdf",
            "motivation_later" => "ml.pdf",
            "status" => "Di Review",
        ]);
    }
}
