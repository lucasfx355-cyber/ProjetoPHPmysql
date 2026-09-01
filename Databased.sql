create database aulaphp;
use aulaphp;

create table aluno(
id int not null primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null
);

insert into aluno(nome, email) values ('Luiz', 'luiz.santana4@aluno.cps.sp.gov.br');
insert into aluno(nome, email) values ('Polly', 'Apollyongamerkwai@gmail.com');
insert into aluno(nome, email) values ('Cain', 'CainmoggouAbel@outlook.com');
 select*from aluno;