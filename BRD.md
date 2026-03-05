# BUSINESS REQUIREMENTS DOCUMENT (BRD)

# Website Company Profile PT. CHARLYN JAYA

---

# 1. INFORMASI UMUM

## 1.1 Nama Project

Website Company Profile PT. Charlyn Jaya

## 1.2 Tujuan Project

Membangun website company profile resmi PT. Charlyn Jaya yang berfungsi untuk:

- Menampilkan profil perusahaan secara profesional
- Menampilkan jasa dan pengalaman project perusahaan
- Menampilkan struktur organisasi
- Menampilkan sertifikat dan penghargaan perusahaan
- Memudahkan calon klien menghubungi perusahaan
- Menjadi media promosi dan branding perusahaan

Website akan dibuat menggunakan Laravel 12 dengan arsitektur component dan desain responsif.

---

# 2. PROFIL PERUSAHAAN

## 2.1 Tentang Perusahaan

PT. Charlyn Jaya berdiri pada tahun 2005 dan bergerak di bidang konstruksi. Pada tahun 2015, perusahaan memperluas bidang usaha ke outsourcing tenaga keamanan (Security) dan kemudian berkembang ke outsourcing tenaga kebersihan (Cleaning Service).

Perusahaan telah menjalin kerja sama dengan berbagai instansi di Provinsi Maluku dan terus berkembang menjadi mitra terpercaya dalam penyediaan tenaga profesional.

---

# 3. RUANG LINGKUP SISTEM

Website terdiri dari:

## Halaman Publik:

1. Home
2. Tentang Kami
3. Struktur Organisasi
4. Project dan Jasa

## Component Global:

1. Navbar
2. Footer

---

# 4. STRUKTUR HALAMAN

---

# 4.1 Navbar Component

## Deskripsi

Navbar digunakan sebagai navigasi utama website.

## Elemen

| Elemen           | Posisi | Deskripsi                                                 |
| ---------------- | ------ | --------------------------------------------------------- |
| Logo             | Kiri   | Logo PT. Charlyn Jaya                                     |
| Menu Navigasi    | Tengah | Home, Tentang Kami, Struktur Organisasi, Project dan Jasa |
| Button Penawaran | Kanan  | Tombol untuk menghubungi perusahaan                       |

## Behavior

- Sticky navbar
- Responsive
- Mobile support (hamburger menu)

---

# 4.2 Footer Component

## Elemen

| Elemen          | Deskripsi               |
| --------------- | ----------------------- |
| Logo            | Logo perusahaan         |
| Nama perusahaan | PT. Charlyn Jaya        |
| Alamat          | Alamat perusahaan       |
| Navigation      | Link halaman            |
| Google Maps     | Lokasi perusahaan       |
| Kontak          | Email dan nomor telepon |

---

# 5. HALAMAN HOME

## Tujuan

Sebagai halaman utama untuk memperkenalkan perusahaan.

## Section

### 5.1 Hero Section

Menampilkan:

- Judul perusahaan
- Tagline perusahaan
- Background image
- CTA Button

---

### 5.2 Client Section

Menampilkan:

- Logo client
- List client (hardcode)

---

### 5.3 Deskripsi Section

Menampilkan ringkasan perusahaan:

- Tahun berdiri
- Bidang usaha
- Pengalaman

---

### 5.4 Product dan Jasa Section

Menampilkan:

- Security Service
- Cleaning Service
- Outsourcing Service

Dalam bentuk card.

---

### 5.5 FAQ Section

Menampilkan pertanyaan umum:

- Layanan apa saja
- Area layanan
- Cara kerja sama

---

# 6. HALAMAN TENTANG KAMI

## Section

### 6.1 Hero Section

Banner halaman Tentang Kami

---

### 6.2 Tentang Kami Section

Menampilkan sejarah perusahaan sesuai company profile PDF.

---

### 6.3 Visi dan Misi Section

## VISI

Menjadi mitra terpercaya dalam penyediaan layanan keamanan dan kebersihan bagi instansi.

## MISI

- Menyediakan layanan terintegrasi
- Tenaga profesional dan terlatih
- Pendekatan berbasis kebutuhan
- Kepuasan klien
- Tanggung jawab sosial

---

### 6.4 Filosofi Section

Menampilkan filosofi perusahaan:

Menjadi mitra terpercaya dalam menciptakan lingkungan aman dan bersih.

---

### 6.5 Sertifikat Section

Menampilkan:

- Card Sertifikat
- Image Sertifikat
- Nama Sertifikat

Relationship: One-to-many

---

# 7. HALAMAN STRUKTUR ORGANISASI

## Tujuan

Menampilkan struktur organisasi perusahaan.

## Format

Card berisi:

- Foto
- Nama
- Jabatan

Contoh:

- Direktur Utama
- Direktur
- HRD
- HSSE
- Administrasi
- Logistik
- Pengawas Lapangan

---

# 8. HALAMAN PROJECT DAN JASA

## Section

### 8.1 Description

Deskripsi pengalaman perusahaan.

---

### 8.2 Jasa dan Project

Menampilkan jenis layanan:

- Security Service
- Cleaning Service
- Outsourcing

---

### 8.3 Table Pengalaman Project

Format table:

| No  | Instansi & Logo | Uraian Pekerjaan | Tahun | Status |
| --- | --------------- | ---------------- | ----- | ------ |

Status:

- Selesai
- Berjalan

Data diambil dari company profile PDF.

---

# 9. KEBUTUHAN FUNGSIONAL

