FROM debian
MAINTAINER Olivier Choquet
RUN apt-get update && apt-get upgrade -y
RUN apt-get install apache2 -y
COPY siteHTML.conf /etc/apache2/sites-available/000-default.conf
COPY ./siteHTML /var/www/siteHTML
#RUN a2ensite siteHTML
#RUN echo "127.0.0.1	siteHTML" >> /etc/hosts
EXPOSE 80
CMD apachectl -D FOREGROUND
# apache fonctionne en background -> container exited
#CMD service apache2 restart
