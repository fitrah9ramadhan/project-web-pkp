<?php 

namespace App\Database\Seeds;
class pemerintahan_desaSeeder extends \CodeIgniter\Database\Seeder
use CodeIgniter\I18n\Time;
{
        public function run()
        {
                $data = [

                        'nama_agenda' => 'Desa A',
                        'tempat'    => 'Bapak A',
                        'tanggal' => Time::now()
                ];

                // Using Query Builder
                $this->db->table('agenda')->insert($data);
        }
}