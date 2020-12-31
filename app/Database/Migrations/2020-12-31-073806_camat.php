<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Camat extends Migration
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
                        'camat'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255,
                        ],
                        'sekcam' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255
                        ],
                        'quotes_camat' => [
                        		'type'			 => 'VARCHAR',
                        	'constraint'		 => 300,
                        ],
                        'quotes_sekcam' => [
                        	'type' 				=> 'VARCHAR',
                        	'constraint'		=> 100
                        ],
                        'masa_jabatan' => [
                        	'type' 				=> 'VARCHAR',
                        	'constraint' 		=> 100
                        ],
                        'gambar_camat' => [
                        	'type' => 'VARCHAR',
                        	'constraint' => 100,
                        ],
                        'gambar_sekcam' => [
                        	'type' => 'VARCHAR',
                        	'constraint' => 100
                        ]
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('camat');
        }

        public function down()
        {
                $this->forge->dropTable('camat');
        }
}
