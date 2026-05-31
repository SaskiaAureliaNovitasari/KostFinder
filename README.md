# KostFinder

## Deskripsi Project

KostFinder adalah aplikasi pencarian dan prediksi harga kost mahasiswa berbasis Machine Learning.
Aplikasi ini membantu pengguna menemukan rekomendasi kost berdasarkan lokasi, fasilitas, dan harga.

Project ini menggunakan:

* Laravel (Backend/API)
* Flutter (Mobile App)
* Flask (Machine Learning API)
* MySQL Database

---

## Fitur Utama

* Login dan Register
* Pencarian kost
* Prediksi harga kost menggunakan Machine Learning
* Rekomendasi kost
* Detail informasi kost
* Dashboard admin

---

## Tech Stack

### Frontend

* Flutter

### Backend

* Laravel

### Machine Learning

* Python Flask
* Scikit-learn

### Database

* MySQL

---

# Cara Menjalankan Project

## 1. Clone Repository

```bash
git clone https://github.com/SaskiaAureliaNovitasari/KostFinder.git
```

---

## 2. Setup Backend Laravel

Masuk ke folder backend:

```bash
cd backend
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate key:

```bash
php artisan key:generate
```

Atur database pada file `.env`

Jalankan migrasi:

```bash
php artisan migrate
```

Jalankan server:

```bash
php artisan serve
```

---

## 3. Setup Database

Buat database MySQL dengan nama:

```sql
kostfinder
```

Import file database jika tersedia.

---

## 4. Setup Machine Learning Flask

Masuk ke folder ML:

```bash
cd ml
```

Install dependency:

```bash
pip install -r requirements.txt
```

Jalankan Flask:

```bash
python app.py
```

---

## 5. Setup Flutter

Masuk ke folder Flutter:

```bash
cd flutter
```

Install dependency:

```bash
flutter pub get
```

Jalankan aplikasi:

```bash
flutter run
```

---

# Struktur Project

```bash
KostFinder/
│
├── backend-laravel/
├── flutter-app/
├── machine-learning/
└── database/
```

---

# Tim Pengembang

* Saskia → Machine Learning & Dataset
* Ayub → Frontend & Backend
* Galuh → Flutter Frontend
* Tyaa → Landing Page & Flowchart
* Raka → Flutter Admin & Video

---

# Lisensi

Project ini menggunakan lisensi MIT License.
