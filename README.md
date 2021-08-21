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
# /etc/init.d/apache2 reload
</pre>

## Preparation of Database
Run the following commands. You should modify something for security.
<pre>
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
mysql> CREATE TABLE bookmarks (id INT AUTO_INCREMENT, url TEXT,title TEXT, PRIMARY KEY (id));
mysql> alter table bookmarks convert to character set utf8;
mysql> show create table bookmarks \G
mysql> DESCRIBE bookmarks;
mysql> INSERT INTO bookmarks(url,title) VALUES ('https://www.google.com','Goolge');
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

---

## サーバの準備
英語版を参照のこと。

## データベースの準備
英語版を参照のこと。

## ウェブコンテンツの準備
英語版を参照のこと。

## 使い方
英語版を参照のこと。

