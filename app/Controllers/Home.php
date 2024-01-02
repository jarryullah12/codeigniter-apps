<?php
namespace App\Controllers;
use App\Models\AdminModel;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function signup()
    {
        $data = [];
        helper('form');
        if($this->request->getMethod()=='post'){
            // echo 222; exit;
            $rules = [
                'name'=>'required|min_length[3]|max_length[20]',
                'email'=>'required|min_length[8]|max_length[50]|valid_email|is_unique[admin.email]',
                'password'=>'required|min_length[8]|max_length[255]',
                'confirm_password'=>'matches[password]',
            ];
            if(!$this->validate($rules)){
                $data['validation']=$this->validator;
            }else{
            //   echo 111; exit;  
            $model = new AdminModel();
            $newData=array(
                'name'=>$this->request->getVar('name'),
                'email'=>$this->request->getVar('email'),
                'password'=>$this->request->getVar('password'),
                'confirm_password'=>$this->request->getVar('confirm_password'),

            );
            $model->save($newData);
           }
        }
        return view('signup',$data);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
