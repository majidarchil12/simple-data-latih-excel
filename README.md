# Basic Import Usage of maatwebsite/excel

This repo is a simple Laravel usage of maatwebsite/excel package

## Tutorial

clone this repository or download as zip ex : 

```bash
git clone https://github.com/majidarchil12/simple-data-latih-excel.git
```

## Then

```bash
cd simple-data-latih-excel
```

```bash
composer install
```

create database with name ('testing_excel')

```php
php artisan key:generate
```

```php
php artisan migrate
```

```php
php artisan serve
```

open browser then go to [http://127.0.0.1:8000/excel](http://127.0.0.1:8000/excel)

upload file [data-latih.xlsx](https://github.com/majidarchil12/simple-data-latih-excel/blob/master/public/file-excel/data-latih.xlsx) from public/file-excel

submit, then see the result
