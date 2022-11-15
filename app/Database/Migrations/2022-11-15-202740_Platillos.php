<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Platillos extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_PLATILLO'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'PLATILLO'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
	
	]);
	$this->forge->addKey('ID_MV', TRUE);
	$this->forge->createTable('platillo');
    }

    public function down()
    {
       $this->forge->dropTable('platillo');
    }
}