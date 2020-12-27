<?php 


namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
	protected $table = 'berita';
	protected $useTimestamps = true;
	protected $createdField = 'tanggal_berita';
	
	protected $allowedFields = ['sampul', 'judul_berita', 'penulis_berita', 'isi_berita', 'tanggal_berita'];

	public function getBerita($id = false)
	{
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}