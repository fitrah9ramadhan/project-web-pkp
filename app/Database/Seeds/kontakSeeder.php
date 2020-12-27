<?php 

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;
class kontakSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'telefon' => 'nomor telefon kecamatan balocci',
                        'whatsapp' => 'WA kecamatan Balocci',
                        'facebook' => 'FB Kecamatan Balocci',
                        'instagram' => 'IG Kecamatan Balocci',
                        'twitter' => 'TW Kecamatan Balocci'
                ];

                // Using Query Builder
                $this->db->table('kontak')->insert($data);
        }
}