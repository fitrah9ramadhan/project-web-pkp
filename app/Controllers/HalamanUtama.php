<?php 

namespace App\Controllers;

class HalamanUtama extends BaseController
{
	public function index()
	{
		$data = [

			'title' => 'Home | Kecamatan Balocci',
			'berita' => $this->beritaModel->getBerita()

		];
		return view('pages/home', $data);
	}
}
