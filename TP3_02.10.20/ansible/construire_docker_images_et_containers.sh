#!/bin/bash
docker build -t imgsitephp sitePHPDocker/contsitephp/
docker build -t imgsitephpdb sitePHPDocker/contdbphp/
#utiliser phpmyadmin pour gérer la db mysql
#docker pull phpmyadmin/phpmyadmin:latest
docker run -d -p 3306:3306 --name contsitephpdb --network=sitephpnet imgsitephpdb
#docker run -d --name contmysql mysql
#docker run -d -p 8002:80 --name contphpmyadmin --network=sitephpnet --link contsitephpdb:db phpmyadmin/phpmyadmin
docker run -d -p 8001:80 --name contsitephp --network=sitephpnet imgsitephp
