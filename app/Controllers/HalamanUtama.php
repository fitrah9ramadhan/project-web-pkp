<?php 

namespace App\Controllers;

class HalamanUtama extends BaseController
{
	public function index()
	{

		$data = [

			'title' => 'Home | Kecamatan Balocci',
			'berita' => $this->beritaModel->orderBy('id', 'desc')->paginate(3, 'berita'),
			'agenda' => $this->agendaModel->orderBy('id', 'desc')->paginate(3, 'agenda'),
			'camat' => $this->camatModel->getCamat()[0]

		];


		return view('pages/home', $data);
	}
}
