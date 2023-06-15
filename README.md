# Proloco San Salvatore Telesino - webarchive
Restore website della proloco di San Salvatore Telesino da web.archive.org

# Start
```bash
docker-compose up
```
## Download da web.archive.org
```bash
docker pull hartator/wayback-machine-downloader
docker run --rm -it -v $PWD:/websites hartator/wayback-machine-downloader http://www.prolocosansalvatoretelesino.it -t 20200224123518
```