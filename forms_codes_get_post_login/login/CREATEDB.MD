# Como criar um Data Base via terminal com MariaDB

Instalar o MariaDB (Alternativa para o MySQL)
```
apt install mariadb-server mariadb-client
```
Iniciar o serviço
```
systemctl start mariadb
```
Verificar o status do serviço
```
systemctl status mariadb
```
Iniciar o mariaDB
```
systemctl start mariadb
systemctl enable mariadb
```
Acessar o mariaDB
```
mysql -u root
```
Criar o banco de dados
```
CREATE DATABASE loginDB;
```
Acessar o banco de dado
```
USE loginDB
```
Criar a tabela users
```
CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), passwaord VARCHAR(255))
```
Inserindo valores
```
INSERT INTO users (username, password) VALUES ('admin', '12345');
INSERT INTO users (username, password) VALUES ('user', 'password123');
```

