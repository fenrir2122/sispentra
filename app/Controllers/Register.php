<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends BaseController
{
    public function index()
    {
        $data['list_bagian'] = $this->list_bagian();

        // Show register page
        echo view('register', $data);
    }

    public function regist()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Set model
        $userModel = model(UserModel::class);

        if ($this->validate($this->user_rule())) {
            // Validation success == send setter request to model
            $data = $this->user_get();

            // Set status as not verified & convert password to hash
            $data['status'] = 0;
            $data['password'] = password_hash($data['pass'], PASSWORD_DEFAULT);

            // Call model to add into database
            $userModel->insert($data);

            // Define list bagian
            $data['list_bagian'] = $this->list_bagian();

            // Return to main menu and show success
            $session->setFlashdata('item', 'value');
            return redirect()->to('/public/index.php/login');
        } else {
            // Save inputs
            $data = $this->user_get();

            // Save errors
            $data['errors'] = $this->validator->getErrors();

            // Define list bagian
            $data['list_bagian'] = $this->list_bagian();

            echo view('register', $data);
        }
    }

    /*List Bagian*/
    private function list_bagian()
    {
        $data = array(
            'DFR' => 'Drafter',
            'ADM' => 'Admin',
            'LGL' => 'Legal'
        );
        return $data;
    }

    /*Validations & POST getter*/
    private function user_rule()
    {
        $data = array(
            'email'                => 'required|is_unique[user.email]',
            'nama'                 => 'required',
            'pass'             => 'required|min_length[6]',
            'confirmpass'          => [
                'label' => 'password confirmation',
                'rules' => 'required|matches[pass]'
            ],
            'bagian'               => 'required',
        );

        return $data;
    }

    private function user_get()
    {
        $data['email']                    = $this->request->getVar('email');
        $data['nama']                     = $this->request->getVar('nama');
        $data['pass']                     = $this->request->getVar('pass');
        $data['confirmpass']              = $this->request->getVar('confirmpass');
        $data['bagian']                   = $this->request->getVar('bagian');

        return $data;
    }
}
