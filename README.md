## Praktikum Pemrogramn Berbasis Web

Repository ini digunakan untuk menyimpan tugas dan praktikum mata kuliah Pemrograman Berbasis Web.

---
* Nama : Muhammad Agis Irawan
* NPM  : 4524210056
* Program Studi : Teknik Informatika
* Mata Kuliah : Prak Pemrograman Berbasis Web - B
---
# Pertemuan 1

## Tugas 1

Pada Pertemuan 1, tugas yang dikerjakan meliputi:

1. Menjalankan seluruh contoh program.
2. Membuat minimal dua modifikasi bermakna.
3. Menjelaskan lima bagian kode yang penting.
4. Menampilkan screenshot sebelum dan sesudah modifikasi.

---
## Program Contoh 1

===
# Screenshot Sebelum Modifikasi

<img width="680" height="198" alt="image" src="https://github.com/user-attachments/assets/309fe571-9210-4f9c-88aa-54b1db48bc10" />

---
# Screenshot Sebelum Modifikasi
<img width="643" height="286" alt="image" src="https://github.com/user-attachments/assets/c3aece42-5776-483c-9665-d05b0d455ca3" />





---

## Modifikasi Program 

Sesuai instruksi untuk membuat minimal dua modifikasi bermakna pada program[cite: 1]:

### Modifikasi pada Contoh 1
1. **Fitur Operasi Modulus (`%`)**: Menambahkan opsi sisa hasil bagi menggunakan fungsi `fmod($a, $b)` beserta validasi pencegahan pembagian/modulus dengan angka nol.
2. **Fitur Operasi Pemangkatan (`^`)**: Menambahkan opsi pemangkatan bilangan menggunakan fungsi `pow($a, $b)`.

---

##  3. Penjelasan Bagian Kode Penting

Berikut adalah penjelasan bagian kode paling krusial dari kedua program[cite: 1]:

### Pada Contoh 1 :
1. **`if ($_SERVER['REQUEST_METHOD'] === 'POST')`**: Memastikan kalkulasi aritmatika hanya dijalankan saat form dikirimkan melalui metode POST.
2. **`$a = (float) ($_POST['a'] ?? 0);`**: Mengambil nilai input dengan *null coalescing operator* (`??`) untuk mencegah error *undefined index*, lalu mengonversinya ke tipe `float`.
3. **`if ($b == 0)` (Validasi Aritmatika)**: Mencegah terjadinya *Division by Zero Error* pada operasi pembagian dan modulus dengan menampilkan pesan peringatan.

---
