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
  
  
  
### XAMPP Settings
**1. Apache2 Config**
Insert this at the bottom of xampp/apache/conf/extra/httpd-vhosts.conf

```
<VirtualHost *:80>
  ServerName habitis.com
  DocumentRoot "<CODE PATH>/public"

  CustomLog <CODE PATH>/habitis-access.log combined
  ErrorLog <CODE PATH>/habitis-error.log

  <Directory "<CODE PATH>/public">
      Options FollowSymLinks
      Require all granted
      AllowOverride All  
  </Directory>
</VirtualHost> (edited)
```

**2. DNS Config**

```
Edit /Windows/system32/drivers/etc/hosts
Insert at the bottom
127.0.0.1 habitis.com
```

**3. Restart**

```
Restart XAMPP => Environment is up
```

**4. Install Composer**

https://getcomposer.org/Composer-Setup.exe 

**5. Open Terminal in the source path**

```
Run ｀composer install｀
```

**6. Install NPM**

https://nodejs.org/en/download/ 

**7. Open Terminal in the source path**

```
Run ｀npm install｀ 
```
