<?php

class Pages extends CI_Controller {

	public function view($page = 'home')
	{	
		if ( ! file_exists('application/views/system/'.$page.'.php'))
		{
			// 哇勒!我們沒有這個頁面!
			show_404();
		}
		$this->load->model('index2',"",true);
		$data["title"] = "師生關係追蹤管理系統"; // 第一個字母大寫
		$data["list"]=$this->index2->get_data_year();
		$this->load->view('templates/header', $data);
		$this->load->view('system/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}