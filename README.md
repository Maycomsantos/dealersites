## Sobre o Projeto 

Esse projeto foi desenvolvido com a finalidade de teste. 

O teste proposto era que fizesse um banco de dados com 5,000 usuários e 15 mil registro de login. 
Assim foi feito e pode ser executado de forma rápida e prática. 

## Recursos Utilizados: 

> Mysql
> Passport
> Activy Log - Spatie
> Factorys 
> Bootstrap 

## Observações: 

Ao decorrer do teste observei algumas coisas que passaram talvez tenha passado e acabaram não percebendo. 
Em uma das partes do documento explicativo do teste foi escrito: **Users** e também **Users_acess** essa duas formas que foram escritas no documento e pedindo que fossem escritas no banco de dados dessa forma elas não seguem o padrão de codificação do Laravel. 

Se você observar a forma em que a palavra **users_acess** está escrita, está de forma errada. O correto seria: **access**, esse erro pequeno poderia travar algum programador que tivesse fazendo o serviço e lá na frente ele ia observar que estava errado, se ele fosse alterar isso custaria seu tempo. As regras de padronização são importantes e essênciais em qualquer projeto ou equipe. 

Segue abaixo o material de acesso sobre essa padronização e boas práticas do Laravel a qual me deram base para escrever até aqui sobre esse erro: 

https://blog.renatolucena.net/post/boas-praticas-laravel
https://johnatant.github.io/laraveltherightway/
https://www.php-fig.org/psr/

## Layout 
O Layout utilizado para a listagem dos usuários foi feito utilizando Bootstrap e um pouco de Css puro. 
Dessa forma o Layout ficou bastante responsivo e rápido. 

- A tabela utilizada ficou no formato de Table-responsive, é um tipo formato em que o bootstrap utiliza e que fica bem elegante. 

- Sistema responsivo e suportado em diversos modelos. 
- Paginação de 20. 

## Como posso começar a visualizar essas informações ?

Simples ! Você primeiro precisa ter o Xampp na versão mais atualizada, PHP pode ser o 7, não tem problema, aqui na minha máquina estou usando o 8. 

- Faça o Download do Git: https://git-scm.com/downloads
- Tenha o xampp instalado na máquina: https://www.apachefriends.org/pt_br/index.html

Depois disso feito nós partimos para fazer ele funcionar. 

Tendo instalado tudo isso o primeiro passao será copiar o projeto aqui no Github e colocar o seguinte comando para poder copiar esse projeto: 

**git clone https://github.com/Maycomsantos/dealersites.git** 

Ele vai começar a gerar uma cópia, talvez ele peça seus dados de login aqui do github, mas não se preocupe, isso é só para autenticar se é você mesmo e se tem autorização para baixar aquele repositório. 

Depois de ter baixado o projeto na sua máquina, você precisará entrar na pasta do seu projeto através do promt de comando. 

Aqui eu estou usando um promt e onde a pasta do sistema DealerSites está no meu computador é: xampp/htdocs/dealersites. Ou seja, pra eu entrar nessa pasta eu coloco: cd *C:/xampp/htdocs/dealersites*

No meu promt de comando eu tenho que rodar o comando: **composer install** com esse comando ele irá baixar todas as depedências do sistema para poder funcionar. 

Outra coisa que acontece é que o sistema precisa ter um banco de dados para poder rodar. Tendo isso em vista, eu utilizo e recomendo a você baixar um administrador de banco de dados chamado **HeidSQL** 

O Heide além de gerenciar, você pode criar diversos trabalhaos usando banco de dados: https://www.heidisql.com/

Depois de ter criado o banco de dados e configurado o nome no arquivo *.env* 
É hora de rodar nosso banco e as tabelas que precisarão ser criadas. 

Para isso, rodamos o comando: **php artisan migrate:fresh --seed** esse comando irá criar todo o banco de dados e também inserir as informações a qual foram definidas no projeto. 

## Outras informações: 

Não achei muito bom a dinâmica de colocar fotos aqui no Github, então resolvi mostrar um vídeo curto sobre o projeto para vocês poderem ver como está funcionando. 

https://vimeo.com/505262973


Mais dúvidas a respeito do projeto, entrar em contato comigo através do LinkedIn: https://www.linkedin.com/in/maycom-santos/

Ou através do Email: michaelsantos.the@hotmail.com

## API 
Como posso testar a api ? 
Simples, você digita: **localhost:8000/api/users** 
Provavelmente você verá um erro dizendo que a API não possui um login definido, isso acontece por que não existe uma tela de login e por isso ele não consegue pegar as chaves daquele usuário que está tentando acessar. 

Para resolver isso e que vocês possam ver a api, é só apagar as linhas adicionadas no arquivo *api.php* e deixar somente essa linha: 
 
 **Route::ApiResource('users', 'Api\UsersController');**



