# Teste de conhecimentos

### Questão 1

Código simples de PHP. Pode ser rodado tanto sendo chamado via servidor apache diretamente como via linha de comando com `php fizzbuzz.php`

### Questão 2

Código editado e comentários no decorrer do mesmo explicando decisões de otimização. Arquivo `q2.php`

### Questão 3

Mesmo da Questão 2. Arquivo `q3.php`

### Questão 4

  1. Criar database (com o nome que preferir, no meu caso, a tabela se chamou `todo`)
  2. Importar arquivo todo.sql que está na raiz do projeto
  3. Atualizar `todo/config/app.php` com as configurações locais de banco de dados (no meu caso, configs padrão (root,root))
  4. Rodar serviço. Nenhuma extensão especial foi usada além do CakePHP 3.3.
      1. Assumindo que o sistema utilizado é UNIX-based (Linux/Mac)
      2. Assumindo que a navegação no terminal está no nível raiz do cake (pasta `todo`)
      3. Executar `./bin/cake server`
  5. Seguir lista de comandos a seguir:
 
  
### TODO API

**GET** /todos.json

```
Retorna todos os to-do's disponíveis
```
   
**POST** /todos.json
```
Cria to-do. Retorna o mesmo
```

```json
    {
        todo: string,
        status: string
    }
```

**GET** /todos/{id}.json

```
Retorna to-do com id listado. 404 caso id não exista
```

**PUT** /todos/{id}.json

```
Atualiza to-do com elementos 
```

```json
    {
        todo: string,
        status: string
    }
```

**DELETE** /todos/{id}.json

```
Deleta to-do com id listado e retorna para a lista com todos os to-do's. Retorna 404 caso id não exista.
```