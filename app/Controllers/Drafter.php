<?php

namespace App\Controllers;

class Drafter extends BaseController
{
    public function index()
    {
        // Call contracts model
        $contractsModel = model(ContractsModel::class);

        // Get data from model
        $data['kontrak'] = $contractsModel->asArray()->findAll();

        // Load view
        echo view('contracts/contract_list', $data);
    }

    /* Main Page functions*/

    public function draft()
    {
        echo view('drafter/draft');
    }

    /* Add functions */
    public function adddraft()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contracts model
        $draftModel = model(DraftModel::class);

        // Validate inputs
        if (!$this->validate($this->draftkelengkapan_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('draft/add_draft');
        } else {
            // Validation success == send setter request to model
            $data = $this->draftkelengkapan_get();

            // Call model to add into database
            $draftModel->insert($data);

            // Get insert ID
            $draft_id = $draftModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('');
        }
    }

    /* Edit functions */
    public function editdraft($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contracts model
        $draftModel = model(DraftModel::class);

        // Validate inputs
        if (!$this->validate($this->draftkelengkapan_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('draft/add_draft');
        } else {
            // Validation success == send setter request to model
            $data['id_kelengkapan'] = $id;
            $data = $this->draftkelengkapan_get();

            // Call model to add into database
            $draftModel->update($data);

            // Get insert ID
            $draft_id = $draftModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('');
        }
    }

    /* Validation lists & Form getters*/
    private function draftkelengkapan_rule() 
    {
        $data = array(
            'judul_kontrak'                         => 'required',
                'tanggal_blangko'                       => 'required',
            'nama_kontraktor'                       => 'required',

                'sp3mk_nomor'                           => 'required',
            'tanggal'                               => 'required',
                'sp3mk_harga_kontrak'                   => 'required',
            'sp3mk_mpp'                             => 'required',
                'sp3mk_jaminan_pelaksanaan'             => 'required',
            'sp3mk_masa_berlaku'                    => 'required',
                'sp3mk_tanggal_mulai'                   => 'required',
            'sp3mk_sampai_dengan'                   => 'required',
                'sp3mk_mjenis_mpp'                      => 'required',
            'sp3mk_mjenis_jpelaksanaan'             => 'required',

                'sppj_nomor'                            => 'required',
            'sppj_tanggal'                          => 'required',
                'sppj_harga_kontrak'                    => 'required',
            'sppj_jangka_pelaksanaan'               => 'required',
                'sppj_masa_berlaku'                     => 'required',
            'sppj_mjenis_wpelaksanaan'              => 'required',
                'sppj_mjenis_mjpelaksanaan'             => 'required',

            'rks_revisi'                            => 'required',
                'rks_keterangan'                        => 'required',
            'rks_mpp'                               => 'required',
                'rks_masa_pemeliharaan'                 => 'required',
            'rks_masa_garansi'                      => 'required',
                'rks_denda'                             => 'required',
            'rks_max'                               => 'required',
                'rks_mekanisme_pembayaran'              => 'required',
            'rks_jenis_kontrak'                     => 'required',
                'rks_besar_jaminan'                     => 'required',
            'rks_direksi_pekerjaan'                 => 'required',
                'rks_mpa'                               => 'required',
            'rks_mjenis_mpp'                        => 'required',
                'rks_mjenis_pemeliharaan'               => 'required',
            'rks_mjenis_garansi'                    => 'required',
                'rks_mjenis_mpa'                        => 'required',

            'sphn_nomor'                            => 'required',
                'sphn_tanggal'                          => 'required',
            'sphn_perihal'                          => 'required',

                'snh_tanggal'                           => 'required',

            'sph_nomor'                             => 'required',
                'sph_tanggal'                           => 'required',
            'sph_perihal'                           => 'required',

                'prebid_coll_no'                        => 'required',
            'prebid_tanggal'                        => 'required',
                'prebid_mpp'                            => 'required',
            'prebid_masa_pemeliharaan'              => 'required',
                'prebid_masa_garansi'                   => 'required',
            'prebid_mjenis_mpp'                     => 'required',
                'prebid_mjenis_pemeliharaan'            => 'required',
            'prebid_mjenis_garansi'                 => 'required',
                'prebid_jaminan_pelaksanaan'            => 'required',
            'prebid_revisi_rks'                     => 'required',
                'prebid_keterangan'                     => 'required',
        );
    }

    private function draftkelengkapan_get() 
    {
        $data['judul_kontrak']                                = $this->request->getVar('judul_kontrak');
            $data['tanggal_blangko']                              = $this->request->getVar('tanggal_blangko');
        $data['nama_kontraktor']                              = $this->request->getVar('nama_kontraktor');

        $data['sp3mk_nomor']                                  = $this->request->getVar('sp3mk_nomor');
            $data['tanggal']                                      = $this->request->getVar('tanggal');

        $data['sp3mk_harga_kontrak']                          = str_replace(array(".", ","), array("", "."), $this->request->getVar('sp3mk_harga_kontrak'));
            $data['sp3mk_mpp']                                    = $this->request->getVar('sp3mk_mpp');
        $data['sp3mk_jaminan_pelaksanaan']                    = str_replace(",", ".", $this->request->getVar('sp3mk_jaminan_pelaksanaan'));
            $data['sp3mk_masa_berlaku']                           = $this->request->getVar('sp3mk_masa_berlaku');
        $data['sp3mk_tanggal_mulai']                          = $this->request->getVar('sp3mk_tanggal_mulai');
            $data['sp3mk_sampai_dengan']                          = $this->request->getVar('sp3mk_sampai_dengan');
        $data['sp3mk_mjenis_mpp']                             = $this->request->getVar('sp3mk_mjenis_mpp');
            $data['sp3mk_mjenis_jpelaksanaan']                    = $this->request->getVar('sp3mk_mjenis_jpelaksanaan');

        $data['spppj_nomor']                                  = $this->request->getVar('spppj_nomor');
            $data['spppj_tanggal']                                = $this->request->getVar('spppj_tanggal');
        $data['spppj_harga_kontrak']                          = str_replace(array(".", ","), array("", "."), $this->request->getVar('spppj_harga_kontrak'));
            $data['spppj_jangka_pelaksanaan']                     = $this->request->getVar('spppj_jangka_pelaksanaan');
        $data['spppj_masa_berlaku']                           = $this->request->getVar('spppj_masa_berlaku');
            $data['spppj_mjenis_wpelaksanaan']                    = $this->request->getVar('spppj_mjenis_wpelaksanaan');
        $data['spppj_mjenis_mjpelaksanaan']                   = $this->request->getVar('spppj_mjenis_mjpelaksanaan');

        $data['rks_revisi']                                   = $this->request->getVar('rks_revisi');
            $data['rks_keterangan']                               = $this->request->getVar('rks_keterangan');
        $data['rks_mpp']                                      = $this->request->getVar('rks_mpp');
            $data['rks_masa_pemeliharaan']                        = $this->request->getVar('rks_masa_pemeliharaan');
        $data['rks_masa_garansi']                             = $this->request->getVar('rks_masa_garansi');
            $data['rks_denda']                                    = str_replace(",", ".", $this->request->getVar('rks_denda'));
        $data['rks_max']                                      = str_replace(",", ".", $this->request->getVar('rks_max'));
            $data['rks_mekanisme_pembayaran']                     = $this->request->getVar('rks_mekanisme_pembayaran');
        $data['rks_jenis_kontrak']                            = $this->request->getVar('rks_jenis_kontrak');
            $data['rks_besar_jaminan']                            = str_replace(",", ".", $this->request->getVar('rks_besar_jaminan'));
        $data['rks_direksi_pekerjaan']                        = $this->request->getVar('rks_direksi_pekerjaan');
            $data['rks_mpa']                                      = $this->request->getVar('rks_mpa');
        $data['rks_mjenis_mpp']                               = $this->request->getVar('rks_mjenis_mpp');
            $data['rks_mjenis_pemeliharaan']                      = $this->request->getVar('rks_mjenis_pemeliharaan');
        $data['rks_mjenis_garansi']                           = $this->request->getVar('rks_mjenis_garansi');
            $data['rks_mjenis_mpa']                               = $this->request->getVar('rks_mjenis_mpa');

        $data['sphn_nomor']                                   = $this->request->getVar('sphn_nomor');
            $data['sphn_tanggal']                                 = $this->request->getVar('sphn_tanggal');
        $data['sphn_perihal']                                 = $this->request->getVar('sphn_perihal');
        
        $data['snh_tanggal']                                  = $this->request->getVar('snh_tanggal');

        $data['sph_nomor']                                    = $this->request->getVar('sph_nomor');
            $data['sph_tanggal']                                  = $this->request->getVar('sph_tanggal');
        $data['sph_perihal']                                  = $this->request->getVar('sph_perihal');

        $data['prebid_coll_no']                               = $this->request->getVar('prebid_coll_no');
            $data['prebid_tanggal']                               = $this->request->getVar('prebid_tanggal');
        $data['prebid_mpp']                                   = $this->request->getVar('prebid_mpp');
            $data['prebid_masa_pemeliharaan']                     = $this->request->getVar('prebid_masa_pemeliharaan');
        $data['prebid_masa_garansi']                          = $this->request->getVar('prebid_masa_garansi');
            $data['prebid_mjenis_mpp']                            = $this->request->getVar('prebid_mjenis_mpp');
        $data['prebid_mjenis_pemeliharaan']                   = $this->request->getVar('prebid_mjenis_pemeliharaan');
            $data['prebid_mjenis_garansi']                        = $this->request->getVar('prebid_mjenis_garansi');
        $data['prebid_jaminan_pelaksanaan']                   = str_replace(",", ".", $this->request->getVar('prebid_jaminan_pelaksanaan'));
            $data['prebid_revisi_rks']                            = $this->request->getVar('prebid_revisi_rks');
        $data['prebid_keterangan']                            = $this->request->getVar('prebid_keterangan');
    }
}
