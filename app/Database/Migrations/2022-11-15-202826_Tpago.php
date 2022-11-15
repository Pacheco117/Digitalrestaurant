<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tpago extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_TP'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'TPAGO'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
	
	]);
	$this->forge->addKey('ID_TP', TRUE);
	$this->forge->createTable('Tpago');
    }

    public function down()
    {
       $this->forge->dropTable('Tpago');
    }
}
