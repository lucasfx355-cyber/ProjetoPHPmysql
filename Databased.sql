create database aulaphp;
use aulaphp;

create table aluno(
id int not null primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null
);

insert into aluno(nome, email) values ('Lucas', 'lucas.reis12@aluno.cps.sp.gov.br');
insert into aluno(nome, email) values ('wesley', 'Saborizado@gmail.com');
insert into aluno(nome, email) values ('freefire', 'Fogolivre@outlook.com');
 select*from aluno;

alter table aluno ADD colums senha varchar(255);
alter table aluno ADD colum adm INT;
