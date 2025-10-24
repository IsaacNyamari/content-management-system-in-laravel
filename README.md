# 🧩 Content Management System in Laravel - Development stage.(Welcome for contributions)

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-^8.2-blue?style=for-the-badge&logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?style=for-the-badge&logo=bootstrap)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)
![Contributions Welcome](https://img.shields.io/badge/Contributions-Welcome-brightgreen?style=for-the-badge)

---

## 📝 Overview

A modern **Content Management System** built with **Laravel** featuring **user authentication**, **role-based access control**, and a **responsive admin dashboard**.  
Manage posts, pages, media, and categories effortlessly with a clean **Bootstrap-powered frontend**.  
Includes **SEO-friendly URLs**, **RESTful APIs**, and a modular structure for scalability.

---

## 🚀 Features

- 🔐 User Authentication (Login, Register, Reset Password)
- 🧠 Role-Based Access Control (Admin, Editor, User)
- 📝 Manage Posts, Pages & Categories
- 🖼️ Media Upload & File Management
- 🌍 SEO-Friendly URLs & Metadata
- 📱 Responsive Bootstrap 5 UI
- 🔗 RESTful API Support
- 💾 MySQL / MariaDB Support

---

## 🛠️ Tech Stack

| Component | Technology |
|------------|-------------|
| **Framework** | Laravel 11 |
| **Language** | PHP 8.2+ |
| **Frontend** | Bootstrap 5, Blade Templates |
| **Database** | MySQL / MariaDB |
| **Authentication** | Laravel Breeze / Sanctum |
| **Version Control** | Git & GitHub |
| **API** | RESTful Endpoints |

---

## ⚙️ Installation Guide

Run the following commands in order:

```bash
# 1️⃣ Clone the Repository
git clone https://github.com/IsaacNyamari/content-management-system-in-laravel.git

# 2️⃣ Navigate into the Project Directory
cd Content-Management-System-in-laravel

# 3️⃣ Install Dependencies
composer install
npm install

# 4️⃣ Compile Frontend Assets
npm run dev
# Or for production
npm run build

# 5️⃣ Copy the Environment File
cp .env.example .env

# 6️⃣ Generate Application Key
php artisan key:generate

# 7️⃣ Configure Database in .env
# Example:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_database_name
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# 8️⃣ Run Migrations and Seeders
php artisan migrate --seed

# 9️⃣ Link Storage to Public Directory
php artisan storage:link

# 🔟 Start the Development Server
php artisan serve
# Visit your app at http://127.0.0.1:8000
# Visit your app at http://127.0.0.1:8000
