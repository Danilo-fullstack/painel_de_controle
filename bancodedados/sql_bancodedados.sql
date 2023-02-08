create database basededados default character set utf8mb4 collate utf8mb4_general_ci;

use basededados;

create table if not exists usuarios (
id int not null auto_increment,
nome varchar(30),
nascimento date,
sexo enum('F', 'M'),
email varchar(100),
senha varchar(32),
telefone bigint(13),
cidade varchar(50),
uf char(2),
cep int(8),
primary key(id)
) default charset = utf8;