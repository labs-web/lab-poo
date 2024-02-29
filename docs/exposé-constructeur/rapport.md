---
layout: default
order: 4
---

# Table de matière
- [Table de matière](#table-de-matière)
- [Exposé sur le constructeur](#exposé-sur-le-constructeur)
  - [Introduction](#introduction)
  - [Définition](#définition)
  - [Exemple](#exemple)
  - [Avantages du constructeur](#avantages-du-constructeur)
  - [Utilisation du constructeur](#utilisation-du-constructeur)
  - [Conclusion](#conclusion)
  - [Points à retenir](#points-à-retenir)
  - [Ressources supplémentaires](#ressources-supplémentaires)
<!-- new slide -->

# Exposé sur le constructeur 
## Introduction
![Exposé constructeur](/lab-poo/exposé-constructeur/images/introduction.jpg){:width="500px" }*Figure: Introduction*
Le constructeur est une méthode spéciale en PHP qui est appelée automatiquement lors de l'instanciation d'une classe. Il permet d'initialiser les attributs de l'objet et de configurer son état initial.

## Définition
![Exposé constructeur](/lab-poo/exposé-constructeur/images/definition.jpg){:width="500px" }*Figure: Définition*

Le constructeur est déclaré avec le mot-clé `__construct` suivi d'une liste de paramètres entre parenthèses. Les paramètres peuvent être utilisés pour passer des valeurs à l'objet lors de sa création.
## Exemple

```php
class Personne {
    private $nom;
    private $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }
}

$personne = new Personne("Martin", 30);

echo $personne->getNom() . " a " . $personne->getAge() . " ans." . PHP_EOL;
```



## Avantages du constructeur
![Exposé constructeur](/lab-poo/exposé-constructeur/images/avantages.jpg){:width="500px" }*Figure: Avantages*

* Permet d'initialiser les attributs de l'objet de manière centralisée.
* Facilite la création d'objets avec des valeurs par défaut.
* Améliore la lisbilité et la maintenabilité du code.

## Utilisation du constructeur
![Exposé constructeur](/lab-poo/exposé-constructeur/images/cas-utilisation.jpg){:width="500px" }*Figure: Cas d'utilisation*

* Initialiser les attributs de l'objet avec des valeurs par défaut.
* Ouvrir une connexion à une base de données.
* Charger des ressources externes.
* Effectuer des vérifications de sécurité.


## Conclusion

![Exposé constructeur](/lab-poo/exposé-constructeur/images/conclusion.jpg){:width="500px" }*Figure: Conclusion*

Le constructeur est une méthode puissante et flexible qui permet de configurer et d'initialiser les objets en PHP. Il est un outil essentiel pour le développement orienté objet.


## Points à retenir

* Le constructeur est une méthode spéciale appelée automatiquement lors de l'instanciation d'une classe.
* Il permet d'initialiser les attributs de l'objet et de configurer son état initial.
* Le constructeur peut avoir des paramètres pour passer des valeurs à l'objet lors de sa création.
* L'utilisation du constructeur permet d'améliorer la lisibilité, la maintenabilité et la sécurité du code.




## Ressources supplémentaires

  
- Le constructeur en PHP :
    - https://www.w3schools.com/php/php_oop_constructor.asp

  
- Tutoriel sur les constructeurs en PHP:
    - https://www.w3schools.com/php/php_oop_constructor.asp

