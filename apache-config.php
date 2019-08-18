<VirtualHost *:80>
  ServerAdmin me@mydomain.com
  DocumentRoot /var/www/html

  <Directory /var/www/html/>
      Options Indexes FollowSymLinks MultiViews
      AllowOverride All
      Order deny,allow
      Allow from all
  </Directory>

  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>