<?php 

namespace App\Controllers;

class PemerintahanDesa extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Pemerintahan Desa | Kecamatan Balocci',
			'pemdes' => $this->desaModel->getPemdes()
		];


		return view('desa/index', $data);
	}



}