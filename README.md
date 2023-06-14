<h2>Projeto desenvolvido para o processo seletivo da Brainy Digital</h2>
<h3 align="left">Objetivo do projeto: </h3>
<details>
<summary>Expandir Texto</summary>
<p>O projeto visa desenvolver um CRUD simples com o framework Laravel e o banco de dados MySQL. No final da página é possível ver a estrutura do banco de dados e das tabelas. As rotas incluem cadastro, atualização, listagem e remoção dos usuários cadastrados com confirmação. Para se guiar pelas rotas, foi feita uma leve estilização das páginas para que seja perceptível onde seguir com os comandos desejados</p>
</details>

<h3 align="center">Para rodar localmente: </h1>
<h5>É necessário ter instalada a versão 8.1 do laravel, o composer e o MySQL</h5>

```bash
git clone https://github.com/V-Emanuel/Brainy_exercicio.git &&
cd Brainy_exercicio &&
mv .env.example .env &&
composer install &&
php artisan key:generate &&
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

Os comandos abaixo rodam as migrations para criar as tabelas do banco de dados e em seguida o seed para preenchê-las:<br>

```bash
php artisan migrate && php artisan db:seed
```

<h3 align="left">Estrutura do banco de dados: </h3>
<img src="/resources/assets/imgs/BrainyDbDesigner.png" width = 100%/>
