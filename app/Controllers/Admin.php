<?php 

namespace App\Controllers;

class Admin extends BaseController
{

	//method Halaman Utama Admin
	public function index()
	{
		if(!isset($_SESSION['login'])){
			header('Location: adminlogin/index');
			exit;
		}

		$data = [

			'title' => 'Admin | Kecamatan Balocci'
		];
		return view('admin/index', $data);
	}
			//method Halaman CRUD Berita

	public function crud_berita()
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}

		$data = [
			'title' => 'CRUD | Admin',
			'berita' => $this->beritaModel->getBerita()

		];


		return view('admin/crud_berita', $data);
	}
		//method halaman tambah berita
	public function tambah_berita()
	{

	
		$data = [
			'title' => 'Tambah Berita'
		];

		return view('admin/tambah_berita', $data);
		}

		//method halaman detail berita (buat admin, tapi sama aja si, gpp lah)
	public function detail_berita($id)
	{
			if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}
	
		$data = [

			'title' => 'Detail Update Berita',
			'berita' => $this->beritaModel->getBerita($id)

		];

		return view('admin/detail_berita', $data);

	}

		//save data yang udah diinput lewat form 
	public function save_berita()
	{
			if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}
	
		// validasi input
		if(!$this->validate([
			'judul_berita' => 'required|is_unique[berita.judul_berita]|max_length[100]',
			'isi_berita' => 'required|is_unique[berita.isi_berita]',
			'sampul' => [
				'rules' => 'uploaded[sampul]|max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
			'errors' => [
				'uploaded' => 'Pilih gambar sampul terlebih dahulu',
				'max_size' => 'Ukuran gambar terlalu besar',
				'is_image' => 'Yang anda pilih bukan gambar',
				'mime_in' => 'Yang anda pilih bukan gambar'
				]
			]
		])){

			// $validation = \Config\Services::validation();


			//mengirim pesan kesalahan (aturan diatas) ke halaman tambah_berita
			return redirect()->to('/admin/tambah_berita');
		}

		$fileSampul = $this->request->getFile('sampul');
		//pindahkan file ke folder img publik kita
		$fileSampul->move('img');
		//ambil nama file
		$namaSampul = $fileSampul->getName();


		$this->beritaModel->save([

			'sampul' => $namaSampul,
			'judul_berita' => $this->request->getVar('judul_berita'),
			'penulis_berita' => $this->request->getVar('penulis_berita'),
			'isi_berita' => $this->request->getVar('isi_berita'),
			'tanggal_berita' => $this->request->getVar('tanggal_berita')

		]);

		return redirect()->to('/admin/crud_berita');
	}

	public function edit_kontak(){
			if(!isset($_SESSION['login'])){
				header('Location: /adminlogin');
			exit;
		}
	
		$data = [
			'title' => 'Edit Kontak',
			'kontak' => $this->kontakModel->getKontak()
		];

		return view('admin/edit_kontak', $data);
	}

	public function hapus_berita($id)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
		exit;
		}
	
		$this->beritaModel->delete($id);
		session()->setFlashData('pesan', 'Berita Berhasil Dihapus!');
		return redirect()->to('/admin/crud_berita');
	}

	public function edit_berita($id)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
		exit;
		}
	
		$data = [
			'title' => 'Edit Berita',
			'berita' =>$this->beritaModel->getBerita($id)
		];

		return view('admin/edit_berita', $data);
	}

	public function update_berita($id)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
		exit;
		}

	
		$this->beritaModel->save([
		'id' => $id,
		'sampul' => $this->request->getVar('sampul'),
		'judul_berita' => $this->request->getVar('judul_berita'),
		'penulis_berita' => $this->request->getVar('penulis_berita'),			
		'isi_berita' => $this->request->getVar('isi_berita'),
		'tanggal_berita' => $this->request->getVar('tanggal_berita')

		]); 
		
		session()->setFlashdata('pesan', 'Data Berhasil Diubah');

		return redirect()->to('/admin/crud_berita');
	}

	public function update_kontak($id = 1)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
		exit;
		}

	
		$this->kontakModel->save([
			'id' => $id,
			'telefon' => $this->request->getVar('telefon'),
			'whatsapp' => $this->request->getVar('whatsapp'),
			'facebook' => $this->request->getVar('facebook'),
			'instagram' => $this->request->getVar('instagram'),
			'twitter' => $this->request->getVar('twitter')
		]);

		session()->setFlashdata('pesan', 'Kontak Berhasil Diupdate');

		return redirect()->to('/admin/');
	}

	public function edit_profil()
	{
		$data = [
			'title' => 'Edit Profil',
			'profil' => $this->profilModel->getProfil()
		];

		return view('/admin/edit_profil', $data);
	}

	public function update_profil($id=1)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}

		if(!$this->validate([
			'peta' => [
				'rules' => 'uploaded[peta]|max_size[peta,5120]|is_image[peta]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
			'errors' => [
				'uploaded' => 'Pilih gambar peta terlebih dahulu',
				'max_size' => 'Ukuran peta terlalu besar',
				'is_image' => 'Yang anda pilih bukan gambar',
				'mime_in' => 'Yang anda pilih bukan gambar'
				]
			]
		])){
			echo "Salah";
		}

		$filePeta = $this->request->getFile('peta');
		//pindahkan file ke folder img publik kita
		$filePeta->move('img');
		//ambil nama file
		$namaPeta = $filePeta->getName();

		$this->profilModel->save([
			'id' => $id,
			'gambaran_umum' => $this->request->getVar('gambaran_umum'),
			'sejarah_kecamatan' => $this->request->getVar('sejarah_kecamatan'),
			'peta' => $namaPeta
		]);

		session()->setFlashdata('pesan', 'Profil berhasil diupdate');

		return redirect()->to('/admin/');
	}

	public function crud_pemdes()
	{
		$data = [
			'title' => 'CRUD Pemdes | Kecamatan Balocci',
			'pemdes' => $this->desaModel->getPemdes()
		];
		return view('/admin/crud_pemdes', $data);
	}

	public function edit_pemdes($id)
	{
		$data = [
			'title' => 'Edit Pemdes | Kecamatan Balocci',
			'pemdes' => $this->desaModel->getPemdes($id)
		];
		return view('/admin/edit_pemdes', $data);
	}

	public function hapus_pemdes($id)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
		exit;
		}
	
		$this->desaModel->delete($id);
		session()->setFlashData('pesan', 'Pemdes Berhasil Dihapus!');
		return redirect()->to('/admin/crud_pemdes');
	}

	public function tambah_pemdes()
	{
		$data = [
			'title' => 'Tambah Pemdes'
		];

		return view('admin/tambah_pemdes', $data);
	}

	public function save_pemdes()
	{
		$this->desaModel->save([
			'nama_desa' => $this->request->getVar('nama_desa'),
			'kepala_desa' => $this->request->getVar('kepala_desa'),
			'masa_kerja' => $this->request->getVar('masa_kerja'),
			'luas_daerah' => $this->request->getVar('luas_daerah'),
			'jumlah_penduduk' => $this->request->getVar('jumlah_penduduk'),
			'dusun_rw_rt' => $this->request->getVar('dusun_rw_rt')
		]);

		session()->setFlashdata('pesan', 'Pemdes berhasil ditambahkan');

		return redirect()->to('/admin/');
	}

	public function update_pemdes($id)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}

		$this->desaModel->save([
			'id' => $id,
			'nama_desa' => $this->request->getVar('nama_desa'),
			'kepala_desa' => $this->request->getVar('kepala_desa'),
			'masa_kerja' => $this->request->getVar('masa_kerja'),
			'luas_daerah' => $this->request->getVar('luas_daerah'),
			'jumlah_penduduk' => $this->request->getVar('jumlah_penduduk'),
			'dusun_rw_rt' => $this->request->getVar('dusun_rw_rt')
		]);

		session()->setFlashdata('pesan', 'Pemdes berhasil diupdate');

		return redirect()->to('/admin/');
	}

	public function tambah_agenda()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:/adminlogin');
			exit;
		}

		$data = [
			'title' => 'Tambah Agenda'
		];

		return view('admin/tambah_agenda', $data);
	}

	public function save_agenda()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:/adminlogin');
			exit;
		}

		$this->agendaModel->save([
			'nama_agenda' => $this->request->getVar('nama_agenda'),
			'tempat' => $this->request->getVar('tempat'),
			'tanggal' => $this->request->getVar('tanggal')
		]);

		session()->setFlashdata('pesan', 'Pemdes berhasil ditambahkan');

		return redirect()->to('/admin/');
	}

	public function edit_camat()
	{
		if (!isset($_SESSION['login'])) {
			header('Location:/adminlogin');
			exit;
		}

		$data = [
			'title' => 'Edit Camat',
			'camat' => $this->camatModel->getCamat()
		];

		return view('/admin/edit_camat', $data);
	}

	public function update_camat($id=1)
	{
		if(!isset($_SESSION['login'])){
			header('Location: /adminlogin');
			exit;
		}

		if(!$this->validate([
			'gambar_camat' => [
				'rules' => 'uploaded[peta]|max_size[peta,5120]|is_image[peta]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
			'errors' => [
				'uploaded' => 'Pilih gambar peta terlebih dahulu',
				'max_size' => 'Ukuran peta terlalu besar',
				'is_image' => 'Yang anda pilih bukan gambar',
				'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],
			'gambar_sekcam' => [
				'rules' => 'uploaded[peta]|max_size[peta,5120]|is_image[peta]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
			'errors' => [
				'uploaded' => 'Pilih gambar peta terlebih dahulu',
				'max_size' => 'Ukuran peta terlalu besar',
				'is_image' => 'Yang anda pilih bukan gambar',
				'mime_in' => 'Yang anda pilih bukan gambar'
				]
			]
		])){
			echo "Salah";
		}

		$fileGambarCamat = $this->request->getFile('gambar_camat');
		$fileGambarSekcam = $this->request->getFile('gambar_sekcam');

		//pindahkan file ke folder img publik kita
		$fileGambarCamat->move('img/camat');
		$fileGambarSekcam->move('img/sekcam');
		//ambil nama file
		$namaGambarCamat = $fileGambarCamat->getName();
		$namaGambarSekcam = $fileGambarSekcam->getName();

		$this->camatModel->save([
			'id' => $id,
			'camat' => $this->request->getVar('camat'),
			'sekcam' => $this->request->getVar('sekcam'),
			'quotes_camat' => $this->request->getVar('quotes_camat'),
			'quotes_sekcam' => $this->request->getVar('quotes_sekcam'),
			'gambar_camat' => $namaGambarCamat,
			'gambar_sekcam' => $namaGambarSekcam
		]);

		session()->setFlashdata('pesan', 'Profil berhasil diupdate');

		return redirect()->to('/admin/');
	}

}
