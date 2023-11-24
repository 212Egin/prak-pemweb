<?php
// by ELIKA EUGENIA RAMADHANIA - 121140212
// Praktikum Pemrograman Web RB - Tugas 2
class Mahasiswa{
    private $nama; //bersifat private tidak dapat diakses secara langsung dari luar class 
    private $nim;
    private $prodi;

    public function setNama($nama){ //mengatur nilai properti nama 
        $this->nama = $nama;
    }
    public function getNama(){ //mendapatkan nilai properti nama
        return $this->nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function getNim(){
        return $this->nim;
    }
    public function setAngkatan($angkatan){
        $this->angkatan = $angkatan;
    }
    public function getAngkatan(){
        return $this->angkatan;
    }
    public function display() { //untuk menampilkan informasi mahasiswa
        echo "Nama     : " . $this->getNama() . "<br>";
        echo "NIM      : " . $this->getNim() . "<br>";
        echo "Angkatan : " . $this->getAngkatan() . "<br>";
        echo "<br>";
    }
}

$mahasiswa1 = new Mahasiswa(); //membuat objek dari kelas Mahasiswa
//.enggunakan metode setter untuk mengatur nilai properti
$mahasiswa1->setNama("Elika Eugenia Ramadhania"); 
$mahasiswa1->setNim("1211420212");
$mahasiswa1->setAngkatan("2021");
$mahasiswa1->display(); //menggunakan metode display untuk menampilkan informasi

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setNama("Aquamarine");
$mahasiswa2->setNim("125140999");
$mahasiswa2->setAngkatan("2025");
$mahasiswa2->display();

?>

