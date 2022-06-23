<?php

namespace App\Models;

use CodeIgniter\Model;

class AmendmentModel extends Model
{
    protected $table      = 'amandemen';
    protected $primaryKey = 'id_amandemen';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [

        'nama_pekerjaan',
        'tipe_amandemen',
        'amandemen_ke',
        'tgl_mulai',
        'tgl_selesai',
        'durasi',
        'jenis_durasi',
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
