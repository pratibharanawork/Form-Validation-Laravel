<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

Form-Validation-Laravel
Create a contact form with bellow fields: Name (required) Email (required) Subject (required) Message (required) Date (default to today) Time (3 inputs - hour, minute, am/pm dropdown) File upload (optional) It should be created by form component It should have proper validation It should be protected from CSRF attacks It should be validated The Date and Time should be converted into a single DateTime object after proper validation Any validation error should be displayed on frontend Optional task: The form should be bound to a database model and all the values should be stored in the database.


Installation step:
1. take pull
2. setup env and db 
3. run php artisan storage link
4.add  FILESYSTEM_DRIVER=public this code in .env
5.php artisan migrate


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
