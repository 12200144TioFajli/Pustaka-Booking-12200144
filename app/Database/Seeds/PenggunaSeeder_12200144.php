<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel_12200144;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200144 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Tio Fajli',
                'password'  => md5('12200144')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200144',
                'password'  => md5('tiofajli')
            ],
           
        ];
        $p = new PenggunaModel_12200144();
        $p->insertBatch($data);
    }
}
