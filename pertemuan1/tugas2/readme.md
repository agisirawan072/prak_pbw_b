## Praktikum Pemrogramn Berbasis Web

Repository ini digunakan untuk menyimpan tugas dan praktikum mata kuliah Pemrograman Berbasis Web.

---
* Nama : Muhammad Agis Irawan
* NPM  : 4524210056
* Program Studi : Teknik Informatika
* Mata Kuliah : Prak Pemrograman Berbasis Web - B


---

## Tugas 2

Pada Pertemuan 2, tugas yang dikerjakan meliputi:

1. Menjalankan seluruh contoh program.
2. Membuat minimal dua modifikasi bermakna.
3. Menjelaskan lima bagian kode yang penting.
4. Menampilkan screenshot sebelum dan sesudah modifikasi.
5. Menuliskan satu error yang pernah muncul, penyebab, dan langkah perbaikannya.

---
# Contoh 1 

---
# Screenshot Sebelum Modifikasi
<img width="457" height="117" alt="image" src="https://github.com/user-attachments/assets/f0dcbb5d-5aac-432f-8c34-7459ff5af2a7" />


---
# Screenshot Sesudah Modifikasi
<img width="811" height="140" alt="image2" src="https://github.com/user-attachments/assets/344c8822-4a33-41ed-959b-06b4409246d6" />


---

### Modifikasi pada Contoh 1
1. **Penambahan Properti `prodi` Program Studi**: Menambahkan *field* baru bersifat *private* ke dalam kelas `Mahasiswa` agar objek dapat menyimpan informasi jurusan, lalu menampilkannya pada fungsi `ringkasan()`.
2. **Penambahan Metode `getPredikat()`**: Membuat metode baru untuk menentukan predikat kelulusan berdasarkan rentang nilai IPK dan menampilkannya pada output akhir string.

---

## Penjelasan Bagian Kode Penting

---

### Pada Contoh 1 :
1. **`interface Identitas`**: Sebuah kontrak yang mewajibkan kelas yang mengimplementasikannya seperti kelas `Mahasiswa` untuk mendefinisikan dan memiliki metode `ringkasan()`.
2. **`private string $npm;`**: Menerapkan Encapsulation. Properti dengan modifier private hanya bisa diakses dan diubah dari dalam kelas itu sendiri.
3. **`throw new InvalidArgumentException(...)`**: Sistem penanganan validasi yang akan melempar error terstruktur jika nilai IPK yang diinputkan kurang dari 0 atau lebih dari 4.

---

## Contoh 2 

---
# Screenshot Sebelum Modifikasi
<img width="327" height="157" alt="image4" src="https://github.com/user-attachments/assets/fe653323-8616-42c4-90ec-8199daec429d" />


---
# Screenshot Sesudah Modifikasi
<img width="290" height="155" alt="image5" src="https://github.com/user-attachments/assets/c7243653-c99d-45ab-8156-c3cc7f973fa5" />


---

### Modifikasi pada Contoh 2
1. **Fitur Kelas Baru (`ProdukPajak`)**: Menambahkan subclass baru yang mewarisi kelas `Produk` untuk mengkalkulasi harga akhir dengan tambahan persentase pajak misal 11%.
2. **Perbaikan Format Tampilan Output**: Memodifikasi perulangan `foreach` dengan menambahkan pemisah spasi `' - Rp'` serta menggunakan fungsi `number_format()` agar harga lebih mudah dibaca dan tidak menempel dengan nama produk.

---
## Penjelasan Bagian Kode Penting

---

### Pada Contoh 2:
1. **`protected string $nama, protected float $harga`**: Menerapkan deklarasi visibilitas properti langsung diletakkan di dalam parameter `__construct` secara ringkas.
2. **`class ProdukDiskon extends Produk`**: Menerapkan Inheritance, di mana  `ProdukDiskon` mewarisi properti dan metode dari  `Produk`.

---

## Laporan Error 

**Error pada Contoh 2 Syntax Error Perhitungan Diskon**
<img width="1267" height="82" alt="image3" src="https://github.com/user-attachments/assets/1f18f465-f269-475e-9fa3-66d9d32d9eab" />

* **Penyebab**: Terdapat kesalahan penulisan typo dan line break tidak valid pada rumus perhitungan diskon di kelas `ProdukDiskon`: `return $this-> *(1 $this->diskon / 100);`. Properti harga tidak dipanggil setelah `$this->` dan operator pengurangannya hilang.
* **Langkah Perbaikan**: Melengkapi sintaks tersebut dengan benar: `return $this->harga * (1 - ($this->diskon / 100));`.
