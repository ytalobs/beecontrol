<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reposicoes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_reposicao' => [
				'type'           => 'INT',
				'constraint'     => 9,
				'usigned'        => TRUE,
				'auto_increment' => TRUE
			],

			'data' => [
				'type' => 'DATE'
			],

			'hora' => [
				'type' => 'TIME'
			],

			'quantidade' => [
				'type' => 'INT'
			],

			'observacoes' => [
				'type'       => 'VARCHAR',
				'constraint' => 512
			],

			'id_produto' => [
				'type' => 'INT'
			],

			'created_at' => [
				'type' => 'DATETIME'
			],

			'updated_at' => [
				'type' => 'DATETIME'
			],

			'deleted_at' => [
				'type' => 'DATETIME'
			]
		]);

		$this->forge->addKey('id_reposicao', TRUE);
		$this->forge->addForeignKey('id_produto', 'produtos', 'id_produto', 'CASCADE', 'CASCADE');
		$this->forge->createTable('reposicoes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('reposicoes');
	}
}
