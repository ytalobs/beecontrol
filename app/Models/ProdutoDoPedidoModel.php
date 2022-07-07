<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoDoPedidoModel extends Model
{
    protected $table = 'produtos_do_pedido';
    protected $primaryKey = 'id_produto_do_pedido';
    protected $allowedFields = [
        'id_produto_do_pedido',
        'nome',
        'unidade',
        'codigo_de_barras',
        'quantidade',
        'valor_unitario',
        'subtotal',
        'desconto',
        'valor_final',
        'NCM',
        'CSOSN',
        'CFOP',
        'id_pedido',
        'id_produto'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
