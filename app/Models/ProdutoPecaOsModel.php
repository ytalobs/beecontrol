<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoPecaOsModel extends Model
{
    protected $table = 'produtos_pecas_os';
    protected $primaryKey = 'id_produto';
    protected $allowedFields = [
        'id_produto',
        'nome',
        'quantidade',
        'valor_unitario',
        'desconto',
        'id_ordem'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}