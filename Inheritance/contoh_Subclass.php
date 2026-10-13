<?php
require "contoh_Superclass.php";

class Siswa extends Person{
    private string $nisn;

    public function __construct
    (string $nama, string $alamat, string $nisn)
    {
        //memanggil construct milik Superclass
        parent::__construct($nama, $alamat); //warisan
        $this->nisn = $nisn;
    }

    public function belajar():void{
        echo "Siswa bernama : " .$this->GetNama()
        ." dengan NIS: ".$this->nisn. 
        " sedang belajar mata pelajaran RPL.<br>";    
    }
}

//Pengujian Inheritance melalui Pembuatan Objek
$Siswa1 = new Siswa("Ahmad Dani", "Kendal", "008778787");
$Siswa1->tampilkanInfo();  //Method warisan 
$Siswa1->belajar();

?>