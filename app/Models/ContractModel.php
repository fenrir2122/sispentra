<?php

namespace App\Models;

use CodeIgniter\Model;

class ContractModel extends Model
{
    protected $table      = 'kontrak';
    protected $primaryKey = 'id_kontrak';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'bidding_code',
        'nama_pekerjaan',
        'tgl_permintaan_lelang',
        'tgl_penetapan',
        'coll_no',
        'code',
        'tipe',
        'durasi',
        'jenis_durasi',
        'vendor',
        'po_no',
        'po_pengganti',
        'tkdn_minim',
        'tkdn_barang_nilai',
        'tkdn_barang',
        'tkdn_jasa_nilai',
        'tkdn_jasa',
        'tkdn_total',
        'po_risk',
        'nilai_kontrak',
        'nilai_penawaran_awal',
        'nilai_oe',
        'drafter'
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getJoinContractPR()
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT kontrak.*,GROUP_CONCAT(kode_pr.no_pr SEPARATOR ' ') as _no_pr FROM kontrak JOIN kode_pr ON kode_pr.id_kontrak = kontrak.id_kontrak WHERE kode_pr.deleted_at = '0000-00-00 00:00:00'");
        return $query->getResult('array');
    }
}
