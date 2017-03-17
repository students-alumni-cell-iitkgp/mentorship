	<?php 
	class Users extends CI_Controller {
		public function index(){
		$this->load->database();
		$this->load->model('insert_model');
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'department' => $this->input->post('department'),
			'hall' => $this->input->post('hall'),
			'roll' => $this->input->post('roll'),
			'cgpa' => $this->input->post('cgpa'),
			'current_acad_year' => $this->input->post('current'),
			'passout_year' => $this->input->post('pout'),
			'no_of_mentees' => $this->input->post('mentee') 
			);
		 $this->db->set('timestamp', 'NOW()', FALSE);
		$data1 = array(
			'phone' => $this->input->post('phone'),
			'organisation' => $this->input->post('firm'),
			'designation' => $this->input->post('des'),
			'email' => $this->input->post('email') );
		$data2 = array(
			'pref1' => $this->input->post('pref1'),
			'pref2' => $this->input->post('pref2'),
			'pref3' => $this->input->post('pref3'),
			'email' => $this->input->post('email') );


		if($this->input->post('pref1')==''){
			$data2 = array(
				'pref1' => $this->input->post('pref11'),
				'pref2' => $this->input->post('pref22'),
				'pref3' => $this->input->post('pref33'),
				'email' => $this->input->post('email') );

		}
		else{
			$data2 = array(
				'pref1' => $this->input->post('pref1'),
				'pref2' => $this->input->post('pref2'),
				'pref3' => $this->input->post('pref3'),
				'email' => $this->input->post('email') );

		}





		$this->insert_model->form_insert($data,$data1,$data2);




		$this->load->view('home', $_POST);

	}
} 
