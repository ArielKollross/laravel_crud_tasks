# Guia de Uso - Aplicativo Laravel com PostgreSQL e Servidor de Desenvolvimento

Este guia fornece instruções passo a passo para configurar e executar um aplicativo Laravel, utilizando PostgreSQL via Docker.

## 1. Subir um Contêiner PostgreSQL com Docker

Para subir um contêiner PostgreSQL com Docker, execute o seguinte comando no terminal:

```bash
docker run --name my_postgres -e POSTGRES_PASSWORD=mysecretpassword -d postgres
```

Este comando criará e iniciará um contêiner, altero o valor de my_postgres e mysecretpassword, para o nome do contêiner e senha respectivamente.

## 2. Testar Conexão com o Banco de Dados

Após iniciar o contêiner PostgreSQL, você pode testar a conexão com o banco de dados usando o seguinte comando:

```bash
docker exec -it my_postgres psql -U postgres
```
Trocar "my_postgres" pelo nome do seu contêiner. Se não ocorreu nenhum erro, é só prosseguir.

## 3. Rodar Migrações do Laravel

Para rodar as migrações do Laravel e criar as tabelas no banco de dados, execute o seguinte comando na raiz do seu projeto Laravel:

```bash
php artisan migrate
```

Recomendável verificar se as migrations foram corretamente criadas, pode se verificar usando um aplicativo de banco, como o DBeaver, ou PhpAdmin.

## 4. Configurando Variáveis de Ambiente

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Coloque suas variáveis no arquivo .env

## 5. Subir a Aplicação Laravel com o Servidor Embutido

Para subir a aplicação Laravel localmente com o servidor embutido, execute o seguinte comando na raiz do seu projeto Laravel:

```bash
php artisan serve --host=127.0.0.1 --port=3009
```

Isso iniciará a aplicação Laravel em um servidor de desenvolvimento na porta 3009 e estará acessível em http://127.0.0.1:3009.


## Problemas Comuns e Soluções

- **Problemas de Rota ou Arquivos Corrompidos**: Se você encontrar problemas de rota ou arquivos corrompidos, tente limpar o cache do Laravel e recarregar as configurações usando os seguintes comandos:
  - `php artisan cache:clear`
  - `composer dump-autoload`

Isso deve resolver muitos problemas relacionados à cache e a arquivos corrompidos.

- **Obs**: Caso ocorra algum problema com a criação ou update. Verifique os arquivos de **FormRequest**, estão localizados em **app/Http/Requests/Tasks/**. Na pior das hipóteses, remova a injeção de dependência e utilize a validação diretamente no controller.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
