<!--
@Author: rogue-dev-studio
@Date: 2026-08-14 17:20:00
@Last Modified by: rogue-dev-studio
@Last Modified time: 2026-08-14 17:20:00
-->

# Laravel PMS (`laravel-pms`)

Demo **template UI** sistem manajemen proyek (Laravel 11). Bukan produk SaaS, bukan framework Laravel itu sendiri, dan bukan aplikasi produksi.

Halaman proyek, tugas, karyawan, dan kalender merender Blade. Belum ada model domain atau API bisnis di luar skeleton Laravel.

**Demo:** [demo-pms.netlify.app](https://demo-pms.netlify.app/)  
**Portfolio:** [rogue-dev-studio.github.io](https://rogue-dev-studio.github.io/)

## Stack

- PHP 8.2+, Laravel 11
- SQLite di `.env.example`
- UI dashboard (Blade)

## Jalan lokal

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
```

Jangan commit `.env`. `vendor/` dan `node_modules/` tidak ikut git.

## Bukan

- Bukan multi-tenant / billing
- Bukan pengganti Jira
- Login di UI template belum auth Laravel penuh
