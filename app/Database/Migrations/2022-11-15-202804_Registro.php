<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Registro extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_REGISTRO'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'ID_VENTA'       => [
					'type'           => 'INT',
					'constraint'     => '11',
			],
            'ID_TRABAJO'       => [
                'type'           => 'INT',
                'constraint'     => '11',
        ],
	
	]);
	$this->forge->addKey('ID_Registro', TRUE);
	$this->forge->createTable('registro');
    }

    public function down()
    {
       $this->forge->dropTable('registro');
    }
}
