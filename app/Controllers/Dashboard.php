<?php

namespace App\Controllers;
use \App\Models\UserModel;
class Dashboard extends BaseController
{
    public function index()
    {
        if(session('users')->id < 1){
            return redirect()->to('login');
        }
        echo view('common/header');
        echo view('dashboard');
        echo view('common/footer');
    }
   
}
