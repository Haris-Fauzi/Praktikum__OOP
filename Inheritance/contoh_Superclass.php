<?php
class Person{
    private string $nama;
    private string $alamat;

    public function __construct(string $nama, string $alamat)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function tampilkanInfo(): void{
        echo "Nama : " .$this->nama. "<br>";
        echo "Alamat : " .$this->alamat. "<br>";
    }

    //Getter untuk diakses subclass karena properti private
    public function GetNama(): string{
        return $this->nama;
    }

    public function GetAlamat(): string{
        return $this->alamat;
    }
}