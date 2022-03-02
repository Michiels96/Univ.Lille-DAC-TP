FROM mysql
MAINTAINER Pierre Michiels
ENV MYSQL_DATABASE=bdbn
#ENV MYSQL_TCP_PORT=8002
ENV MYSQL_ROOT_PASSWORD=ipl
COPY bdbn.sql /docker-entrypoint-initdb.d
