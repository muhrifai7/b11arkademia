<?php 

class Soal7 extends Controller {
	public function index() 
	{

		$data['judul'] = 'Daftar Pegawai';
		$data['users'] = $this->model('Users_model')->getUsers();
		$this->view('templates/header', $data);	
		$this->view('soal7/index',$data);
		$this->view('templates/footer');
	}

	public function tambah () 
	{	

		if( $this->model('Users_model')->tambahData($_POST) > 0){
			//set session sebelum redirect
			Flasher::setFlash('berhasil','ditambahkan','success');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}else {
			Flasher::setFlash('Gagal','ditambahkan','danger');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}
		
	}

	public function getUbah() 
	{
		echo json_encode($data['users'] = $this->model('Users_model')->getDataById($_POST['id']));	
	}

	public function ubah(){
	
		if( $this->model('Users_model')->ubahData($_POST) > 0){
			//set session sebelum redirect
			Flasher::setFlash('berhasil','diedit','success');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}else {
			Flasher::setFlash('Gagal','diedit','danger');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}
	}


	public function hapus($id) 
	{
		if($this->model('Users_model')->hapusData($id)> 0){
			//set session sebelum redirect
			Flasher::setFlash('berhasil','dihapus','success');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}else {
			Flasher::setFlash('Gagal','dihapus','danger');
			Header('Location:http://localhost/b11arka/public/soal7');
			exit;
		}
		
	}



}







