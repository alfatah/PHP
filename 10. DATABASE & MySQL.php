running cmd 
show all folder dir
C:\xampp\mysql\bin>mysql -u root -p
Enter password: 

MariaDB [(none)]> show databases;
databse : phpdasar
tabel : mahasiswa

id int primary key auto_increment
nama varchar(100)
nrp varchar(10)
email varchar(100)
jurusan varchar(100)
gambar varchar(100)

MariaDB [(none)]> create database phpdasar;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| phpdasar           |
| phpmyadmin         |
| test               |
+--------------------+
6 rows in set (0.001 sec)

MariaDB [(none)]> use phpdasar;
Database changed

MariaDB [phpdasar]> create table mahasiswa (
    -> id int primary key auto_increment,
    -> nama varchar(100),
    -> nrp char(9),
    -> email varchar(100),
    -> jurusan varchar(100),
    -> gambar varchar(100)
    -> );
Query OK, 0 rows affected (0.292 sec)

MariaDB [phpdasar]> show tables;
+--------------------+
| Tables_in_phpdasar |
+--------------------+
| mahasiswa          |
+--------------------+
1 row in set (0.001 sec)

MariaDB [phpdasar]> describe mahasiswa;
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| id      | int(11)      | NO   | PRI | NULL    | auto_increment |
| nama    | varchar(100) | YES  |     | NULL    |                |
| nrp     | char(9)      | YES  |     | NULL    |                |
| email   | varchar(100) | YES  |     | NULL    |                |
| jurusan | varchar(100) | YES  |     | NULL    |                |
| gambar  | varchar(100) | YES  |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+
6 rows in set (0.018 sec)

MariaDB [phpdasar]> insert into mahasiswa values ('', 'Sholahuddin Alfatah', '0000007', 'alfatah1505@gmail.com', 'Teknik Informatika', 'alfatah.jpg');
Query OK, 1 row affected, 1 warning (0.067 sec)

MariaDB [phpdasar]> select * from mahasiswa;
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
+----+---------------------+---------+-----------------------+--------------------+-------------+
1 row in set (0.000 sec)

MariaDB [phpdasar]> insert into mahasiswa values ('', 'Wahyoe', '0000008', 'wahype@gmail.com', 'Teknik Informatika', 'wahyoe.png');
Query OK, 1 row affected, 1 warning (0.043 sec)

MariaDB [phpdasar]> select * from mahasiswa;
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
|  2 | Wahyoe              | 0000008 | wahyoe@gmail.com      | Teknik Informatika | wahyoe.png  |
+----+---------------------+---------+-----------------------+--------------------+-------------+
2 rows in set (0.000 sec)

MariaDB [phpdasar]> insert into mahasiswa values ('', 'Rahmad', '0000010', 'rahmad@gmail.com', 'Teknik Informatika', 'rahmad.png');
Query OK, 1 row affected, 1 warning (0.041 sec)

MariaDB [phpdasar]> select * from mahasiswa;
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
|  2 | Wahyoe              | 0000008 | wahyoe@gmail.com      | Teknik Informatika | wahyoe.png  |
|  3 | Rahmad              | 0000010 | rahmad@gmail.com      | Teknik Informatika | rahmad.png  |
+----+---------------------+---------+-----------------------+--------------------+-------------+
3 rows in set (0.000 sec)

MariaDB [phpdasar]> select nrp from mahasiswa;
+---------+
| nrp     |
+---------+
| 0000007 |
| 0000008 |
| 0000010 |
+---------+
3 rows in set (0.000 sec)

MariaDB [phpdasar]> select nama, nrp from mahasiswa;
+---------------------+---------+
| nama                | nrp     |
+---------------------+---------+
| Sholahuddin Alfatah | 0000007 |
| Wahyoe              | 0000008 |
| Rahmad              | 0000010 |
+---------------------+---------+
3 rows in set (0.000 sec)

MariaDB [phpdasar]> select * from mahasiswa where nrp = '0000007';
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
+----+---------------------+---------+-----------------------+--------------------+-------------+
1 row in set (0.000 sec)

MariaDB [phpdasar]> update mahasiswa set jurusan = 'Teknik industri' where id = 2;
Query OK, 1 row affected (0.029 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [phpdasar]> select * from mahasiswa;
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
|  2 | Wahyoe              | 0000008 | wahyoe@gmail.com      | Teknik industri    | wahyoe.png  |
|  3 | Rahmad              | 0000010 | rahmad@gmail.com      | Teknik Informatika | rahmad.png  |
+----+---------------------+---------+-----------------------+--------------------+-------------+
3 rows in set (0.000 sec)

MariaDB [phpdasar]> delete from mahasiswa where id = 3;
Query OK, 1 row affected (0.044 sec)

MariaDB [phpdasar]> select * from mahasiswa;
+----+---------------------+---------+-----------------------+--------------------+-------------+
| id | nama                | nrp     | email                 | jurusan            | gambar      |
+----+---------------------+---------+-----------------------+--------------------+-------------+
|  1 | Sholahuddin Alfatah | 0000007 | alfatah1505@gmail.com | Teknik Informatika | alfatah.jpg |
|  2 | Wahyoe              | 0000008 | wahyoe@gmail.com      | Teknik industri    | wahyoe.png  |
+----+---------------------+---------+-----------------------+--------------------+-------------+
2 rows in set (0.000 sec)

MariaDB [phpdasar]> drop table mahasiswa;
Query OK, 0 rows affected (0.157 sec)

MariaDB [phpdasar]> select * from mahasiswa;
ERROR 1146 (42S02): Table 'phpdasar.mahasiswa' doesn't exist

MariaDB [phpdasar]> show tables;
Empty set (0.001 sec)

MariaDB [phpdasar]> drop database phpdasar;
Query OK, 0 rows affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
+--------------------+
5 rows in set (0.001 sec)


