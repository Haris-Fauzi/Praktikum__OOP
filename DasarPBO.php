<?php
//Pseudocode dari contoh Elemen PBO/OOP

//Class Karyawan
//Property NIP, Nama, Gaji
//Method TampilkanData(), AturGaji()
//Object Karyawan_Havids, Karyawan_Arla, Karyawan,Yafi


//class
class Karyawan{
    //property
    public int $NIP;
    public string $Nama;
    public float $Gaji =0;

    //method
    public function TampilData(){
    echo "Berikut adalah Data Karyawan Texmaco<br>";
    echo "NIP : " . $this->NIP . "<br>";
    echo "Nama Karyawan : " . $this->Nama . "<br>";
    echo "Gaji yang didapat : Rp ".number_format($this->Gaji, 0, ',', '.') . "<br>";
    }

    public function AturGaji(float $JumlahGaji){
     $this->Gaji += $JumlahGaji;
    }

}

//Object
$Karyawan_Havids = new Karyawan("HAvids", 12000);
$Karyawan_Havids->NIP = 123451;
$Karyawan_Havids->Nama = "Havids";
$Karyawan_Havids->AturGaji(6000000);

echo "Hasil Object Pertama :<br>";
$Karyawan_Havids->TampilData();