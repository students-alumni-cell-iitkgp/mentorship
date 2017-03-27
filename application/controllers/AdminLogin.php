<?php

/**
 * Created by PhpStorm.
 * User: naoh
 * Date: 3/9/2017
 * Time: 7:41 AM
 */
class AdminLogin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
         $this->load->view('adminlogin');

    }


    public function login(){

        $email = $this->input->post('eid');
        $password = $this->input->post('pass');
        if ($email=='acell@admin.login' && $password=='AcellLoginMentorshippass'){

            $this->load->model('GetAdminData');
            $res = $this->GetAdminData->getdata();
            if($res){
                $data['result'] = $res;
                $this->load->view('admininfodata', $data);
            }


        }
    }


}