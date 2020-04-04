
# OM30 Processo Seletivo

> Desafio de desenvolvimento para vaga de desenvolvedor php fullstack


- Estudo de caso do objetivo do projeto
- Mapeamento de processo
- Modelagem de dados
- Criação do Banco de dados
- Criação da estrutura de pastas e arquivos
- Implementação


## Índice

- [Instalação](#Instalação)
- [Features](#features)
- [Team](#team)
- [Support](#support)




## Instalação

Será necessário apenas criar as tabelas e rodar o sistema em um ambiente que aceite PHP.
Pode ser o XAMPP por exemplo. 

***Tabelas***

CREATE TABLE `OM30_ALUNO` (
  `NOALUNO` varchar(100) NOT NULL,
  `FOTO` varchar(55) NULL,
  `NOMAE` varchar(100) NOT NULL,
  `DTNASCIMENTO` date NOT NULL,
  `RG` varchar(15) NULL,
  `CPF` varchar(11) NOT NULL,
  `RA` varchar(15) NULL,
  `CEP` varchar(8) NULL,
  `RUA` varchar(100) NULL,
  `NUMERO` varchar(5) NULL,
  `BAIRRO` varchar(70) NULL,
  `COMPLEMENTO` varchar(55) NULL,
  `CIDADE` varchar(100) NULL,
  `ESTADO` varchar(2) NULL,
  `EMAIL` varchar(100) NULL,  
  `TELEFONE` varchar(18) NULL,  
  `UNIFORME` int NULL
  
)


CREATE TABLE `OM30_UNIFORME` (
  `ID` int NOT NULL,
  `DESCRICAO` varchar(55) NULL
  
)

CREATE TABLE `OM30_TAMANHO` (
  `ID` int NOT NULL,
  `DESCRICAO` varchar(55) NULL
  
)

CREATE TABLE `OM30_UNIFORME_ALUNO` (
   `RA` varchar(15) NULL,
   `IDUNIFORME` int NOT NULL,
   `IDTAMANHO` int NOT NULL
  
)

INSERT INTO `om30_tamanho` (`ID`, `DESCRICAO`) VALUES
(1, 'P'),
(2, 'M'),
(3, 'G');


INSERT INTO `om30_uniforme` (`ID`, `DESCRICAO`) VALUES
(1, 'CAMISA'),
(2, 'CALCA'),
(3, 'ABRIGO');



## Features

O usuário do sistema poderá:

Incluir, editar ou apagar um aluno cadastrado.
Associar um uniforme de três peças e três tamanhos cada para cada aluno cadastrado. 


## Team

  Francisco Roque Alves


## Support

  Francisco Roque Alves

