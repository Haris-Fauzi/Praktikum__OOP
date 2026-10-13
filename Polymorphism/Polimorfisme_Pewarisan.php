<?php
//kita buat parent class
class Pegawai{
    protected $nama_pegawai;
    protected $gaji_pegawai;

    //method construct
    public function __construct($nama_pegawai, $gaji_pegawai) {
        $this->nama_pegawai = $nama_pegawai;
        $this->gaji_pegawai = $gaji_pegawai;
    }

    //fungsi getter untuk ambil nama
    public function getNama(){
        return $this->nama_pegawai;
    }

    //method dasar di parent class
    public function hitungGaji(){
        return $this->gaji_pegawai;
    }
}

//Polimorfisme dengan Inheritance, menggunakan overriding
class Freelancer extends Pegawai{
    private $projectRate;
    private $jumlahProject;

    public function __construct($nama_pegawai, $projectRate, $jumlahProject){
        //Gaji di buat 0, karena freelancer hanya dibayar per project
        parent:: __construct($nama_pegawai, 0);
        $this->projectRate = $projectRate;
        $this->jumlahProject = $jumlahProject;
    }

    //Overriding untuk menghitung ulang gaji
    //Menimpa atau menulis kembali karakteristik method hitungGaji
    public function hitungGaji()
    {
        return $this->projectRate * $this->jumlahProject;
    }
}
    //child class kedua
    class KaryawanTetap extends Pegawai{
        private $tunjangan;

        public function __construct($nama_pegawai, $gaji_pegawai, $tunjangan)
        {
            parent::__construct($nama_pegawai, $gaji_pegawai);
            $this->tunjangan = $tunjangan;
        }

        //Polimorfisme dengan Overriding/Menimpa karakteristik
        public function hitungGaji()
        {
            //Ambil Gaji Pokok dari parent lalu tambahkan tunjangan
            return parent::hitungGaji() + $this->tunjangan;
        }
    }

    //buat fungsi untuk melihat hasil penerapan polimorfisme
    function cetakGaji(Pegawai $pegawai){ //menerima objek pegawi dan turunannya
        echo "Gaji " . $pegawai->getNama(). ": Rp." .
        number_format($pegawai->hitungGaji(), 0, ',', '.'). "<br>";
    }

    //Penggunaan Class dan Fungsi

    $pegawaiBiasa = new Pegawai("Chiko", 3000000);
    $pegawaiFreelancer = new Freelancer("Miguel", 2000000, 4);
    $pewagaiTetap = new KaryawanTetap("James", 5000000, 2000000);

    //Menggunakan satu fungsi yang sama untuk berbagai objek
    cetakGaji($pegawaiBiasa);
    cetakGaji($pegawaiFreelancer);
    cetakGaji($pewagaiTetap);

?>