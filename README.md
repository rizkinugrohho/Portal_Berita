### **💡 Tentang Aplikasi**

---

> Website portal berita adalah platform digital yang dirancang untuk memberikan informasi terkini dari berbagai bidang seperti politik, ekonomi, teknologi, olahraga, hiburan, hingga gaya hidup. Aplikasi ini dibuat menggunakan Laravel v8 dan minimal PHP v7.3^ jadi apabila pada saat proses instalasi atau penggunaan terdapat error atau bug kemungkinan karena versi dari PHP yang tidak support.

### **📝 To-Do List**

---
### User
-   [ ] Kategori Berita Lengkap.
-   [ ] Tags Berita.
-   [ ] Berita Populer.
-   [ ] Pencarian Cerdas.
-   [ ] Login Page.

### Admin
-   [ ] Manajemen Berita.
-   [ ] Manajemen Kategori.
-   [ ] Manajemen Tags.
-   [ ] Manajemen User.
-   [ ] Manajemen Role.

### **🕙 Instalasi & Kolaborasi**

---

1. Clone repository
    
    ```bash
    git clone 
    ```

2. Masuk ke folder repository kalian
    
    ```bash
    cd portal-berita
    ```

3. Install dependency
    
    ```bash
    composer install
    ```

4. Copy file `.env.example` menjadi `.env`
    
    ```bash
    cp .env.example .env
    ```

5. Generate key
    
    ```bash
    php artisan key:generate
    ```

6. Buat database baru (sesuaikan dengan nama database yang ada di file `.env`) melalui phpmyadmin atau terminal
    
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel-berita
    DB_USERNAME=root
    DB_PASSWORD=
    ```

7. Migrasi database
    
    ```bash
    php artisan migrate
    ```
    
8. Lakukan seeding data
    
    ```bash
    php artisan db:seed
    ```
9. Lakukan Storage:Link untuk menyimpan gambar

    ```bash
    php artisan storage:link
    ```


10. Jalankan server
    
    ```bash
    php artisan serve
    ```

11. Buka browser dan akses `http://localhost:8000`

11. Login Admin dengan akun

    ```bash
    Email : superadmin@gmail.com
    password :superadmin
    ```