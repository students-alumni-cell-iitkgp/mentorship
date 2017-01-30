<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

public function index()
{
	$this->load->database();
if(!isset($_POST['logout'])){
	$email=$_POST['eid'];
		//var $query1,$query2;
		$query = $this->db->get_where('users', array('email' => $email));
		$query1 = $this->db->get_where('contact', array('email' => $email));
		$query2 = $this->db->get_where('preferences', array('email' => $email));
		$row=$query->row_array();		
		if ($query->num_rows()>0) {
			$row = $query->row_array();	$row1 = $query1->row_array();
			if($row['password']==$_POST['pass']){
                $data=array(
                    'email'=>$this->input->post('eid'),
                    'is_logged_in'=>true
                );
                $this->session->set_userdata($data);
                $this->load->view('users', $row );
                
                }
			else { 
				header("Location:http://www.mentorship.iitkgp.ernet.in/?err=pass");
		}
		}
		else {
		header("Location:http://www.mentorship.iitkgp.ernet.in/?err=user");
			
	}
	
	}
	
	else header('Location:http://www.mentorship.iitkgp.ernet.in');
	$this->load->model('member_area');
	//$this->load->view('member_area',$_POST);
    if (isset($_POST['logout'])){
        $this->session->sess_destroy();
    }
}
}
?>