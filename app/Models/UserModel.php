<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;

    // Mendapat data user berdasarkan nilai dan kolom
    public function getUser($singleData = '', $column = 'user_id')
    {
        return collect(DB::select("SELECT * FROM pengguna WHERE {$column}='{$singleData}'"))->first();
    }

    // Mendapat seluruh data user kecuali admin
    public function getUsers()
    {
        return DB::select("SELECT * FROM pengguna WHERE class != 1 ORDER BY user.user_id DESC");
    }

    // Ubah status user
    public function statusUser($user_id = '')
    {
        $getStatus = $this->getUser($user_id)->class;

        if ($getStatus == 2) {
            DB::statement("UPDATE pengguna SET class=3 WHERE pengguna.user_id='{$user_id}'");
            $status = 1;
        } else {
            DB::statement("UPDATE pengguna SET class=2 WHERE pengguna.user_id='{$user_id}'");
            $status = 0;
        }

        return $status ? 1 : 0;
    }

    // Untuk Insert Data
    public function insertUser($data)
    {
        $nama           = $data['nama'];
        $username       = $data['username'];
        $password       = $data['password'];
        $email          = $data['email'];

        DB::statement("INSERT INTO pengguna(nama,username,password,email,class,photo) VALUES('{$nama}','{$username}','{$password}','{$email}','2','default.jpg')");
    }

    // Untuk Update Photo
    public function updatePhoto($user_id = '1', $photo = '', $class = 'admin')
    {
        if ($class === 'admin') {
        } else {
            DB::statement("UPDATE pengguna SET photo='{$photo}' WHERE user_id='{$user_id}'");
        }
    }

    // Untuk Update Informasi Utama
    public function updateInformasiUtama($user_id = '1', $data = [], $class = 'user')
    {
        $username = $data['username'];
        $nama     = $data['nama'];

        if ($class === 'admin') {
        } else {
            DB::statement("UPDATE pengguna SET username='{$username}', nama='{$nama}' WHERE user_id='{$user_id}'");
        }
    }

    // Untuk Update Data Umum
    public function updateDataUmum($user_id = '1', $data = [], $class = 'user')
    {
        $jenis_kelamin = $data['jenis_kelamin'];
        $no_telepon = $data['no_telepon'];
        $alamat = $data['alamat'];
        $email = $data['email'];

        if ($class === 'admin') {
        } else {
            DB::statement("UPDATE pengguna SET jenis_kelamin='{$jenis_kelamin}', no_telepon='{$no_telepon}', alamat='{$alamat}', email='{$email}' WHERE user_id='{$user_id}'");
        }
    }

    // Untuk update password
    public function updatePassword($user_id = '1', $data = [], $class = 'user')
    {
        $password = $data['password'];

        if ($class === 'admin') {
        } else {
            DB::statement("UPDATE pengguna SET password='{$password}' WHERE user_id='{$user_id}'");
        }
    }
}
