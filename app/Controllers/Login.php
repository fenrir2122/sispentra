<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        //Init session for success notification
        $session = \Config\Services::session();
        
        //Get errors
        $data['error'] = $session->getFlashdata('error');

        // Show register page
        echo view('login', $data);
    }

    public function signin() 
    {
        //Init session for success notification
        $session = \Config\Services::session();

        // Set model
        $userModel = model(UserModel::class);

        //Call POST getter
        $data = $this->user_get();

        //Find entry with same email (primary key)
        $confirm = $userModel->find($data['email']);

        //Check if email exists
        if ($confirm && $confirm['status'] == 1) {
            //Check password, if correct = create user session
            $pass_verify = password_verify($data['password'], 
            $confirm['password']);
            if ($pass_verify) {
                $ses_user = [
                    'email'     => $confirm['email'],
                    'nama'      => $confirm['nama'],
                    'bagian'    => $confirm['bagian']
                ];
                $session->set($ses_user);
            } else {
                //Password incorrect = show error
                $session->setFlashdata('error', 'Wrong password');
                return redirect()->to('/public/index.php/login');
                // echo view('login');
            }
        } else if ($confirm['status'] != 1) {
            //Status not verified = show error
            $session->setFlashdata('error', 'The account has not been verified');
            return redirect()->to('/public/index.php/login');
        }
        else {
            //Email incorrect = show error
            $session->setFlashdata('error', 'Wrong email or password');
            return redirect()->to('/public/index.php/login');
            // echo view('login');
        }
    }

    /*POST getter*/
    private function user_get()
    {
        $data['email']                    = $this->request->getVar('email');
        $data['password']                 = $this->request->getVar('password');

        return $data;
    }
}
