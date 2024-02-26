![](https://getcomposer.org/img/logo-composer-transparent4.png)

[URL Composer](https://getcomposer.org/download/)

## Instalação do composer

**Comando para inicialisar o composer no projeto caso ainda não tenha o arquivo de configuração composer.json**

`composer init`

**Configurações padrões do projeto**

````Package name (<vendor>/<name>) [yuribrasil/alecaddd_plugin]:
Description []: Awesome starter plugin example
Author [Yuri Brasil <t-yuri.brasil@matrixenergia.com>, n to skip]: yuri.brasil@sescpr.com.br
Invalid author string. Must be in the format: John Smith <john@example.com>
Author [Yuri Brasil <t-yuri.brasil@matrixenergia.com>, n to skip]: Yuri Brasil <yuri.brasil@sescpr.com.br>
Minimum Stability []: dev
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: GPL

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no

{
"name": "yuribrasil/alecaddd_plugin",
"description": "Awesome starter plugin example",
"type": "project",
"license": "GPL",
"authors": [
{
"name": "Yuri Brasil",
"email": "yuri.brasil@sescpr.com.br"
}
],
"minimum-stability": "dev",
"require": {}
}```
````

**Para instalar as dependencias configuradas no compose.json**

`composer install`

**Comando para atualizar o autoload**

_Toda vez que atualizar o autoload, executar o comando abaixo_

`composer dump-autoload`

_Versão mínima do PHP para o plugin é PHP 5.3.0_

## Informações Adicionais

Init.php -> serve para instanciar as classes e executar a função register();
