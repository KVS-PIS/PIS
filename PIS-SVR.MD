PIS(Personal Information System):pissvr

PIS Terminal: 
pisusr/PisUsr#321
PIS Database:
root /PisDbPwd#321
pis  /PisWeb#321


CREATE DATABASE pis_active_db CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE USER 'pis'@'localhost' IDENTIFIED BY 'PisWeb#321';

GRANT ALL ON pis_active_db.* TO 'pis'@'localhost' IDENTIFIED BY 'PisWeb#321';
GRANT ALL ON pis_active_db.* TO 'pis'@'10.246.26.142' IDENTIFIED BY 'PisWeb#321';
GRANT ALL ON pis_active_db.* TO 'pis'@'10.26.126.194' IDENTIFIED BY 'PisWeb#321';

GRANT ALL ON pis_active_db.* TO 'root'@'localhost' IDENTIFIED BY 'PisDbPwd#321';
GRANT ALL ON pis_active_db.* TO 'root'@'10.246.26.142' IDENTIFIED BY 'PisDbPwd#321';
GRANT ALL ON pis_active_db.* TO 'root'@'10.26.126.194' IDENTIFIED BY 'PisDbPwd#321';

SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));
SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_DATE',''));
SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'NO_ZERO_IN_DATE',''));

/etc/mysql/conf.d/disable_strict_mode.cnf
[mysqld]
sql_mode=IGNORE_SPACE,ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION


sudo /etc/init.d/mysql restart




GRANT ALL ON kvs_oap_admin.* TO 'kvs'@'10.246.26.142' IDENTIFIED BY 'kvs123';
GRANT ALL ON kvs_oap_admin.* TO 'kvs'@'10.26.126.194' IDENTIFIED BY 'kvs123';

GRANT ALL ON kvs_oap_schema.* TO 'kvs'@'10.246.26.142' IDENTIFIED BY 'kvs123';
GRANT ALL ON kvs_oap_schema.* TO 'kvs'@'10.26.126.194' IDENTIFIED BY 'kvs123';
*/10 * * * * /bin/sh /home/kvs/database_migration_kvs_schema_admin.sh


//================================ PIS =========================================//

GRANT ALL ON *.* TO 'pis'@'10.26.46.88' IDENTIFIED BY 'PisWeb#321';
GRANT ALL ON *.* TO 'root'@'10.26.46.88' IDENTIFIED BY 'PisDbPwd#321';
GRANT ALL ON *.* TO 'pis'@'10.26.126.195' IDENTIFIED BY 'PisWeb#321';
GRANT ALL ON *.* TO 'root'@'10.26.126.195' IDENTIFIED BY 'PisDbPwd#321';
GRANT ALL ON pis_active_db.* TO 'pis'@'10.26.126.194' IDENTIFIED BY 'PisWeb#321';
GRANT ALL ON pis_active_db.* TO 'root'@'10.26.126.194' IDENTIFIED BY 'PisDbPwd#321';
FLUSH PRIVILEGES;


