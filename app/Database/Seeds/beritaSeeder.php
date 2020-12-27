<?php 

namespace App\Database\Seeds;
use CodeIgniter\I18n\Time;
class beritaSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'sampul' => 'download_1.jpg',
                        'judul_berita' => 'lorem Ipsum',
                        'penulis_berita' => 'Baco',
                        'isi_berita' => 'lorem ipsum odfsldf dslfjlsadjf jsfdljs aj sadlfj lsadjf lsadfjasd jlasdf',
                        'tanggal_berita' => Time::now()
                ];

                // Using Query Builder
                $this->db->table('berita')->insert($data);
        }
}