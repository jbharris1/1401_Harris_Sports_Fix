<?php 

	class Join extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$data['title'] = 'Welcome to Sports Fix';
			$this->load->view('header', $data);
			$this->load->view('signup');
			$this->load->view('footer');
		}

	}

?>