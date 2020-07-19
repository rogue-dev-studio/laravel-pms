# Requirements — Project Management System

## Tujuan
Memberi tim gambaran kerja proyek: tugas, progress, dan kolaborasi dalam satu sistem web yang bisa langsung dicoba.

## Aktor
- Project manager / lead
- Anggota tim

## Kebutuhan fungsional (FR)
- FR-01 Lihat daftar proyek / workspace
- FR-02 Kelola tugas dan status progress
- FR-03 Kolaborasi anggota pada tugas proyek
- FR-04 Dashboard ringkas progres kerja
- FR-05 Demo publik dapat dibuka tanpa instalasi lokal

## Kebutuhan non-fungsional (NFR)
- NFR-01 Demo online stabil (Netlify / hosting setara)
- NFR-02 UI jelas untuk non-teknis
- NFR-03 Berjalan di browser modern

## Batasan & asumsi
- Template/demo portfolio (bukan SaaS multi-tenant penuh)
- Integrasi CI/CD lanjutan dan billing di luar scope demo
- Kustomisasi workflow mengikuti kebutuhan klien

## Stack
- Laravel, web UI modern, demo di Netlify
