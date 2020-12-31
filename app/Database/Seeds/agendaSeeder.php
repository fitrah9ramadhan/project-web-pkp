<?php 

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;
class agendaSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [

                        [
                        'nama_agenda' => 'Muswil',
                        'tempat'    => 'Malino',
                        'tanggal' => Time::now()
                ],
                        [
                        'nama_agenda'=>'Makan-makan',
                        'tempat' =>'Rumah Bapak Camat',
                        'tanggal'=> Time::now()

                ],
                        [
                        'nama_agenda' => 'Rapat Kerja III',
                        'tempat' => 'Puncak Bulussaraung',
                        'tanggal' => Time::now()
                        ]
                ];

                // Using Query Builder
                $this->db->table('agenda')->insertBatch($data);
        }
}