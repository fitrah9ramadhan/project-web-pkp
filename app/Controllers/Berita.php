<?php 

namespace App\Controllers;
use App\Models\BeritaModel;

class Berita extends BaseController
{

	public function index()
	{
 
		$data = [

			'title' => 'Berita | Kecamatan Balocci',
			'berita' => $this->beritaModel->orderBy('id', 'desc')->paginate(3, 'berita'),
			'pager' => $this->beritaModel->pager


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