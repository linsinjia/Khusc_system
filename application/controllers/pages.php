<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{	
		if ( ! file_exists('application/views/system/'.$page.'.php'))
		{
			// �z��!�ڭ̨S���o�ӭ���!
			show_404();
		}
		$this->load->model('index2',"",true);
		$data["title"] = "�v�����Y�l�ܺ޲z�t��"; // �Ĥ@�Ӧr���j�g
		$data["list"]=$this->index2->get_data_year();
		$this->load->view('templates/header', $data);
		$this->load->view('system/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}