| ID    | Requirement                                                                                                              |
| ----- | ------------------------------------------------------------------------------------------------------------------------ |
| FR-01 | User dapat melihat halaman home                                                                                          |
| FR-02 | User dapat melihat tentang kami                                                                                          |
| FR-03 | User dapat melihat struktur organisasi                                                                                   |
| FR-04 | User dapat melihat project dan jasa                                                                                      |
| FR-05 | User dapat melihat sertifikat                                                                                            |
| FR-06 | User dapat melihat pengalaman project                                                                                    |
| FR-07 | Website responsive                                                                                                       |
| FR-08 | Tersedia halaman login dan register frontend menggunakan Tailwind (bukan Filament) |
| FR-09 | Login panel Filament tetap tersedia di path `/admin/login` |
| FR-10 | Akses panel Filament (`/admin/*`) hanya untuk role `super-admin` |
| FR-11 | Role `customer` tidak dapat mengakses panel Filament dan diarahkan ke halaman customer (Tailwind) |
| FR-12 | Setelah login dari frontend, role `super-admin` diarahkan ke dashboard Filament (`/admin`) |
| FR-13 | Setelah login dari frontend, role `customer` diarahkan ke halaman buat penawaran berbasis Tailwind |
| FR-14 | Form penawaran (Tailwind) memiliki input yang sama seperti `app/Filament/Resources/Penawarans/Schemas/PenawaranForm.php` |
| FR-15 | Tersedia halaman monitoring penawaran untuk customer berbasis Tailwind dalam bentuk table list |
| FR-16 | Status penawaran pada halaman monitoring customer bersifat read-only (diubah oleh admin di Filament) |

---

## 9.1 Detail Autentikasi dan Otorisasi

### Role dan Hak Akses

| Role        | Akses Utama                                            |
| ----------- | ------------------------------------------------------ |
| super-admin | Panel Filament (`/admin/*`) dan seluruh fitur backend  |
| customer    | Halaman frontend Tailwind (buat penawaran + monitoring) |

### Rules Akses

- Filament hanya berjalan pada prefix `/admin`.
- User `customer` yang mencoba akses `/admin/*` harus ditolak (403) atau diarahkan ke halaman customer.
- Halaman login/register frontend tetap terpisah dari login Filament.

### Alur Redirect Login

- Login frontend:
- `super-admin` -> `/admin`
- `customer` -> halaman penawaran customer (Tailwind)
- Login Filament (`/admin/login`):
- hanya `super-admin` yang boleh lanjut ke dashboard Filament

---

## 9.2 Detail Halaman Customer (Tailwind)

### Halaman Buat Penawaran

Input form mengikuti schema pada `app/Filament/Resources/Penawarans/Schemas/PenawaranForm.php`:

- `layanan_id`
- `nama_perusahaan`
- `alamat`
- `tanggal_permintaan`
- `deskripsi`
- `file`
- `catatan`

Catatan role:

- Field `status` dan `active` tidak ditampilkan untuk `customer`.
- `status` default `pending` saat submit dari customer.

### Halaman Monitoring Penawaran

Tipe halaman:

- Table list berbasis Tailwind untuk menampilkan daftar penawaran milik customer yang login.

Kolom minimum:

- No / ID
- Layanan
- Nama Perusahaan
- Tanggal Permintaan
- Status (`pending`, `approve`, `reject`)
- Updated At

Behavior:

- Customer hanya dapat melihat data miliknya sendiri.
- Customer tidak dapat mengubah status dari halaman ini.
- Perubahan status dilakukan oleh `super-admin` melalui Filament.

---

# 10. KEBUTUHAN NON FUNGSIONAL

| ID     | Requirement                  |
| ------ | ---------------------------- |
| NFR-01 | Responsive design            |
| NFR-02 | Fast loading                 |
| NFR-03 | SEO friendly                 |
| NFR-04 | Component based architecture |
| NFR-05 | Clean code structure         |

---

# 11. KEBUTUHAN TEKNIS

## Technology Stack

| Technology  | Version |
| ----------- | ------- |
| Laravel     | 12      |
| PHP         | 8.2+    |
| TailwindCSS | Latest  |

---

## Architecture

Component-based architecture:

resources/views/components/

components:

- navbar
- footer
- hero
- faq
- services
- certificates
- organization-card
- project-table

---

# 12. STRUKTUR FOLDER

resources/views/

components/
layout/
pages/

pages/

home.blade.php
about.blade.php
organization.blade.php
project.blade.php

---

# 13. DATA SOURCE

Saat ini menggunakan:

Hardcode Data

Namun sudah disiapkan untuk:

Future Database Integration

---

# 14. DESIGN REQUIREMENTS

## Color Palette

Primary: Navy Blue
Secondary: Yellow

## Theme

Professional
Corporate
Security & Outsourcing Industry

---

# 15. RESPONSIVE REQUIREMENTS

Breakpoint:

Mobile
Tablet
Desktop

---

# 16. FUTURE DEVELOPMENT

Future Features:

- Admin Panel
- CMS Management
- Database integration
- Contact Form
- Project Management

---

# 17. SUCCESS CRITERIA

Website dianggap berhasil jika:

- Semua halaman dapat diakses
- Responsive
- Clean UI
- Professional look
- Sesuai company profile

---

# END OF DOCUMENT

# NOTES

- Buat data dummy untuk project dan jasa
- Buat data dummy untuk sertifikat
- Buat data dummy untuk struktur organisasi
- Buat data dummy untuk pengalaman project
- Buat data dummy untuk client
- Buat data dummy untuk faq
