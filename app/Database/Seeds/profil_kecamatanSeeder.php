<?php 

namespace App\Database\Seeds;
class profil_kecamatanSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [

                        'sejarah_kecamatan' => 'Sejarah Kecamatan Balocci',
                        'gambaran_umum'    => 'gambaran umum kecamatan balocci',
                        'peta' => 'gambar peta'
                ];

                // Using Query Builder
                $this->db->table('profil_kecamatan')->insert($data);
        }
}