# api-acessos

## Objetivo
<!-- Criação de uma API REST que demonstre meus conhecimentos com Express.js, NodeJS, Docker e MySQL -->
Criação de uma API REST que demonstre meus conhecimentos com PHP, Docker e MySQL e para esudos do Framework Slim 4, uma minimização do Laravel.

## O que ela faz?
Ela retorna um JSON contendo as infomações da maquina que fez o request junto as informações de todas as datas de todas as requisições anteriores feitas pela mesma maquina via indentificação do IP da maquina.

## Como usar?
1. Montar o ambiente:<br />
1.1. Via Docker Compose com:<br />
```docker-compose up -d```<br />
1.2. Dê as permissões:<br />
```docker-compose exec api chmod -R 755 .```<br />
2. Dê get, post, put e delete em [127.0.0.1](http://127.0.0.1/) (porta 80) via Postman ou qualquer outra ferramenta adequada a tratar requisições em API RESTs será retornado o JSON com as informações sobre seu IP, seu User-Agent e as datas e os horarios em que sua IP realizou requisições na API.
