# Troubleshooting/ FAQ Guide

## Fix Permission
run bash on php-fpm container
```bash
chown :www-data -R /var/www/html
cd /var/www/html
find . -type d -exec chmod 775 '{}' ';'
find . -type f -exec chmod 664 '{}' ';'
find . -type d -exec chmod u+s '{}' ';'
find . -type d -exec chmod g+s '{}' ';'
```
## Download da web.archive.org
```bash
docker pull hartator/wayback-machine-downloader
docker run --rm -it -v $PWD:/websites hartator/wayback-machine-downloader http://www.prolocosansalvatoretelesino.it -t 20200224123518
```
### Inspired php template
https://codeshack.io/lightweight-template-engine-php/
https://www.unplitrentino.it/