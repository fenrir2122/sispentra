<?php

namespace App\Models;

use CodeIgniter\Model;

class NovationModel extends Model
{
    protected $table      = 'novation';
    protected $primaryKey = 'id_novasi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'nama_pekerjaan',
        'vendor',
        'po_no',
        'po_pengganti',
        'nilai_kontrak',
        'drafter',
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
