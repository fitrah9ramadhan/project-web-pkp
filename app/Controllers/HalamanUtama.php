<?php 

namespace App\Controllers;

class HalamanUtama extends BaseController
{
	public function index()
	{

		$berita = $this->beritaModel->getBerita();

		// foreach ($berita as $b) {

		// 	dd($berita);
		// }

		$data = [

			'title' => 'Home | Kecamatan Balocci',
			'berita' => $this->beritaModel->getBerita()

		];
		return view('pages/home', $data);
	}
}
