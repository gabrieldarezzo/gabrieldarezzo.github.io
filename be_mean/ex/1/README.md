## Explique qual a definição de MVC, MVVM e MVP.

### MVC:
Model–view–controller (MVC) is a software architectural pattern for implementing user interfaces. It divides a given software application into three interconnected parts, so as to separate internal representations of information from the ways that information is presented to or accepted from the user. – Wikipedia

##### Model
Sempre que você pensar em manipulação de dados, pense em model. Ele é responsável pela leitura e escrita de dados, e também de suas validações. 
##### View
Simples: a camada de interação com o usuário. Ela apenas faz a  exibição dos dados, sendo ela por meio de um html ou xml.
##### Controller
O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário.  
[Fonte: Tabless.com.br](http://tableless.com.br/mvc-afinal-e-o-que//)

### MVVM: (Model View ViewModel)

O MVVM é um pattern que foi criado em 2005 por John Gossman, um dos arquitetos do WPF e Silverlight na Microsoft. O MVVM assemelha-se em alguns aspectos o MVC (Model View Controller) e ao MVP (Model View Presenter), podemos até dizer que ele é uma especialização do MVP adaptado para a arquitetura do WPF e Silverlight. Conceitualmente, o MVVM e o MVP são idênticos, o que os diferencia é que o MVVM é específico para a arquitetura do WPF e Silverlight, e o MVP é independente de plataforma.

O MVVM visa a estabelecer uma clara separação de responsabilidades em uma aplicação WPF e Silverlight, mantendo uma espécie de façade entre o Modelo de Objetos (entenda classes de negócio, serviços externos e até mesmo acesso a banco de dados) e a View, que é a interface, com a qual o usuário interage. Para entendermos melhor como se dá essa separação e para visualizar como os componentes interagem dentro desse cenário, observe a figura abaixo:  
![Exemplo de MVVM](http://conteudo.imasters.com.br/18900/1.png)

  
[Fonte: imasters.com.br](http://imasters.com.br/artigo/18900/desenvolvimento/entendendo-o-pattern-model-view-viewmodel-mvvm)  

### MVP: (MVP)

Model–view–presenter (MVP) é uma derivação do padrão de software model-view-controller (MVC), usado também para construir principalmente interfaces gráficas.

Em MVP a camada Presenter assume a função de mediadora (executada pelo Controller em MVC). Além disso, a View é responsável por manipular os eventos UI (como mouseDown, keyDown, etc.), que era o trabalho da Controller. Finalmente, a Model se torna estritamente um modelo de domínio.  

##### Model
Model é uma interface que define os dados a ser exibidos ou caso contrário, alterados na interface do usuário.

##### View
View é uma interface que exibe os dados (o modelo) e guia os comandos do usuário (eventos) à camada Presenter para atuar sobre os dados.

##### Presenter
A interface Presenter atua sobre a Model e a View. Ela recupera os dados dos repositórios (modelo), e os formata para exibi-los na View.  
[Fonte: Wiki](https://pt.wikipedia.org/wiki/Model-view-presenter)     



## Crie uma aplicação com um nome e um form onde os dados colocados neles sejam mostrados logo abaixo, formatados.  
[Fonte: Wiki](https://pt.wikipedia.org/wiki/Model-view-presenter)     
