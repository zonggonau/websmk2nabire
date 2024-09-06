<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function tkp()
	{
		$data['title']		= 'Teknik Konstruksi dan Perumahan';
		$data['page']		= 'jurusan/tkp';

		$this->load->view('front/layouts/main', $data);
	}

	public function titl()
	{
		$data['title']		= 'Teknik Instalasi Tenaga Listrik';
		$data['page']		= 'jurusan/titl';

		$this->load->view('front/layouts/main', $data);
	}

	public function tav()
	{
		$data['title']		= 'Teknik Audio Video';
		$data['page']		= 'jurusan/tav';

		$this->load->view('front/layouts/main', $data);
	}
	public function tsm()
	{
		$data['title']		= 'Teknik Sepeda Motor';
		$data['page']		= 'jurusan/tsm';

		$this->load->view('front/layouts/main', $data);
	}

	public function tkj()
	{
		$data['title']		= 'Teknik Komputer dan Jaringan';
		$data['page']		= 'jurusan/tkj';

		$this->load->view('front/layouts/main', $data);
	}

	public function tkro()
	{
		$data['title']		= 'Teknik Kendaraan Ringan Otomotif';
		$data['page']		= 'jurusan/tkro';

		$this->load->view('front/layouts/main', $data);
	}
}

/* End of file Controllername.php */
