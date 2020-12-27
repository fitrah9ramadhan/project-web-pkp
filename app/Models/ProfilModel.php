<?php 

namespace App\Models;
use CodeIgniter\Model;

class ProfilModel extends Model
{
	protected $table = 'profil_kecamatan';
	protected $useTimestamps = false;
	protected $allowedFields = ['gambaran_umum', 'visi_misi', 'sejarah_kecamatan'];

	public function getProfil($id = false)
	{
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}