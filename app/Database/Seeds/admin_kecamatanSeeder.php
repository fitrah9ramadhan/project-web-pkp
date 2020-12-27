<?php 

namespace App\Database\Seeds;
class admin_kecamatanSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [

                        'nama' => 'Muhammad Sufri',
                        'username'    => 'msuf',
                        'password' => '12345'
                ];

                // Using Query Builder
                $this->db->table('admin_kecamatan')->insert($data);
        }
}