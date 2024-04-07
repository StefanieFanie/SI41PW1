<?php
    class KaryaSastra{
        public $jenis;
        public $judul;
        public function __construct($jenis,$judul){
            $this->jenis = $jenis;
            $this->judul = $judul;
        }
        public function informasi(){
            echo "Jenis : ".$this->jenis."<br>";
            echo "Judul : ".$this->judul."<br>";
        }
    }

    class KaryaSastraBaru extends KaryaSastra{
        public $penulis;
        public function __construct($jenis,$judul,$penulis){
            parent::__construct($jenis,$judul);
            $this->penulis = $penulis;
        }
        public function informasi(){
            parent::informasi();
            echo "Penulis : ".$this->penulis."<br>";
        }
    }

    class Novel extends KaryaSastraBaru{
        public $ISBN;
        public $penerbit;
        public $harga;
        public $jumlahHalaman;
        public function __construct($jenis,$judul,$penulis,$ISBN,$penerbit,$harga,$jumlahHalaman){
            parent::__construct($jenis,$judul,$penulis);
            $this->ISBN = $ISBN;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jumlahHalaman = $jumlahHalaman;
        }
        public function informasi(){
            parent::informasi();
            echo "ISBN : ".$this->ISBN."<br>";
            echo "Penerbit : ".$this->penerbit."<br>";
            echo "Harga : Rp ".$this->harga."<br>";
            echo "Jumlah halaman : ".$this->jumlahHalaman." halaman<br><br>";
        }
    }

    class Cerpen extends KaryaSastraBaru{
        public $jumlahKata;
        public function __construct($jenis,$judul,$penulis,$jumlahKata){
            parent::__construct($jenis,$judul,$penulis);
            $this->jumlahKata = $jumlahKata;
        }
        public function informasi(){
            parent::informasi();
            echo "Jumlah kata : ".$this->jumlahKata." kata<br><br>";
        }
    }

    $novel = new Novel("Novel","Laskar Pelangi","Andrea Hirata","979-3062-79-7","Benteng Pustaka",80000,529);
    $novel->informasi();

    $cerpen = new Cerpen("Cerpen","Balerina","Indah Cho",411);
    $cerpen->informasi();

    $dongeng = new KaryaSastra("Dongeng","Si Kancil dan Buaya");
    $dongeng->informasi();
?>
