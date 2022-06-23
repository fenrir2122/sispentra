<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use DateTime;

class Fpassword extends BaseController
{
    public function index()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        //Get errors
        $data['errors'] = $session->getFlashdata('errors');

        // Show register page
        echo view('forgot_password', $data);
    }

    public function change()
    {
        //Init session for success notification
        $session = \Config\Services::session();

        //Get errors
        $data['email'] = "test";
        $data['password'] = "test";
        $data['errors'] = $session->getFlashdata('errors');

        // Show register page
        echo view('change_password', $data);
    }

    public function c_change($email, $code)
    {
        //Init session for success notification
        $session = \Config\Services::session();

        //Init model
        $userModel = model(userModel::class);

        //Find entry w/ $email as key
        $data = $userModel->find($email);

        //Validate inputs
        if ($data['code'] != null) {
            // Check if activation code is true & code !expired
            if ($data['code'] == $code && date("Y-m-d h:i:s") < $data['activation_expiry']) {
                //Get data from POST
                $data['password'] == $this->cpass_get();

                //Purge activation code
                $data['code']  = null;

                //Update existing entry
                $userModel->update($data);

                //Redirect to login
                $session->setFlashdata('success', 'Password change success');

                //If wrong code
            } else if ($data['code'] != $code) {
                //Set session error
                $session->setFlashdata('error', 'Wrong activation code');

                //Redirect to code input page
                return redirect()->to('/public/index.php/fpassword/change');

                //If code expired
            } else {
                //Set session error
                $session->setFlashdata('error', 'Activation code expired');

                //Redirect to forgot password page
                return redirect()->to('/public/index.php/fpassword');
            }
            // If !email
        } else {
            //Set session error
            $session->setFlashdata('error', 'Forgot password request not found');

            //Redirect to login page
            return redirect()->to('/public/index.php/login');
        }
    }


    public function verify()
    {
        //Call text helper
        helper('text');

        //Init email service
        $email = \Config\Services::email();

        //Init session for success notification
        $session = \Config\Services::session();

        // Set model
        $userModel = model(UserModel::class);

        //Check if email exists
        if ($this->validate($this->fpass_rule())) {
            // Validation success == send setter request to model
            $data = $this->fpass_get();

            //Set sender and receiver
            $email->setFrom('ofboundary@gmail.com', 'Test');
            $email->setTo($data['email']);

            //Email subject
            $email->setSubject('Change Password');
            
            // Current timezone and date
            date_default_timezone_set('Asia/Jakarta');
            $now = date_modify(new DateTime(date("Y-m-d h:i:s")), "+5 minutes");
            $now = $now->format("Y-m-d h:i:s");
            
            //Set activation code & expiry into db
            $data['activation_code']    = random_string('alnum', 6);
            $data['activation_expiry']  = $now;
            $userModel->update($data['email'], $data);

            //Set email content
            $email->setMessage($data['activation_code']);
            

            //Send email
            $email->send();
            echo $email->printDebugger();
            // return redirect()->to('/public/index.php/fpassword/change/'.$data['email']);

            //If !exist, set error
        } else {
            // Save inputs
            $data = $this->fpass_get();
            // Save errors
            $session->setFlashdata('errors', 'Email is not registered');

            return redirect()->to('/public/index.php/fpassword');
            // echo view('register', $data);
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
    private function fpass_rule()
    {
        $data = array(
            'email'                => 'required|is_not_unique[user.email]',
        );

        return $data;
    }

    private function fpass_get()
    {
        $data['email']                    = $this->request->getVar('email');

        return $data;
    }

    private function cpass_rule()
    {
        $data = array(
            'password'                => 'required|min_length[6]',
            'retype'                  => 'required|matches[password]'
        );

        return $data;
    }

    private function cpass_get()
    {
        $data['password']                    = $this->request->getVar('password');

        return $data;
    }
}
