# Descrição do Desafio

A tecnologia de Containers promete mudar a maneira como as operações de TI são realizadas, abstraindo ambientes de desenvolvimento e otimizando o consumo de recursos. Nesse contexto, conheça o Docker, implemente uma estrutura de Microsserviços com as melhores práticas do mercado internacional e ganhe independência entre aplicações e infraestrutura em mais um conteúdo exclusivo por aqui.

## Pré-requisitos
- Conhecimentos básicos em Linux
- Docker
- Máquina Virtual Linux

## Objetivos do Projeto
1. Criar uma estrutura de microsserviços utilizando Docker
2. Implementar um servidor web com Nginx como proxy reverso
3. Desenvolver uma aplicação PHP com conexão a banco de dados MySQL
4. Configurar balanceamento de carga entre containers

## Componentes do Projeto
- Servidor Nginx para balanceamento de carga
- Aplicação PHP para demonstração de funcionamento
- Banco de dados MySQL para armazenamento de dados
- Containers Docker para cada serviço

## Estrutura do Projeto
O projeto é composto por:
- Arquivo de configuração do Nginx para proxy reverso
- Script PHP para inserção de dados no banco
- Arquivo SQL para criação da estrutura do banco de dados
- Dockerfiles para construção das imagens

# Guia de Implementação Passo a Passo

## 1. Preparação do Ambiente
1. Certifique-se de ter instalado:
   - Docker Engine
   - Docker Compose
   - Git para versionamento
   - Editor de texto de sua preferência

2. Crie a estrutura de diretórios:
   ```
   projeto/
   ├── nginx/
   │   ├── Dockerfile
   │   └── nginx.conf
   ├── php/
   │   ├── Dockerfile
   │   └── src/
   │       └── index.php
   ├── mysql/
   │   └── init.sql
   └── docker-compose.yml
   ```