<?php

class Pages extends CI_Controller {

	//public function view($page = 'home')
	public function view()
	{	
		if ( ! file_exists('application/views/system/home.php'))
		{
			show_404();
		}
		
		$data["title"] = "師生關係追蹤管理系統"; 
		$this->load->view('templates/header', $data);
		$this->load->view('system/home', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function Search()
	{			
		$condition=$this->input->post('condition');
		
		if ($condition!=null)
		{
			if ($condition==0)
			{
				$this->load->model('index2',"",true);
				$data["list"]=$this->index2->get_data_year();
			}
			
			if ($condition==1)
			{
				$this->load->model('index2',"",true);
				$data["list"]=$this->index2->get_data_stuname();
			}
			if ($condition==2)
			{
				$this->load->model('index2',"",true);
				$data["list"]=$this->index2->get_data_stuid();
			}
			if ($condition==3)
			{
				$this->load->model('index2',"",true);
				$data["list"]=$this->index2->get_data_teacher();
			}
			
			
			$this->load->view('templates/header', $data);
			$this->load->view('system/home', $data);
			$this->load->view('system/search' ,$data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->load->view('templates/header');
			$this->load->view('system/home');
			$this->load->view('templates/footer');
		}
	}
}