<?php 

/**
 * 
 */
class Dashboard extends CI_controller
{
	
	public function index()
	{
		$this->load->view('pemilik/_partials/head');
		$this->load->view('pemilik/_partials/sidebar');
		$this->load->view('pemilik/dashboard');
		$this->load->view('pemilik/_partials/footer');
	}
}

 ?>