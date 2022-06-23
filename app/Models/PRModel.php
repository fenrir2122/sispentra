<?php

namespace App\Models;

use CodeIgniter\Model;

class PRModel extends Model
{
    protected $table      = 'kode_pr';
    protected $primaryKey = 'id_pr';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'id_kontrak',
        'no_pr',
        'tipe',
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
