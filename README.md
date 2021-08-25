# bookmarks-webapp
This is the simple web application of bookmarks.

シンプルなブックマークのウェブアプリケーション。

---

## Preparation of server
This app needs Apache + PHP + MySQL server.
You must install and set up them by the following commands (This is for Ubuntu 14.04).
<pre>
# apt-get install apache2
# apt-get install php5
# apt-get install mysql-server mysql-client
        (set mySQL root user's password)
# apt-get install php5-mysql
# apt-get install libapache2-mod-auth-mysql
# /etc/init.d/apache2 reload
</pre>
And you must modify apache2's configuration files to use ".htaccess".
Typically you must change "AllowOverride None" to "AllowOverride All" in the following lines in "/etc/apache2/apache2.conf".
<pre>
&lt;Directory /&gt;
        Options FollowSymLinks
        AllowOverride None
        Require all denied
&lt;/Directory&gt;
</pre>

## Preparation of Database
Run the following commands. You should modify something for security.
<pre>
# echo -n 12345678 | sha1sum
7c222fb2927d828af22f592134e8932480637c0d  -
# echo -n password | sha1sum
5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8  -
# mysql -u root -p
mysql> set character_set_client=utf8;
mysql> set character_set_connection=utf8;
mysql> set character_set_database=utf8;
mysql> set character_set_results=utf8;
mysql> set character_set_server=utf8;
mysql> CREATE USER 'web'@'localhost' IDENTIFIED BY 'password';
mysql> CREATE DATABASE bookmarks_webapp;
mysql> GRANT all ON bookmarks_webapp.* TO 'web'@'localhost';
mysql> USE bookmarks_webapp;
mysql> set character_set_database=utf8;
mysql> show variables like "chara%";
mysql> CREATE TABLE users (id INT AUTO_INCREMENT, name TEXT,password TEXT, PRIMARY KEY (id));
mysql> INSERT INTO users(name,password) VALUES ('ttanimu','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
mysql> INSERT INTO users(name,password) VALUES ('test','5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
mysql> CREATE TABLE bookmarks (id INT AUTO_INCREMENT,user INT,url TEXT,title TEXT,labels TEXT,PRIMARY KEY (id),CONSTRAINT fk_user FOREIGN KEY (user) REFERENCES users (id) ON DELETE SET NULL ON UPDATE CASCADE);
mysql> alter table bookmarks convert to character set utf8;
mysql> show create table bookmarks \G
mysql> DESCRIBE bookmarks;
mysql> INSERT INTO bookmarks(user,url,title,labels) VALUES (1,'https://www.google.com','Goolge','search google');
mysql> SELECT * FROM bookmarks;
mysql> \q
</pre>

## Preparation of web contents
Copy "bm" directory to web server.

## How to use
You can browse it by opening the following URL.
<pre>
http://&lt;server name&gt;/bm/
</pre>

## Backup bookmarks
You can backup your bookmarks by mysqldump command as the followings.
"dump.sql" is the backup file.
<pre>
$ mysqldump -u root -p --databases bookmarks_webapp > dump.sql
</pre>
If you want to backup all database on mysql, you can run the following command.
<pre>
$ mysqldump -u root -p --all-databases > dump.sql
</pre>
When you restore such backup data, you can run the following command.
<pre>
$ mysql -u root -p < dump.sql
</pre>

---

## サーバの準備
英語版を参照のこと。

## データベースの準備
英語版を参照のこと。

## ウェブコンテンツの準備
英語版を参照のこと。

## 使い方
英語版を参照のこと。

## ブックマークのバックアップ
英語版を参照のこと。
