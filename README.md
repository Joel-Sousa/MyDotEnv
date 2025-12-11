### My dotEnv

Cria o arquivo ".env" e carrega variáveis ​​de ambiente do ".env" para a aplicação automaticamente.

## Instalação
```bash
$ composer require joel-sousa/mydotenv
```
 ou adicione-o manualmente ao seu arquivo `composer.json`.
```bash
$ "joel-sousa/mydotenv": "^1.0"
```


## Adicione a dependencia do composer no arquivo principal da aplicação ou no "index.php" na raiz do projeto

```shell
require './vendor/autoload.php';
```

## Exemplo de variaveis

```shell
ENV="env"
ENV_TST="tst"
# ENV_TST="tst" # '#' e um comentario
```

## Depois de instalada e configurada a biblioteca e possivel usar-la com:

### Lista todas as variaveis do .env criadas
```shell
var_dump($_ENV)
```

### Mostra somente uma variavel
```shell
echo $_ENV['ENV'];
```

### Mostra somente uma variavel com a funcao 'getenv()'
```shell
echo getenv('ENV');
```

### Lista todas as variaveis do projeto
```shell
var_dump($_SERVER)
```

### Mostra a variavel a partir do '$_SERVER'
```shell
echo $_SERVER['ENV'];
```