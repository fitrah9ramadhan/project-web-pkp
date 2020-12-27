<?php 

namespace App\Controllers;

class HubungiKami extends BaseController
{

	public function index(){
		$data = [

			'title' => 'Hubungi Kami | Kecamatan Balocci',
			'kontak' => $this->kontakModel->getKontak()
		];

		return view('/hubungi_kami/index', $data);
	}
}