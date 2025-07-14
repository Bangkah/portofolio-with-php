# **Absensi App - by Muhammad Dhiyaul Atha**

Aplikasi Absensi berbasis Laravel 10 dengan fitur absensi masuk dan pulang menggunakan **QRCode** atau **Input Manual**, serta manajemen user dan kehadiran yang lengkap.

---

## ✨ Fitur Utama

- ✅ Manajemen Jabatan/Posisi (CRUD)
- ✅ Manajemen User: Admin, Operator, Pegawai
- ✅ Manajemen Hari Libur
- ✅ Multi Absensi: Masuk dan Pulang (QR Code / Manual)
- ✅ Lihat Riwayat Absensi (30 Hari Terakhir)
- ✅ Permintaan & Persetujuan Izin
- ✅ Laporan Karyawan Tidak Hadir
- ✅ Export Laporan ke Excel & CSV
- ✅ Role Based Access (RBAC)
- ✅ Livewire PowerGrid untuk DataTable

---

## 🛠 Cara Install (Linux, Windows, Mac)

Pastikan sudah terinstall:

- PHP >= 8.1
- Composer
- Git
- MySQL / MariaDB

### Langkah Install:

```bash
# Clone repository
git clone https://github.com/Bangkah/ABSENSI-KARYAWAN.git
cd ABSENSI-KARYAWAN

# Install dependency
composer install

# Copy konfigurasi environment
cp .env.example .env

# Ubah isi .env sesuai konfigurasi database kamu
# DB_DATABASE=absensi_karyawan
# DB_USERNAME=root
# DB_PASSWORD=

# Generate app key
php artisan key:generate

# Migrasi & seed database
php artisan migrate --seed

# Jalankan server lokal
php artisan serve

##kses:

Buka di browser: http://localhost:8000

📁 Struktur Folder

    app/Http/Controllers/ — Logika kontrol

    resources/views/ — Tampilan Blade Laravel

    routes/web.php — Routing aplikasi

    public/js/home/qrcode.js — QR Code Scanner

    database/seeders/ — Data akun dan jabatan awal

👨‍💻 Developer
Muhammad Dhiyaul Atha
GitHub: https://github.com/Bangkah