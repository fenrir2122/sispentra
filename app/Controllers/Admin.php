<?php

namespace App\Controllers;

use App\Models\PRModel;
use App\Controllers\BaseController;

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

    public function user()
    {
        // Call user model
        $userModel = model(UserModel::class);

        // Get data from model
        $data['user'] = $userModel->asArray()->findAll();

        // Load view
        echo view('admin/user/user_list', $data);
    }

    public function contract()
    {
        // Call contract and PR model
        $contractModel = model(ContractModel::class);
        $prModel = model(PRModel::class);

        // Get data from model
        $data['kontrak'] = $contractModel->getJoinContractPR();
        // $data['no_pr'] = $prModel->asArray()->findAll();

        // Match PR and Contract
        // foreach ($data['kontrak'] as $key => $value) {
            // $kontrak = array($key => $value);
            // $a = array('a'=>'test', 'b'=>'check');
            // $b = array('a'=>'test', 'c'=>'check');
            // $pr_no = array_intersect_assoc($kontrak, $pr);
            // $data['kontrak'][$key]['no_pr'] = $pr_no;
        // }

        // return parent::test();

        // Load view
        echo view('admin/contract/contract_list', $data);
    }

    public function amendment()
    {
        // Call amendment model
        $amendmentModel = model(AmendmentModel::class);

        // Get data from model
        $data['amandemen'] = $amendmentModel->asArray()->findAll();

        // Load view
        echo view('admin/amendment/amendment_list', $data);
    }

    public function novation()
    {
        // Call novation model
        $novationModel = model(NovationModel::class);

        // Get data from model
        $data['novasi'] = $novationModel->asArray()->findAll();

        // Load view
        echo view('admin/novation/novation_list', $data);
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
                $pr['tipe']             = $val['jenis_pr'];

                $prModel->insert($pr);
            }


            // Return to main menu and show success
            redirect($this->contract);
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
            return redirect()->to('public/index.php/admin/contract');
        }
    }

    public function addnovation()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call novation model
        $novationModel = model(NovationModel::class);

        // Validate inputs
        if (!$this->validate($this->novation_rule())) {
            // Validation error == show form and input errors
            // session()->setFlashdata('error', $this->validator->listErrors());
            echo view('admin/novation/add_novation');
        } else {
            // Validation success == send setter request to model
            $data = $this->novation_get();

            // Call model to add into database
            $novationModel->insert($data);

            // Get insert ID
            $novation_id = $novationModel->getInsertID();

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
        $prModel = model(PRModel::class);

        // Get data with same ID
        $entry['contract_id'] = $contractModel->find($id);
        $entry['pr'] = $prModel->where('id_kontrak', $id)->findAll();

        echo view('admin/contract/edit_contract', $entry);

    }

    public function onSubmitContract($id) {
        // Call contract model
        $contractModel = model(ContractModel::class);
        $prModel = model(PRModel::class);

        // Session init
        $session = \Config\Services::session();

        // Array init
        $data = array();

        // Validate
        if ($this->validate($this->contract_rule())) {
            $data = $this->contract_get();
            $data['id_kontrak'] = $id;

            // return print_r($data);

            // Call model to add into database
            $contractModel->replace($data);

            // Define as array
            $pr = array();
            $res = array();

            // Arrange No. PR(s)
            $res = $this->request->getVar('pr_no');
            foreach ($res as $key => $val) {
                $pr['id_kontrak']       = $id;
                $pr['no_pr']            = $val['no'];
                $pr['tipe']             = $val['jenis_pr'];
            }
            
            // Replace existing No. PR(s) into database
            $prModel->delete(['id_kontrak' => $id]);
            $prModel->insert($pr);

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            return redirect()->to('public/index.php/admin/contract');
        } else {
            // Get errors
            $data['errors'] = $this->validator->getErrors();

            // Redirect
            return redirect()->to('/admin/contract');
        }
    }

    public function testcontract()
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
                $pr['tipe']             = $val['jenis_pr'];

                $prModel->insert($pr);
            }


            // Return to main menu and show success
            redirect($this->contract);
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
            echo view('admin/amendment/edit_amendment', $amendment_id);
        } else {
            // Validation success == send setter request to model
            $data = $this->amendment_get();
            $data['id_amandemen'] = $id;

            // Call model to add into database
            $amendmentModel->replace($data);

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
            echo view('admin/novation/edit_novation', $novation_id);
        } else {
            // Validation success == send setter request to model
            $data = $this->novation_get();
            $data['id_novasi'] = $id;

            // Call model to add into database
            $novationModel->replace($data);

            // Get insert ID
            $novation_id = $novationModel->getInsertID();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            redirect($this->index);
        }
    }

    /*Other main functions*/
    public function detailcontract($id) 
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contract model
        $contractModel = model(ContractModel::class);
        $prModel = model(PRModel::class);

        // Get data with same ID
        $entry['contract_id'] = $contractModel->find($id);
        $entry['pr'] = $prModel->where('id_kontrak', $id)->findAll();

        // Load view
        echo view('admin/contract/contract_detail', $entry);
    }

    /* Delete functions*/
    public function deletecontract($id)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Call contract model
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

    /* Validations & POST getters*/
    private function user_rule()
    {
        $validation =  \Config\Services::validation();

        $data = array(
            'email'                => 'required|is_unique[user.email]',
            'nama'                 => 'required',
            'password'             => 'required',
            'bagian'               => 'required',
            'status'               => 'required',
        );

        return $data;
    }

    private function user_get()
    {
        $encrypter = \Config\Services::encrypter();

        $data['email']                    = $this->request->getVar('email');
        $data['nama']                     = $this->request->getVar('nama');
        $data['password']                 = $encrypter->encrypt($this->request->getVar('password'));
        $data['bagian']                   = $this->request->getVar('bagian');
        $data['bagian']                   = $this->request->getVar('status');

        return $data;
    }

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
        $data['nilai_kontrak']                  = str_replace(array(".", ","), array("", "."), $this->request->getVar('nilai_kontrak'));
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
        $data['nilai_kontrak']              = str_replace(array(".", ","), array("", "."), $this->request->getVar('nilai_kontrak'));
        $data['drafter']                    = $this->request->getVar('drafter');

        return $data;
    }
}
