<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Call contract model
        $contractModel = model(ContractModel::class);

        // Get data from model
        $data['kontrak'] = $contractModel->asArray()->findAll();

        // Load view
        echo view('admin/contract/contract_list', $data);
    }

    /* Main Page functions*/

    public function contract()
    {
        // Call contract model
        $contractModel = model(ContractModel::class);

        // Get data from model
        $data['kontrak'] = $contractModel->asArray()->findAll();

        // Load view
        echo view('admin/contract/contract_list', $data);
    }

    public function amendment()
    {
        // Call contract model
        $contractModel = model(ContractModel::class);

        // Get data from model
        $data['kontrak'] = $contractModel->asArray()->findAll();

        // Load view
        echo view('admin/contract/contract_list', $data);
    }

    public function testcontract()
    {
        $data['test'] = 'test_fail';

        if (!$this->validate([
            'test'                    => 'required'
        ])) {
            echo view('admin/contract/test_contract', $data);
            // echo view('contract/contract_list');
        } else {
            $data['test'] = $this->request->getVar('test');
            echo view('admin/contract/test_contract', $data);
        }
    }

    /* Add functions */

    public function addcontract()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contract model
        $contractModel  = model(ContractModel::class);
        $prModel        = model(PRModel::class);

        // Validate inputs
        if (!$this->validate($this->contract_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('admin/contract/add_contract');
        } else {
            // Validation success == send setter request to model
            $data = $this->contract_get();

            // Call model to add into database
            $contractModel->insert($data);

            // Get insert ID
            $contract_id = $contractModel->getInsertID();

            // Define as array
            $pr = array();
            $res = array();

            // Insert No. PR(s) into database
            $res = $this->request->getVar('pr_no');
            foreach ($res as $key => $val) {
                $pr['id_kontrak']       = $contract_id;
                $pr['no_pr']            = $val['no'];
                $pr['type']             = $val['jenis_pr'];

                $prModel->insert($pr);
            }

            // Return to main menu and show success
            echo view('testpage', $pr);
        }
    }

    public function addamendment()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call amendment model
        $amendmentModel = model(AmendmentModel::class);

        // Validate inputs
        if (!$this->validate($this->amendment_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('admin/amendment/add_amendment');
        } else {
            // Validation success == send setter request to model
            $data = $this->amendment_get();

            // Call model to add into database
            $amendmentModel->insert($data);

            // Get insert ID
            $amendment_id = $amendmentModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('/admin/amendment');
        }
    }

    public function addnovation()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call novation model
        $novationModel = model(NovationModel::class);

        // Validate inputs
        if (!$this->validate($this->amendment_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('admin/novation/add_novation');
        } else {
            // Validation success == send setter request to model
            $data = $this->amendment_get();

            // Call model to add into database
            $novationModel->insert($data);

            // Get insert ID
            $amendment_id = $novationModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('admin/novation');
        }
    }

    /* Edit functions */
    public function editcontract($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contract model
        $contractModel = model(ContractModel::class);

        // Get data with same ID
        $contract_id = $contractModel->find($id);

        // Validate inputs
        if (!$this->validate($this->contract_rule())) {
            // Validation error == show form and input errors
            echo view('admin/contract/edit_contract', $contract_id);
        } else {
            // Validation success == send setter request to model
            $data['id_kontrak'] = $id;
            $data = $this->contract_get();

            // Call model to add into database
            $contractModel->update($data);

            // Get insert ID
            $contract_id = $contractModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('/admin/contract');
        }
    }

    public function editamendment($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call amendment model
        $amendmentModel = model(AmendmentModel::class);

        // Get data with same ID
        $amendment_id = $amendmentModel->find($id);

        // Validate inputs
        if (!$this->validate($this->amendment_rule())) {
            // Validation error == show form and input errors
            echo view('admin/amendment/edit_amendment');
        } else {
            // Validation success == send setter request to model
            $data['id_amandemen'] = $id;
            $data = $this->amendment_get();

            // Call model to add into database
            $amendmentModel->update($data);

            // Get insert ID
            $amendment_id = $amendmentModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect()->to('/admin/amendment');
        }
    }

    public function editnovation($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call novation model
        $novationModel = model(NovationModel::class);

        // Get data with same ID
        $novation_id = $novationModel->find($id);

        // Validate inputs
        if (!$this->validate($this->novation_rule())) {
            // Validation error == show form and input errors
            echo view('admin/novation/edit_novation');
        } else {
            // Validation success == send setter request to model
            $data['id_novasi'] = $id;
            $data = $this->novation_get();

            // Call model to add into database
            $novationModel->update($data);

            // Get insert ID
            $novation_id = $novationModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect($this->index);
        }
    }

    /* Delete functions*/
    public function deletecontract($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call novation model
        $contractModel = model(ContractModel::class);

        // Get data with same ID
        $contract_id = $contractModel->withDeleted()->find($id);

        // Delete
        $contractModel->delete($id);

        // Return to main menu and show success
        $session->setFlashdata('item', 'value');
        redirect($this->index);
    }

    /*Test functions*/

    public function test()
    {
        $data = $this->contract_rule();
        echo view('testpage', $data);
    }

    /* Validation lists & Form getters*/
    private function contract_rule()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'pr_no.*.no'                => 'required|exact_length[9]',
            'tgl_permintaan_lelang'     => 'required',
            'tgl_penetapan'             => 'required',
            'coll_no'                   => 'required',
            'code'                      => 'required',
            'tipe'                      => 'required',
            'nama_pekerjaan'            => 'required',
            'durasi'                    => 'required',
            'jenis_durasi'              => 'required',
            'vendor'                    => 'required',
            'po_no'                     => 'exact_length[10]',
            'po_risk'                   => 'required',
            'nilai_kontrak'             => 'required',
            'nilai_penawaran_awal'      => 'required',
            'nilai_oe'                  => 'required',
            'drafter'                   => 'required'
        );

        return $data;
    }

    private function contract_get()
    {
        $data['bidding_code']                    = $this->request->getVar('bidding_code');
        $data['tgl_permintaan_lelang']           = $this->request->getVar('tgl_permintaan_lelang');
        $data['tgl_penetapan']                   = $this->request->getVar('tgl_penetapan');
        $data['coll_no']                         = $this->request->getVar('coll_no');
        $data['code']                            = $this->request->getVar('code');
        $data['nama_pekerjaan']                  = $this->request->getVar('nama_pekerjaan');
        $data['tipe']                            = $this->request->getVar('tipe');
        $data['durasi']                          = $this->request->getVar('durasi');
        $data['jenis_durasi']                    = $this->request->getVar('jenis_durasi');
        $data['vendor']                          = $this->request->getVar('vendor');
        $data['po_no']                           = $this->request->getVar('po_no');
        $data['po_pengganti']                    = $this->request->getVar('po_pengganti');
        $data['tkdn_minim']                      = str_replace(",", ".", $this->request->getVar('tkdn_minim'));
        $data['tkdn_barang_nilai']               = str_replace(array(".", ","), array("", "."), $this->request->getVar('tkdn_barang_nilai'));
        $data['tkdn_barang']                     = str_replace(",", ".", $this->request->getVar('tkdn_barang'));
        $data['tkdn_jasa_nilai']                 = str_replace(array(".", ","), array("", "."), $this->request->getVar('tkdn_jasa_nilai'));
        $data['tkdn_jasa']                       = str_replace(",", ".", $this->request->getVar('tkdn_jasa'));
        $data['tkdn_total']                      = str_replace(",", ".", $this->request->getVar('tkdn_total'));
        $data['po_risk']                         = str_replace(",", ".", $this->request->getVar('po_risk'));
        $data['nilai_kontrak']                   = str_replace(array(".", ","), array("", "."), $this->request->getVar('nilai_kontrak'));
        $data['nilai_penawaran_awal']            = str_replace(array(".", ","), array("", "."), $this->request->getVar('nilai_penawaran_awal'));
        $data['nilai_oe']                        = str_replace(array(".", ","), array("", "."), $this->request->getVar('nilai_oe'));
        $data['drafter']                         = $this->request->getVar('drafter');

        return $data;
    }

    private function amendment_rule()
    {
        $data = array(
            'nama_pekerjaan'            => 'required',
            'tipe_amandemen'            => 'required',
            'amandemen_ke'              => 'required',
            'tgl_mulai'                 => 'required',
            'tgl_selesai'               => 'required',
            'durasi'                    => 'required',
            'jenis_durasi'              => 'required',
            'vendor'                    => 'required',
            'po_no'                     => 'required',
            'po_pengganti'              => 'required',
            'nilai_kontrak'             => 'required',
            'drafter'                   => 'required',
        );

        return $data;
    }

    private function amendment_get()
    {
        $data['nama_pekerjaan']                 = $this->request->getVar('nama_pekerjaan');
        $data['tipe_amandemen']                 = $this->request->getVar('tipe_amandemen');
        $data['amandemen_ke']                   = $this->request->getVar('amandemen_ke');
        $data['tgl_mulai']                      = $this->request->getVar('tgl_mulai');
        $data['tgl_selesai']                    = $this->request->getVar('tgl_selesai');
        $data['durasi']                         = $this->request->getVar('durasi');
        $data['jenis_durasi']                   = $this->request->getVar('jenis_durasi');
        $data['vendor']                         = $this->request->getVar('vendor');
        $data['po_no']                          = $this->request->getVar('po_no');
        $data['po_pengganti']                   = $this->request->getVar('po_pengganti');
        $data['nilai_kontrak']                  = str_replace(",", ".", $this->request->getVar('nilai_kontrak'));
        $data['drafter']                        = $this->request->getVar('drafter');

        return $data;
    }

    private function novation_rule()
    {
        $data = array(
            'nama_pekerjaan'            => 'required',
            'vendor'                    => 'required',
            'po_no'                     => 'required',
            'po_pengganti'              => 'required',
            'nilai_kontrak'             => 'required',
            'drafter'                   => 'required',
        );

        return $data;
    }

    private function novation_get()
    {
        $data['nama_pekerjaan']             = $this->request->getVar('nama_pekerjaan');
        $data['vendor']                     = $this->request->getVar('vendor');
        $data['po_no']                      = $this->request->getVar('po_no');
        $data['po_pengganti']               = $this->request->getVar('po_pengganti');
        $data['nilai_kontrak']              = $this->request->getVar('nilai_kontrak');
        $data['drafter']                    = $this->request->getVar('drafter');

        return $data;
    }
}
