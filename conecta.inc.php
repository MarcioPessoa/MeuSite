<?php

    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","");

    //CRIANDO BANCO DE DADOS
    mysqli_query($conexao,"CREATE DATABASE meusite1");
    $conexao = mysqli_connect("localhost","root","","meusite1");

    //CRIANDO TABELA FALE CONOSCO
    mysqli_query($conexao,"CREATE TABLE faleconosco(id int AUTO_INCREMENT, nome varchar(50), email varchar(80), telefone varchar(14), assunto varchar(255), mensagem text, PRIMARY KEY(id))");

    //CRIANDO TABELA ADMIN
    mysqli_query($conexao,"CREATE TABLE admin(id int(11) AUTO_INCREMENT, titulo varchar(100) NOT NULL, subtitulo varchar(100) DEFAULT NULL, texto text, PRIMARY KEY(id)) ENGINE=InnoDB DEFAULT CHARSET=latin1");

    
?>