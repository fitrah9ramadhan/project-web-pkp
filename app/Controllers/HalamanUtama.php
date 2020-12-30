<?php 

namespace App\Controllers;

class HalamanUtama extends BaseController
{
	public function index()
	{

		$data = [

			'title' => 'Home | Kecamatan Balocci',
			'berita' => $this->beritaModel->orderBy('id', 'desc')->paginate(3, 'berita'),
			'agenda' => $this->agendaModel->orderBy('id', 'desc')->paginate(3, 'agenda')

		];

		return view('pages/home', $data);
	}
}
