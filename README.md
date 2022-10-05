<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## O que é Laravel?
- Framework construido na linguagem PHP;
- Utiliza a arquitetura MVC ( Model View Controller );
- Possui recursos muito interessantes que auxiliam o desenvolvimento de aplicações: artisan, migrations, blade e etc...
- Fácil de criar código, não é tão burocrático e flexibiliza bastante no desenvolvimento de aplicações;
- A estrutura de pastas é simples, deixando  o projeto organizado;
## Rotas e Views
- Vamos acessar as páginas do nosso projeto por meio de rotas;
- As rotas chamam as views, que são as representações gráficas das páginas;
- Nas views teremos os tenmplates, onde há a estruturação da página por meio do HTML;
- Os templates também renderizam dados dinâmicos por meio do PHP;
## Blade
- Blade é a template engine do laravel;
- Com ele, vamos deixar as nossas viewa dinâmicas;
- Inserindo tags de HTML e também dados que são fornecidos pelo banco;
- Podemos dizer que as views serão ==> responsabilidade do Blade;
## Explorando o Blade
- Podemos criar estruturas de repetição no Blade;
- Executar PHP puro;
- Escrever comentários nos arquivos de view;
- O Blade realmente é muito vesátil e nos permite chegar num resulktado excelente de renderiuzação de views;
## Adicionando Arquivos estáticos
- Uma aplicação web normalmente tem arquivos de CSS, JS e imagens;
- O Laravel proporciona uma maneira muito fácil de inserir estes arquivos no projeto;
- Todos os recursos ficam na pasta public, e tem acesso direto nas tags que trabalham com arquivos estáticos;
## Layouts com Blade
- A funcionalidade de criar um layout permite o reaproveitamento de código;
- Por exemplo: Podemos utilizar o mesmo header e footer em todas as páginas sem repetir código;
- Mas o layout do blade não se limita a isso, podemos criar seções do site por meio do layout e também mudar o title da página;
## Parâmetros nas rotas
- Podemos mudar como uma view nos responde adicionando parâmetros a uma rota;
- Ao redefinir a rota devemos colocar o parâmetro desta maneira: {id};
- Podemos ter parâmetros opcionais também, adicionando uma ?;
- O laravel aceita também query parameters, utilizando a seguinte sintaxe: ?nome=Marcos&idade=55;
## Controlles
- Os Controlles são parte fundamental de toda aplicação em Laravel;
- Geralmente condensam a maior parte da lógica;
- Teem o papel de enviar e esperar resposta do banco de dados;
- E também receber e enviar alguma resposta para as views;
- Os Controlles podem ser criados via artisan;
- É comum retornar uma view ou redirecionar para uma URL pelo Controller;
## Conexão com o banco
- A conexão do Laravel com o banco é configurada pelo arquivo .env;
- Isso nos proporciona maior liberdade e também segurança na aplicação;
- O Laravel utiliza um ORM (Object-Relational Mapping) chamada Eloquent;
- E também para a criação de tabelas as migrations;
## Migrations
- As migrations funcionam como um versionamento de banco de dados;
- Podemos avançar e retroceder a qualquer momento;
- Adicionar colunas e remover de forma facilitada;
- Fazer o setup de BD de uma nova instalação em apenas um comando;
- Podemos verificar as migrations com migrate:status;
- Quando precisamos adicionar um novo campo a uma tabela, devemos criar uma nova migration;
- Porém devemos tomar cuidado para não rodar o comando fresh, e apagar os dados já existentes;
- O comando rollback pode ser utilizado para voltar uma migration;
- Para voltar todas podemos utilizar o reset;
- Para voltar todas e rodar o migrate novamente utilizamos o refresh;
