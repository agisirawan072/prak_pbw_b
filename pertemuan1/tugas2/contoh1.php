<?php 
interface Identitas {
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas {
    private string $npm;
    private string $nama;
    private string $prodi;
    protected float $ipk;

    public function __construct(string $npm, string $nama, string $prodi, float $ipk) {
        $this->npm = $npm;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->setIpk($ipk);
    }
    
    public function setIpk(float $ipk): void {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException('IPK harus 0 sampai 4.');
        }
        $this->ipk = $ipk;
    }

    public function getIpk(): float {
        return $this->ipk;
    }

    public function getPredikat(): string {
        if ($this->ipk >= 3.50) return 'Cum Laude';
        if ($this->ipk >= 3.00) return 'Sangat Memuaskan';
        return 'Memuaskan';
    }

    public function ringkasan(): string {
        return $this->npm . ' - ' . $this->nama . ' (' . $this->prodi . ') - IPK: ' . $this->ipk . ' [' . $this->getPredikat() . ']';
    }
}

try {
    $mhs = new Mahasiswa('4524210056', 'Muhammad Agis Irawan', 'Teknik Informatika', 3.38);
    echo $mhs->ringkasan();
} catch (InvalidArgumentException $e) {
    echo "Terjadi Kesalahan: " . $e->getMessage();
}
?>