<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personal extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_TRABAJO'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'NOMBRE'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
			'APELLIDO_PATERNO'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
			'APELLIDO_MATERNO'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
			'TELEFONO'       => [
					'type'           => 'INT',
					'constraint'     => '11',
			],	
	]);
	$this->forge->addKey('ID_TRABAJO', TRUE);
	$this->forge->createTable('Personal');
    }

    public function down()
    {
       $this->forge->dropTable('personal');
    }
}
