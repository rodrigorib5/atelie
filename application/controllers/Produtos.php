<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller 
{
	public function index()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/home');
		$this->load->view('templates/footer-landingpage');
	}
	public function salgadosFritos()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}

	public function salgadosAssados()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}

	public function pasteis()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}	

	public function miniPizzas()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}

	public function baguetes()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}

	public function doces()
	{
		$this->load->view('templates/header-default');
		$this->load->view('pages/produtos/salgadosFritos');
		$this->load->view('templates/footer-landingpage');
	}
}
