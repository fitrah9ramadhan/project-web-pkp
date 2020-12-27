<?php

namespace App\Controllers;
use App\Models\ProfilModel;

class Profil extends BaseController
{
	public function index(){
		$data = [

			'title' => 'Profil | Kecamatan Balocci',
			'profil_kecamatan' => $this->profilModel->getProfil()[0]

		];

		return view('profil_kecamatan/index', $data);
	}
}