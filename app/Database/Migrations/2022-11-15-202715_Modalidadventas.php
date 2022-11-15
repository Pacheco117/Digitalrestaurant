<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Modalidadventas extends Migration
{
    public function up()
    {
        		$this->forge->addField([
			'ID_MV'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'MODALIDAD_VENTAS'       => [
					'type'           => 'TEXT',
					'constraint'     => '30',
			],
	
	]);
	$this->forge->addKey('ID_MV', TRUE);
	$this->forge->createTable('modalidad_ventas');
    }

    public function down()
    {
       $this->forge->dropTable('Modalidad_ventas');
    }
}
