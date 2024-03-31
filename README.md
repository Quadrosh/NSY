NSY
===============================
Local environment
PHP 7.1  
Apache port: 80  
MySQL  port: 3306  
===============================
### dockerize
--- apache
/etc/apache2
--- app
/var/www/html

### TODO
права на runtime и все такое 
бек и фронт на разных портах

### cleanup
docker image rm  -f  yapp_yapp 
docker image rm  -f  yapp_db 


### debug
docker exec -it nsy-yapp-1 bash
mysql -u tb303 -p303 --database nsy -h db


### linux аналог host.docker.internal (проверить)
If you're running with --net=host, localhost should work fine. 
If you're using default networking, use the static IP address 172.17.0.1. 
