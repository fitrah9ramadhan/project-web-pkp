<?php 

namespace App\Controllers;
use App\Models\BeritaModel;

class Berita extends BaseController
{

	public function index()
	{
 
		$data = [

			'title' => 'Berita | Kecamatan Balocci',
			'berita' => $this->beritaModel->getBerita()

		];





		return view('berita/index', $data);
	}

	public function detail($id)
	{

		$data = [

			'title' => 'Detail Berita',
			'berita' => $this->beritaModel->getBerita($id)

		];
		return view('berita/detail', $data);

	}

}