<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/contract/contract_list');
    }
}
