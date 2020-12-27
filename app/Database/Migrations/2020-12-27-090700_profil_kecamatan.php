<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProfilKecamatan extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 100,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'sejarah_kecamatan'       => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000,
                        ],
                        'gambaran_umum' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ],
                        'visi_misi' => [
                        	'type' => 'TEXT',
                        	'constraint'  => 5000,
                        ],
                        'isi_berita' => [
                                'type'           => 'TEXT',
                                'constraint'     => 5000
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('profil_kecamatan');
        }

        public function down()
        {
                $this->forge->dropTable('profil_kecamatan');
        }
}
