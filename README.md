<h3>Projeto desenvolvido para o processo seletivo da Brainy Digital</h3>

<h1 align="center">Para rodar localmente: </h1>

```bash
git clone https://github.com/V-Emanuel/Brainy_exercicio.git &&
cd Brainy_exercicio && 
mv .env.example .env &&
composer install &&
php artisan serve
```
<h3 align="left">Variáveis de Ambiente: </h3>

As variáveis de ambiente abaixo devem ser alteradas de acordo com as configurações do seu banco de dados no arquivo .env: <br>
```.env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=usuario
DB_PASSWORD=senha
```


<h3 align="left">Populando o banco de dados: </h3>

O comando abaixo roda as migrations para criar as tabelas do banco de dados e em seguida o seed para preenchê-las:<br>
```bash
   php artisan migrate &&   php artisan db:seed
```
