# learn-laravel

### Buat Project
With latest version
```
laravel new your-project-name
```
Specific laravel version with composer
```
composer create-project --prefer-dist laravel/laravel your-project-name 5.8
```


### Buat Controller dengan CRUD function
```
# cara 1
php artisan make:controller YourController --resource

# cara 2
php artisan make:controller YourController -r
```
index(): untuk menampilkan semua data / halaman awal    
create(): untuk menampilkan form create   
store(): untuk action post menyimpan data dari form create  
show(): untuk melihat satu data  
edit(): menampilkan form edit  
update(): proses untuk update data  
destroy(): proses untuk hapus data  

### Buat Controller dengan CRUD function sekaligus Model
```
php artisan make:controller YourController -r -m YourModel
```
