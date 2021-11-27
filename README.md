# api-acessos

## Objetivo
Criação de uma API que demonstre meus conhecimentos com PHP, Docker e MySQL e para fins de estudos do framework Slim Framework 4, uma minimização do Laravel e com foco em desenvolvimento de APIs.

## O que ela faz?
Ela retorna um JSON contendo as infomações da maquina que fez o request junto as informações de todas as datas de todas as requisições anteriores feitas pela mesma maquina via identificação do IP da maquina.

## O que compõe o Projeto?
1. Docker
2. PHP 7.4
3. Slim Framework 4
4. MySQL 5.7.35

## Como usar?
1. Montar o ambiente:<br />
1.1. Via Docker Compose com:<br />
```docker-compose up -d```<br />
1.2. Dê as permissões:<br />
```docker-compose exec api chmod -R 755 .```<br />
2. Dê get, post, put e delete em [127.0.0.1](http://127.0.0.1/) (porta 80) via Postman ou qualquer outra ferramenta adequada a tratar requisições em API será retornado o JSON com as informações sobre seu IP, seu User-Agent e as datas e os horarios em que sua Maquina/IP realizou requisições na API.
