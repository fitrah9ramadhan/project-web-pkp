<?php 

namespace App\Database\Seeds;
class pemerintahan_desaSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [

                        'nama_desa' => 'Desa A',
                        'kepala_desa'    => 'Bapak A',
                        'luas_daerah' => '69969',
                        'jumlah_penduduk' => '343242',
                        'dusun_rw_rt' => '5/5/5'
                ];

                // Using Query Builder
                $this->db->table('pemerintahan_desa')->insert($data);
        }
}