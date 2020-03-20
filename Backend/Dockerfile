FROM mariadb:10.5.1

ENV MYSQL_DATABASE physics
ENV MYSQL_ROOT_PASSWORD example

EXPOSE 3306

COPY ./sql-scripts/*.sql /docker-entrypoint-initdb.d/