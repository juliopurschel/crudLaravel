<h1 align="center">Simple Crud Laravel with DataBase</h1> 


## Tecnologias utilizadas

O projeto foi desenvolvido utilizando as tecnologias:

- Laravel
- HTML5 - CSS3
- Boostrap 4
- Jquery/Javascript


## Design

<table>
  <tr>
    <td colspan="2">Desktop</td>
 </tr>
  <tr>
    <td><img src="./public/assets/simplecrud.png" width=300 /></td>    
  </tr>
</table>


## Executar esse projeto no seu computador

- Ter instalado o [Composer](https://getcomposer.org/Composer-Setup.exe)
- Clonar Repositório: `git clone https://github.com/juliopurschel/crudLaravel.git`

Ir até o local do arquivo através do terminal e executar:

- Instalar dependências: `composer install`
- Instalar dependências: `npm install` ou `yarn install`
- Criar uma cópia do arquivo .env: `cp .env.example .env`
- Gerar uma chave de criptografia do app: `php artisan key:generate`  

:warning: Aqui você deve configurar seu **Banco de Dados** preenchendo corretamente o arquivo **`env`** com os dados do seu banco, *nesse deploy foi utilizado o postgre SQL* :warning:

- [x] Banco de dados configurado, voltamos ao terminal.
- Migrar tabelas: `php artisan migrate`
- Iniciar o server: `php artisan serve`

Tudo Pronto parar rodar a aplicação ! :+1:




Todos os arquivos incluídos aqui, incluindo este _README_, estão sob [Licença MIT](./LICENSE).<br>
Criado por [Julio Purschel](https://github.com/juliopurschel)
