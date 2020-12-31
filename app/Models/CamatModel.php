<?php 


namespace App\Models;
use CodeIgniter\Model;

class CamatModel extends Model
{
	protected $table = 'camat';
	protected $useTimestamps = false;
	protected $allowedFields = ['camat', 'sekcam', 'quotes_camat', 'quotes_sekcam', 'masa_jabatan', 'gambar_camat', 'gambar_sekcam'];

	public function getCamat($id = false)
	{
		if($id == false){
			return $this->orderBy('id', 'desc')->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}