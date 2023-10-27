# C'est quoi la clean architecture 

> les débuts : Uncle Bob 
  - état d'esprit tournée vers faire des choses simple  
  - s'inscrit dans le mouvement du software craftmanship 
  - nommage proéminient ( on oublie `i` ou `x` ) on nomme corectement ses variables et ses fonctions 
  - framework de règles pour faire du code maintenable 
  - second nom => Port/Adapter , Architecture Hexagonal

  >> trouver une image (the pragmatic programer ?)
> principes architecturale de base
  - principe du software craftmanship => crée du code state of the art, le plus maintenable possible 
  - possible en n'importe qu'elle language POO et fonctionnel
  - crée le moins de dépendances entre les objets 
  - extrem programming => pas de répétition possible 
  - structure en onion 
      - plus vous l’éplucher plus c'est propre à l'intérieur 
  - domain/usecase/externals
  
  >> faire un schema

> L'IOC : Inversion of control: pierre angulaire de la clean architecture 
   >> faire un schema 

> Avantage 
  - possiblité de `mocker` plus simplement ses dépendances (exemples de stripe/paypal)
  - possibilité d'interchangé des dépendances de façon ultra rapide grâce à l'implémentation des interfaces 
    - attention à python => les class `abstract` sont des interfaces 
    - on peut carrément décidé logiquement qu'elle dépendances on veut charger à la volé en base de donnée en fonction du client 
  - TDD in action => tout est module donc on peut tester rapidement tout sans avoir à se casser la tête avec des dépendances 
  

> DESAVANTAGES
  - beaucoup de code de configuration => interfaces et beaucoup de code à crée 
  - demande de bien comprendre et de comprendre des mécanisme de code assez poussé 
  - beaucoup de couche d'abstraction à gérer et de gestion à faire 
  - clairement pas fais pour un petit projet =>  prends beaucoup de temps 

> RESSOURCES 
  - slack wealcome => https://join.slack.com/t/wealcome/shared_invite/zt-267gck1f4-ZMtuf5r2DmNoq6WqdosviA
  - Clean Architecture/Clean code les livres ( prenez les en anglais svp => amazon)
  - linkedin => Michael Azzard, et autre 
  - youtube => codeOpinion/devoxx ....  

> SOURCE 
  - clean code/clean architecture => ROBERT C. Martin Series 
  - martin flower => https://martinfowler.com/
  - the clean coder => https://blog.cleancoder.com/
  - michael Azzar sur slack (wealcome)
  - github 
    - https://github.com/sunilkumarmedium/CleanArchitectureApp