<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/index');
		$this->load->view('Pages/footer');
	}
	public function about()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/aboutUs');
		$this->load->view('Pages/footer');
	}
	public function join()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/howtojoin');
		$this->load->view('Pages/footer');
	}
	public function savings()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/oursavings');
		$this->load->view('Pages/footer');
	}
	public function investing()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/investing');
		$this->load->view('Pages/footer');
	}
	public function insurance()
	{
		$this->load->view('Pages/header');
		$this->load->view('Pages/insurance');
		$this->load->view('Pages/footer');
	}
}