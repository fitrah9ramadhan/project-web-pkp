<?php 

namespace App\Controllers;

class HalamanUtama extends BaseController
{
	public function index()
	{

		$data = [

			'title' => 'Home | Kecamatan Balocci',
			'berita' => $this->beritaModel->orderBy('id', 'desc')->paginate(3, 'berita')

		];

		return view('pages/home', $data);
	}
}
