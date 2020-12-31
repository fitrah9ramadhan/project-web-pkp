<?php 

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;
class camatSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'camat' => 'Suryono',
                        'sekcam' => 'Suryono Jr',
                        'quotes_camat' => 'Berakit-rakit ke hulu berenang-renang ke tepian',
                        'quotes_sekcam' => 'Tarek Sis, Semongko',
                        'masa_jabatan' => '2020-2024',
                        'gambar_camat' => 'gambar_camat.jpg',
                        'gambar_sekcam' => 'gambar_sekcam.jpg'
                ];

                // Using Query Builder
                $this->db->table('camat')->insert($data);
        }
}