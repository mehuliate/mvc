# mvc

PHP in Enginx

server {
    listen 80;
    server_name mvc.test *.mvc.test;
    root "X:/laragon/www/mvc/public/";
    
    index index.html index.htm index.php;
 
    location / {
        # try_files $uri $uri/ /index.php$is_args$args;
		try_files $uri $uri/ /index.php?url=$uri&$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass php_upstream;		
        #fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }
	
	
    charset utf-8;
	
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
    location ~ /\.ht {
        deny all;
    }
}

# This file is auto-generated.
# If you want Laragon to respect your changes, just remove the [auto.] prefix
# If you want to use SSL, enable it by going to Menu > Nginx > SSL > Enabled



if need apache please edit core.php getUrl();
