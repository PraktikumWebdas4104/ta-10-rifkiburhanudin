<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect('localhost','root','','praktikum');
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			return $this->execute("SELECT * FROM mahasiswa");
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			return $this->execute("SELECT * FROM mahasiswa WHERE nim = '$nim'");
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi,$film,$wisata){
			//query update nim, nama, angkatan, fakultas, prodi
			$query = ("UPDATE mahasiswa SET nim = '$nim', nama = '$nama' , angkatan = '$angkatan' , fakultas = '$fakultas', prodi = '$prodi', film = '$film', wisata = '$wisata' WHERE nim = '$nim'");
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			return $this->execute("DELETE FROM mahasiswa WHERE nim = '$nim'");
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi, $film, $wisata){
			//query insert nim,nama, angkatan, fakultas, prodi
			return $this->execute("INSERT INTO mahasiswa VALUES ('$nim','$nama' ,'$angkatan' ,'$fakultas', '$prodi','$film','$wisata')");
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>