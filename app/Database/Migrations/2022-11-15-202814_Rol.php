<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rol extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_ROL'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'ROL'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
	
	]);
	$this->forge->addKey('ID_ROL', TRUE);
	$this->forge->createTable('ROL');
    }

    public function down()
    {
       $this->forge->dropTable('ROL');
    }
}
