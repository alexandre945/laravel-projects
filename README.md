<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![capa](https://user-images.githubusercontent.com/69020659/170801974-33974a5a-2b80-49d7-a491-3786c2f0ad7b.png)
## Projeto com Laravel 

Trata-se de uma lista inicialmente de compra podendo ser utilizada também como outro tipo de lista,
onde você pode inserir um dado e uma quantidade,esses dados são persistidos no banco de dados e você
pode acessar do seu smartfone no supermercado se caso for este seu objetivo de uso 

## TECNOLOGIIAS USADAS
+ Laravel 8
+ Docker version 20.10.16
+ Docker-compose version 1.26.0
+ Laradock
+ Mysql version  8.0.29
+ Nginx
## REQUESITOS PARA RODAR ESTE PROJETO no mesmo ambiente que o meu

+ Você precisa de ter instalado git
+ Você precisa ter instaldo Laravel 8
+ Você precisa ter instalado Docker version 2010.16
+ Você precisa ter instalado docker-compose version 1.26.0
+ Você precisa ter Visual esetudio code instalado

## INSTRUÇOẼS PARA RODAR ESSE PROJETO NA SUA MAQUINA

+ Primeiro passo é clonar este repositorio para sua maquina
+ Em uma pasta você digita git clone https://github.com/alexandre945/laravel-projects.git
+ Entra na pasta onde você clonou o projeto 
+ Provavelmente a pasta laradock vai estar vazia sugiro que você delete ela 
+ enseguida ainda dentro da pasta você vai digitar git clone https://github.com/laradock/laradock.git
+ com isso você vai ter o Laradock dentro do seu projeto
+ Depois disto no terminal ainda dentro da pasta do projeto navegue até a pasta laradock entra nela e  digita cp .env.example .env
+ Esse comando vai fazer uma copia do .env do laradock
+ Vamos para as configuraçoẽs do .env 
+ NGINX_HOST_HTTP_PORT=80
+ MARIADB_VERSION=latest
+ MARIADB_DATABASE=aqui nome do  seu banco de dadoos 
+ MARIADB_USER=senha do usuario
+ MARIADB_PASSWORD= senha
+ MARIADB_PORT=3306 essa porta é padrão 
+MARIADB_ROOT_PASSWORD=senha
+ADM_PORT=8081
+ ADM_INSTALL_MSSQL=false
+ ADM_PLUGINS=
+ ADM_DESIGN=pepa-linha
+ ADM_DEFAULT_SERVER=mysql
+ PMA_DB_ENGINE=mariadb
+ agora é o .env do projeto Laravel
+ DB_CONNECTION=mysql
+ DB_HOST=mariadb
+ DB_PORT=3306
+ DB_DATABASE=laravel
+ DB_USERNAME= sua senha
+ DB_PASSWORD= sua senha

## COMANDOS UTILIZADOS

+ Ainda dentro da pasta do projeto digite code .
+ Apartir dai se quiser usar o terminal inbutido do visual estudio code
+ navegue até a pasta laradock entra nela e digite docker-compose up -d nginx mariadb phpmyadmin
+ Com isso você vai subir três containers em background o que não vai impedir de usar o terminal
+ talvez demore para baixar as imagens depende da sua maquina e sua internete 
+ depois digita docker ps para ver quais containers estão rodando
+ se estiver ok vai no navegador e digita localhost
+ e espro que nesse momento consiga ver a pagina do Laravel


## License

 [MIT license](https://opensource.org/licenses/MIT).
