create database bd_memo_bio;
use bd_memo_bio;

create table if not exists Aluno(
    idAluno int primary key not null auto_increment,
    Nome varchar(35) not null,
    Sobrenome varchar(35) not null,
    CPF varchar(35) not null,
    RG varchar(35) not null,
    Nascimento date not null,
    Telefone varchar(15) not null,
    Email varchar(35) not null,
    Senha varchar(20) not null,
    RepitirSenha varchar(20) not null,
    Endereço varchar(35) not null,
    Número varchar(15) not null,
    Complemento varchar(15) not null,
    Bairro varchar(35) not null,
    CEP varchar(15) not null,
    Cidade varchar(35) not null,
    Estado varchar(35) not null
) default charset utf8;


insert into aluno values(01, "Maria Luiza", "Carvalho", "111111", "984246", "11/05/2005", "983568", "maria@gmail.com", "memobio", "memobio", "Rua tal", "303", "Terceiro andar", "IF", "763983", "Muzambinho", "MG");