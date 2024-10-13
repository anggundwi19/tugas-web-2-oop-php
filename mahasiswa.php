<?php
// Kelas Mahasiswa
    class Mahasiswa {
        public $nama;
        public $nim;
        public $jurusan;

    public function registrasi() {
        echo "$this->nama dengan nim: $this->nim telah registrasi di jurusan $this->jurusan,";
    }
}

// buat class turunan 1 dari mahasiswa
    class MahasiswaMagang extends Mahasiswa {
         public $tempatMagang;

    public function infoMagang() {
        echo " dan sedang magang di $this->tempatMagang.";
    }
}

// class turunan kedua dari class induk mahasiswa
    class MahasiswaAktifOrganisasi extends Mahasiswa {
        public $organisasi;

    public function infoOrganisasi() {
        echo "$this->nama juga aktif di organisasi $this->organisasi.";
    }
}

// Contoh Penggunaan
$mahasiswa = new MahasiswaMagang();
$mahasiswa->nama = "Anggun";
$mahasiswa->nim = "0049";
$mahasiswa->jurusan = "Sistem Informasi";
$mahasiswa->tempatMagang = "Dicoding Indonesia";

echo $mahasiswa->registrasi();
echo $mahasiswa->infoMagang() . "<br>";

$mahasiswa = new MahasiswaAktifOrganisasi();
$mahasiswa->nama = "Anggun";
$mahasiswa->organisasi = "BEM";
echo $mahasiswa->infoOrganisasi() ;
?>