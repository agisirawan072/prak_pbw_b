## Praktikum Pemrogramn Berbasis Web

Repository ini digunakan untuk menyimpan tugas dan praktikum mata kuliah Pemrograman Berbasis Web.

---
* Nama : Muhammad Agis Irawan
* NPM  : 4524210056
* Program Studi : Teknik Informatika
* Mata Kuliah : Prak Pemrograman Berbasis Web - B
---

## Tugas 1

Pada Pertemuan 1, tugas yang dikerjakan meliputi:

1. Menjalankan seluruh contoh program.
2. Membuat minimal dua modifikasi bermakna.
3. Menjelaskan lima bagian kode yang penting.
4. Menampilkan screenshot sebelum dan sesudah modifikasi.

---
# Contoh 1

---
# Screenshot Sebelum Modifikasi

<img width="680" height="198" alt="image" src="https://github.com/user-attachments/assets/309fe571-9210-4f9c-88aa-54b1db48bc10" />

---
# Screenshot Sesudah Modifikasi
<img width="643" height="286" alt="image" src="https://github.com/user-attachments/assets/c3aece42-5776-483c-9665-d05b0d455ca3" />





---

### Modifikasi pada Contoh 1
1. **Fitur Operasi Modulus (`%`)**: Menambahkan opsi sisa hasil bagi menggunakan fungsi `fmod($a, $b)` beserta validasi pencegahan pembagian/modulus dengan angka nol.
2. **Fitur Operasi Pemangkatan (`^`)**: Menambahkan opsi pemangkatan bilangan menggunakan fungsi `pow($a, $b)`.

---

## Penjelasan Bagian Kode Penting

---

### Pada Contoh 1 :
1. **`if ($_SERVER['REQUEST_METHOD'] === 'POST')`**: Memastikan kalkulasi aritmatika hanya dijalankan saat form dikirimkan melalui metode POST.
2. **`$a = (float) ($_POST['a'] ?? 0);`**: Mengambil nilai input dengan *null coalescing operator* (`??`) untuk mencegah error *undefined index*, lalu mengonversinya ke tipe `float`.
3. **`if ($b == 0)` (Validasi Aritmatika)**: Mencegah terjadinya *Division by Zero Error* pada operasi pembagian dan modulus dengan menampilkan pesan peringatan.

---

## Contoh 2

---
# Screenshot Sebelum Modifikasi
<img width="392" height="266" alt="image" src="https://github.com/user-attachments/assets/21fe505f-a2e1-477e-a696-5b8413b15c54" />

---
# Screenshot Sesudah Modifikasi
<img width="478" height="351" alt="image" src="https://github.com/user-attachments/assets/e20cf9d3-98b7-447b-a40c-236254d8dae4" />

---

###  Modifikasi pada Contoh 2
1. **Menambahkan Field Baru (`fakultas`)**: Menambahkan elemen `'fakultas' => 'Teknik'` ke dalam array asosiatif `$mahasiswa`.
2. **Menambahkan Kondisi Baru (`Cum Laude`)**: Menambahkan kriteria kelulusan tertinggi `if ($ipk >= 3.80) return 'Cum Laude';` pada fungsi `statusKelulusan()`.

---
## Penjelasan Bagian Kode Penting

---

### Pada Contoh 2:
1. **`function statusKelulusan(float $ipk): string`**: Deklarasi fungsi dengan *type hinting* parameter (`float`) dan *return type* (`string`) untuk memastikan kepastian tipe data.
2. **`foreach ($mahasiswa as $kunci => $nilai)` & `htmlspecialchars()`**: Melakukan iterasi array asosiatif secara dinamis sekaligus mengamankan tampilan.
---
