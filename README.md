# artisan-laravel-view
Package for make view 
## Instalattion Step
Require the package by the following command at below : 
```bash
$ composer require dzaki236/artisan-laravel-view
```
## Dump-autoloading
Autoloading all updates package by the following command : 
```bash
$ composer dump-autoload
```
## Add Provider `(deprecate for version 8+)`
Surpriced to version 8+ you dont need add provider :b
## Run Command Using
```bash
$ php artisan make:view path/of/save the file
```

# Example
You want to create folder and views on admin folder or module? just create : 
```bash 
$ php artisan make:view admin/room/index
```
### Explanation Of Example! : 
`Admin is folder.` <br>
`Room is folder.` <br>
`Index is file (blade templating files).` <br>

File Saving on `resource/views/` folder on your laravel project
## License
The MIT License (MIT). Please see License File for more information, version of 1.0.1

``If had a problem or issue on older version,Please use of the latest version``
