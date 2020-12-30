<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
	public function up(){
		
	$this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 100,
                                'unsigned'       => true,
                                'auto_increment' => true
                        ],
                        'nama_agenda'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255
                        ],
                        'tempat' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => 255
                        ],
                        'tanggal' => [
            	            	'type' => 'VARCHAR',
                	        	'constraint'     => 255
                	    ]
                  
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('agenda');
        }

        public function down()
        {
                $this->forge->dropTable('agenda');
        }
}
