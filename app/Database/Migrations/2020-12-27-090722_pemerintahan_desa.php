<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PemerintahanDesa extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 100,
                                'unsigned'       => true,
                                'auto_increment' => true
                        ],
                        'nama_desa'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255
                        ],
                        'kepala_desa' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255
                        ],
                        'masa_kerja' => [
            	            	'type' => 'VARCHAR',
                	        	'constraint'     => 255
                        ],
                        'luas_daerah' => [
            	            	'type' => 'VARCHAR',
           	             		'constraint'     => 255
                        ],
                        'jumlah_penduduk' => [
                        		'type' => 'VARCHAR',
                        		'constraint'     => 255
                        ],
                        'dusun_rw_rt' => [
                        		'type' => 'VARCHAR',
                        		'constraint'     => 255
                        	]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('pemerintahan_desa');
        }

        public function down()
        {
                $this->forge->dropTable('pemerintahan_desa');
        }
}
