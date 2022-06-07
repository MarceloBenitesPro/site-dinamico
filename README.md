<h1 align ="center">Site Dinâmico Com JavaScript , Jquery , HTML , CSS e PHP </h1>

<h2 align = "center" >Tabela de Informação do Site</h2></br>

* [Sobre](#Sobre)
* [Estrutura do Site](#Estrutura-do-Site)
* [Site Responsivo](#Site-Responsivo)
* [API Utilizada](#API-Utilizada)
* [Interface Login](#Interface-Login)
* [Abrindo Painel de Controle](#Abrindo-Painel-de-Controle)
* [Gestão do Painel de Controle](#Gestão-Painel-De-Controle)
* [Gestão Portal de Notícia](#Gestão-Portal-de-Noticias)
* [Banco de Dados](#Banco-de-Dados)
* [Requesitos](#Requesitos)
* [Tecnologia](#Tecnologia)

##
  </br>
   </br>

# Sobre

![image](https://user-images.githubusercontent.com/106987028/172465584-9f4ba869-5430-485b-a654-3eed63b1df66.png)


<p>Este Projeto Tem como objetivo deixar o usuario com o total controle desde a alteração da logo , slide, sobre o autor , as especialidades a descriçao e o serviço .</p>
Portanto mudar toda as Skills conforme o usuário desejar.
</br>
</br>

# Estrutura-do-Site

<p>O site ele é codado com a linguagem php  e é divida em várias pastas.</P>
<p>Para a interface tem o arquivo htdocs que serve como o principal arquivo para a estrutura do site</p>
<p>Através do arquivo config é possível incluir as sessoes do post com o banco de dados e assim montando a sua estrutura</p>
<p>Tem o arquivo chamado Painel aonde fica toda a funcionalidades com os métodos orientado ao objeto interligando o painel de controle com o site</p>

![image](https://user-images.githubusercontent.com/106987028/172466589-199a540a-c3b5-4c9b-aba9-e5327f967846.png)


</br>
</br>


# Site-Responsivo

<p>O Site é altamente responsivo para ser usado em mobile</p>

![image](https://user-images.githubusercontent.com/106987028/172466911-408ca2fb-5efa-4d61-9e4a-eee5bddda1b7.png)


<p> Com media screen (max-width 1024px), media screen (max-width 900px) e  media screen (max-width 768px), tanto o site em si como o painel de controle.
</p>
</br>
</br>

# APIs-Utilizadas

![image](https://user-images.githubusercontent.com/106987028/172467117-67cbe0c8-7e88-4560-a69f-05bb20b9bd6e.png)


<p>O site possuí duas APIS que é o google maps para mostrar a localização do site e do PHPMailer disparo de email</p>
<p> Uma observação é que o google maps ele não é dinamico esta API ela é para e para ter acesso acesso a ele o usuario tem que fazer uma conta no Google e pegar a chave de API para fazer a alteração </p>

![image](https://user-images.githubusercontent.com/106987028/172467264-53c55ae4-1ff5-4df9-8a1f-60e15a7b8496.png)

   </br>
   </br>

# Interface-Login

<p> Para você acessar a login do painel tem que ir neste endereço https://localhost/Projeto_01/painel </p>

![image](https://user-images.githubusercontent.com/106987028/172467443-b71bcb8d-8634-415a-9d5f-4b5a2ac14556.png)

<p>
    No Painel de controle pede o usuario e a senha para isso tem que ir no site e mandar o e-mail que eu envio.
</p>
<p>
   O códico dele tem verificação de segurança pela query do banco de dados.
</p>
<p>
  Para você acesse o painel basta colocar o senha admin e admin que você irá acessar o painel.
</p>
</br>
</br>

# Abrindo-Painel-de-Controle

![image](https://user-images.githubusercontent.com/106987028/172467654-7e1fd39b-cc08-486a-a009-59c4d2dd6992.png)


<p> Dentro do painel de controle é possivel visualizar quantas pessoas tem acessado o site por dia,por semana e total de visitantes do site.
</p>
<p>Quando a pessoa entra no site é possivel ver o ip da localidade da onde o usuario entro no site.</p>
</br>
</br>

# Gestão-Painel-De-Controle

<p>A gestão do painel é toda conectada ao site desde o cadastro do usuario a alteração do cadastro do usuario no painel.</p>
<p>Na gestão do painel você pode alterar e excluir a logo do site, e adiciona os slides e excluir os slides , portanto toda as informações do site menos o menu</p>
<p>Tem a gestão do portal de notícias que você pode alterar também</p>

![image](https://user-images.githubusercontent.com/106987028/172467831-e2772e41-540a-4426-bc74-1730e543c812.png)


</br>
</br>

# Gestão-Portal-de-Noticias

![image](https://user-images.githubusercontent.com/106987028/172468066-6299ca10-9dbc-49ef-bf21-0a21d85ba1a6.png)

<p>No painel de controle tem a gestão do portal de noticias aonde o usuario poderá alterar as categorias, adicionar categorias e excluir as categorias.</p>
<p>Através das categorias você poderá organizar a sua gestão </p>
<p>Tem o cadastro das notícias aonde o usuário poderá cadastrar a notícia e gerenciar as noticias através do painel de controle</p>
<p>No site tem as categorias são 10 categorias por páginas </p>
<p>Tem o sidebar com as funções de pesquisa e de categorias para o cliente encontrar o que procurar.</p>

![image](https://user-images.githubusercontent.com/106987028/172468302-0a620762-d3e9-4d29-9436-6b2b5a982b80.png)

</br>
</br>

# Banco-de-Dados

![image](https://user-images.githubusercontent.com/106987028/172468660-52f48638-c6fd-4a48-8552-4787da600fad.png)


<p> O banco de dados é relacional com o sistema de gerenciamento de dados MySql no servidor apache ,
no localhost na porta :80 </p>

<p>Na palataforma do xampp de software livre.</p>

# Requesitos

<p>Para você entrar no site você terá que ter o pacote xammp ou wamp instalado no seu computador e ligar o MySql e apache no servidor local</p>

<p>Instalando você terá acesso a pasta do xampp ou do wamp ou do servidor relacional que você tiver em seu computador e colocar o seu projeto lá dentro </p>

<p>No projeto eu exportei o banco de dados projeto_01 importe no seu banco de dados para ter acesso a ele.</p>

<p>Com tudo ligado e o banco importado no seu banco de dados clique no chrome e vá neste entereço localhost:80</p>
<p>E pronto você teá acesso ao Site.</p>
</br>
</br>

# Tecnologia
<p>As tecnologias na elaboração do site foi feito com a linguagem, HTML5,CSS3,PHP:7.4,JavaScropt e Jquery.</p>
<p>As APIS usadas foram a API do google maps e PHPMailer</p>




















