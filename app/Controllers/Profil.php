<?php

namespace App\Controllers;
use App\Models\ProfilModel;

class Profil extends BaseController
{

	public function gambaran_umum(){
		$data = [
			'title' => 'Gambaran Umum | Kecamatan Balocci',
			'profil_kecamatan' => $this->profilModel->getProfil()[0]
		];

		return view('profil_kecamatan/gambaran_umum', $data);
	}

	public function sejarah_kecamatan(){
		$data = [
			'title' => 'Sejarah Kecamatan | Kecamatan Balocci',
			'profil_kecamatan' => $this->profilModel->getProfil()[0]
		];

		return view('profil_kecamatan/sejarah_kecamatan', $data);
	}

	public function peta(){
	$data = [
			'title' => 'Peta Kecamatan | Kecamatan Balocci',
			'profil_kecamatan' => $this->profilModel->getProfil()[0]
		];

		return view('profil_kecamatan/peta', $data);
	}
}