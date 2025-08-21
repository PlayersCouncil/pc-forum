FROM mariadb:10.11 AS MariaDB

#Insert other db setup here as needed, such as something like the following:

#COPY ./database_script.sql /docker-entrypoint-initdb.d
#COPY ./initial_user_setup.sql /docker-entrypoint-initdb.d
