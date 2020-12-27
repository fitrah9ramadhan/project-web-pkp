<?php 


namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $table = 'admin_kecamatan';
	protected $useTimestamps = true;

	public function getLogin($id = false)
	{
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}