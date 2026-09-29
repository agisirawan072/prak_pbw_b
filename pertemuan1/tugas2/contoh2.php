<?php

interface BisaDihitung {    
    public function hargaAkhir(): float; 
}

class Produk implements BisaDihitung {
    public function __construct(
        protected string $nama,
        protected float $harga
    ) {}

    public function hargaAkhir(): float
    {
        return $this->harga;
    }

    public function getNama(): string
    {
        return $this->nama;
    }
}

class ProdukDiskon extends Produk {
    public function __construct(string $nama, float $harga, private float $diskon){
        parent::__construct($nama, $harga);
    }

    public function hargaAkhir(): float{
        return $this->harga * (1 - ($this->diskon / 100));
    }
}


class ProdukPajak extends Produk {
    public function __construct(string $nama, float $harga, private float $pajak){
        parent::__construct($nama, $harga);
    }

    public function hargaAkhir(): float{
        return $this->harga * (1 + ($this->pajak / 100));
    }
}

$daftar = [
    new Produk('keyboard', 250000),
    new ProdukDiskon('mouse', 150000, 10),
    new ProdukPajak('monitor', 1500000, 11) 
];

foreach ($daftar as $produk){
    echo $produk->getNama() . ' - Rp' . number_format($produk->hargaAkhir(), 0, ',', '.') . "<br>";
}

?>
