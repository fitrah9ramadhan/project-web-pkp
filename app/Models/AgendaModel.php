<?php 


namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
	protected $table = 'agenda';
	protected $useTimestamps = true;
	protected $createdField = 'tanggal';
	protected $allowedFields = ['nama_agenda', 'tempat', 'tanggal'];


	public function getAgenda($id = false)
	{
		if($id == false){
			return $this->orderBy('id', 'desc')->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}