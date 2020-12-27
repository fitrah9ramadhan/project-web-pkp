<?php 


namespace App\Models;
use CodeIgniter\Model;

class DesaModel extends Model
{
	protected $table = 'pemerintahan_desa';
	protected $useTimestamps = false;
	protected $allowedFields = ['nama_desa', 'kepala_desa', 'masa_kerja', 'luas_daerah', 'jumlah_penduduk', 'dusun_rw_rt'];

	public function getPemdes($id = false)
	{
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first(); 
	}
}