# How to get start

#### Install vendors

`composer install`

#### Install NPM Dependencies

`npm install`

#### Build Assets

`npm run watch` - Watch changes and rebuilt

`npm run dev` - Built Asset

`npm run prod` - Build t Asset in Production - Minify CSS, JS

#### Run website

##### Via Apache2

 - Point `DocumentRoot` to **public** directory
 - Allow **.htaccess** `AllowOverride All`
 
##### Via Terminal

 - Run `php artisan serve`  to start web using PHP Built-in server
  