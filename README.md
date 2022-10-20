<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About the Project


## Instalasi
1. Clone this repository
   ```
    git clone https://github.com/Nakakari/myreading_list.git
   ```
2. Open the folder
    ```
    cd myreading_list
    ```
3. Copy file .env.example ke .env
    ```
     cp .env.example .env
    ```
4. Install all the package 
    ```
     composer install
    ```
    If there's an error when installing composer, use this alternative method:
    ```
    composer install --ignore-platform-reqs 
    ```
5. Install NPM
    ```
    npm install
    ```
5. Open the database and then insert database from folder __DATABASE, ex: 'myreading_list'.
6. Configure the database in .env file
    Open file .env pada IDE Anda, kemudian cek kodingan berikut:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    Ganti menjadi:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=myreading_list
    DB_USERNAME=root
    DB_PASSWORD=
    ```
7. Generate app key
    ```
     php artisan key:generate
    ```
8. Generate migration
    ```
     php artisan migrate
    ```
9. Buka aplikasi melalui browser!
    ```
    php artisan serve
    ```