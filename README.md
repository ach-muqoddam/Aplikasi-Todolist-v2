# Aplikasi-Todolist

Project Studi Kasus PHP OOP: Aplikasi Todolist.

## Agenda
- Mengubah Aplikasi TodoList PHP Dasar menjadi PHP OOP

## Daftar Isi

- [Clean-Architecture](#clean-architecture)

### Clean-Architecture

Apa itu Konsep Clean Architecture?

- Konsep Clean Architecture adalah saat pembuatan Aplikasi itu harus dibagi per layer
- Ada beberapa layer yaitu:
- Layer Enterprise Business Rules sebagai referentasi dari tabel. Jika di implementasikan di PHP OOP maka dibuatkan sebuah class, dan sebuah class itu disebut entities
- Layer Application Business Rules sebagai logic dari Aplikasi-nya atau kode program yang akan mengelola Layer Enterprise Business Rules
- Layer Interface Adapters sebagai layer tampilan sesuai kebutuhan Aplikasi-nya, sebagai contoh Aplikasi TODOLIST v2 ini adalah layer tampilan berbasis Terminal
- Layer Frameworks & Drivers hampir sama tapi sedikit berbeda dengan Layer Interface Adapters, bedanya sudah ada Tools Framework dan Drivers. sebagai contoh Aplikasi TODOLIST v2 ini masih belum menggunakan Layer Frameworks dan Drivers
- 3 Layer yang digunakan Aplikasi TODOLIST v2 yaitu Layer Enterprise Business Rules, Layer Application Business Rules, Layer Interface Adapters
- Karya dari Robert Cecil Martin (Uncle Bob)

