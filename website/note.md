# Fix Permission
run bash on php-fpm container
```bash
chown :www-data -R /var/www/html
cd /var/www/html
find . -type d -exec chmod 775 '{}' ';'
find . -type f -exec chmod 664 '{}' ';'
find . -type d -exec chmod u+s '{}' ';'
find . -type d -exec chmod g+s '{}' ';'
```

### Inspired
https://codeshack.io/lightweight-template-engine-php/