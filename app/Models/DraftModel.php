<?php

namespace App\Models;

use CodeIgniter\Model;

class DraftModel extends Model
{
    protected $table      = 'form_kelengkapan';
    protected $primaryKey = 'id_kelengkapan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'id_kontrak'                ,

        'judul_kontrak'             ,
            'tanggal_blangko'           ,
        'nama_kontraktor'           ,

        'sp3mk_nomor'               ,
            'sp3mk_tanggal'                   ,
        'sp3mk_harga_kontrak'       ,
            'sp3mk_mpp'                 ,
        'sp3mk_jaminan_pelaksanaan' ,
            'sp3mk_masa_berlaku'        ,
        'sp3mk_tanggal_mulai'       ,
            'sp3mk_sampai_dengan'       ,
        'sp3mk_mjenis_mpp'          ,
            'sp3mk_mjenis_jpelaksanaan' ,

        'spppj_nomor'                ,
            'spppj_tanggal'              ,
        'spppj_coll_no'              ,
            'spppj_harga_kontrak'        ,
        'spppj_jangka_pelaksanaan'   ,
            'spppj_masa_berlaku'         ,
        'spppj_mjenis_pelaksanaan'  ,
            'spppj_mjenis_berlaku'       ,

        'rks_revisi'                ,
            'rks_keterangan'            ,
        'rks_mpp'                   ,
            'rks_masa_pemeliharaan'     ,
        'rks_masa_garansi'          ,
            'rks_denda'                 ,
        'rks_mekanisme_pembayaran'  ,
            'rks_jenis_kontrak'         ,
        'rks_besar_jaminan'         ,
            'rks_direksi_pekerjaan'     ,
        'rks_mpa'                   ,
            'rks_mjenis_mpp'            ,
        'rks_mjenis_pemeliharaan'   ,
            'rks_mjenis_garansi'        ,
        'rks_mjenis_mpa'            ,

        'sphn_nomor'                ,
            'sphn_tanggal'              ,
        'sphn_perihal'              ,

        'snh_tanggal'               ,

        'sph_nomor'                 ,
            'sph_tanggal'               ,
        'sph_perihal'               ,

        'prebid_coll_no'            ,
            'prebid_tanggal'            ,
        'prebid_mpp'                ,
            'prebid_masa_pemeliharaan'  ,
        'prebid_masa_garansi'       ,
            'prebid_mjenis_mpp'         ,
        'prebid_mjenis_pemeliharaan',
            'prebid_mjenis_garansi'     ,
        'prebid_jaminan_pelaksanaan',
            'prebid_keterangan'         ,
    ];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
