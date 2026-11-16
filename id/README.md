# Kuasai Git dalam 30 Hari

Penulis: Will Huang (Will 保哥)

![Git](figures/README/01.png)

## Pendahuluan

Dalam bidang pengembangan perangkat lunak, kontrol versi kode sumber adalah hal yang sangat penting. Berbeda dengan sistem kontrol versi terpusat seperti Subversion atau TFVC (Team Foundation Version Control), Git adalah sistem kontrol versi terdistribusi (DVCS; Distributed Version Control System) yang membawa banyak keunggulan pada kontrol versi dan mengatasi kekurangan kontrol versi terpusat tradisional, seperti dukungan untuk operasi lokal, pencadangan yang mudah, branching dan merging yang kuat dan fleksibel, dan banyak lagi. Namun, karena kontrol versi Git sangat berbeda dari alat kontrol versi terpusat tradisional, baik dalam konsep kontrol versi maupun penggunaan alatnya, hal ini menimbulkan kurva pembelajaran yang cukup tinggi. Dalam 30 hari ke depan, saya berharap dapat membantu Anda memahami esensi kontrol versi Git secara menyeluruh dan berbagi pengalaman belajar saya, beserta masalah dan solusi yang kami temui selama perusahaan kami beralih dari Subversion ke Git.

> **Catatan Terjemahan:** Versi Bahasa Indonesia ini diterjemahkan dari edisi Bahasa Inggris dari buku peraih penghargaan ini. Versi ini mempertahankan konsep inti dan ketepatan teknis dari edisi asli Bahasa Mandarin Tradisional, sekaligus menyesuaikan sebagian konten dengan praktik Git modern dan pembaca internasional. Beberapa bab telah diperkaya dengan contoh tambahan dan praktik terbaik terkini.

## Perjalanan Dimulai Sekarang

* [Hari 01: Memahami Kontrol Versi Git](01.md)
* [Hari 02: Tiga Alat Git Penting untuk Platform Windows](02.md)
* [Hari 03: Membuat Repositori](03.md)
* [Hari 04: Perintah Kontrol Versi Git yang Umum Digunakan](04.md)
* [Hari 05: Memahami Hubungan antara Repositori, Direktori Kerja, Objek, dan Indeks](05.md)
* [Hari 06: Mengurai Struktur Data Git - Struktur Objek](06.md)
* [Hari 07: Mengurai Struktur Data Git - Struktur Indeks](07.md)
* [Hari 08: Konsep Dasar dan Penggunaan Branch](08.md)
* [Hari 09: Membandingkan Perbedaan File dan Versi](09.md)
* [Hari 10: Memahami Nama Absolut Objek Git](10.md)
* [Hari 11: Memahami Referensi Objek Git dan Referensi Simbolik](11.md)
* [Hari 12: Memahami Nama Relatif Objek Git](12.md)
* [Hari 13: Menyimpan Sementara Perubahan di Direktori Kerja dan Indeks (Stash)](13.md)
* [Hari 14: Opsi Konfigurasi Git for Windows](14.md)
* [Hari 15: Tag - Menandai Peristiwa Penting dalam Kontrol Versi](15.md)
* [Hari 16: Menggunakan git reflog untuk Melacak Riwayat Perubahan](16.md)
* [Hari 17: Konsep Dasar dan Penggunaan Merge](17.md)
* [Hari 18: Memperbaiki Riwayat Versi yang Sudah Di-commit Bagian 1 (reset & amend)](18.md)
* [Hari 19: Mengatur Daftar Abaikan .gitignore](19.md)
* [Hari 20: Memperbaiki Riwayat Versi yang Sudah Di-commit Bagian 2 (revert)](20.md)
* [Hari 21: Memperbaiki Riwayat Versi yang Sudah Di-commit Bagian 3 (cherry-pick)](21.md)
* [Hari 22: Memperbaiki Riwayat Versi yang Sudah Di-commit Bagian 4 (rebase)](22.md)
* [Hari 23: Memperbaiki Riwayat Versi yang Sudah Di-commit Bagian 5 (rebase 2)](23.md)
* [Hari 24: Menggunakan Repositori Remote GitHub - Memulai](24.md)
* [Hari 25: Menggunakan Repositori Remote GitHub - Konsep](25.md)
* [Hari 26: Banyak Orang Bekerja di Repositori Remote yang Sama](26.md)
* [Hari 27: Kontrol Versi melalui Branch di Repositori Remote yang Sama](27.md)
* [Hari 28: Memahami Alur Kerja Fork dan Pull Request di GitHub](28.md)
* [Hari 29: Cara Mengimpor Proyek Subversion ke Repositori Git](29.md)
* [Hari 30: Berbagi Tips Operasi Git yang Berguna dari Pekerjaan](30.md)

## Penghargaan

* [Pengumuman Daftar Pemenang Kontes iT Ironman ke-6 Tahun 2013!](https://ithelp.ithome.com.tw/articles/10142953)
*
*

## Hubungi Saya

* Blog: [The Will Will Web](https://blog.miniasp.com/)
* Halaman Facebook: [Will 保哥的技術交流中心](https://www.facebook.com/will.fans)
* Twitter: [Will 保哥 (@Will_Huang)](https://twitter.com/Will_Huang)
* Threads: [Will 保哥](https://www.threads.com/@willh_tw)
