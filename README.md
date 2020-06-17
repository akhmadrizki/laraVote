# LaraVote
Repository for Laravel E-Vote

### Jika Ingin Mengclone Ikuti Langkah-Langkah Berikut
1. Clone Repository ini
```sh
$ git clone https://github.com/akhmadrizki/laraVote.git
```
2. Copy file `.env.example` menjadi `.env`
3. Install seluruh package agar bisa dijalankan
```sh
$ composer install
```
4. Setup database. Lalu isi konfigurasinya di `.env` sesuai pengaturan database. Contoh:
```sh
...
DB_DATABASE=db_laravote
DB_USERNAME=root
DB_PASSWORD=
...
```
5. Jalankan command berikut:
```sh
$ php artisan key:generate
$ composer dump-autoload
$ php artisan migrate:fresh --seed
$ php artisan storage:link
```
Password Admin

```sh
Username : admin@gmail.com
Password : rahasia
```
