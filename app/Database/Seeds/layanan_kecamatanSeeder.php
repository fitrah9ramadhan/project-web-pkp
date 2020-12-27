<?php 

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;
class layanan_kecamatanSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        [
                        'nama_layanan' => 'Pembuatan KTP',
                        'link'    => 'facebook.com',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                        ],
                        [
                        'nama_layanan' => 'Pembuatan KK',
                        'link' => 'twitter.com',
                        'created_at' => Time::now(),
                        'updated_at' => Time::now()
                        ]
                ];

                // Using Query Builder
                $this->db->table('layanan_kecamatan')->insertBatch($data);
        }
}