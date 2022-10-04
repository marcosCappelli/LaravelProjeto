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
