<?php 


namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
	protected $table = 'kontak';
	protected $useTimestamps = false;
	protected $allowedFields = ['telepon', 'whatsapp', 'facebook', 'instagram', 'twitter'];

	public function getKontak($id = false)
	{
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}