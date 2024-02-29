---
layout: default
order: 4
---

# Table de matière
- [Table de matière](#table-de-matière)
- [Exposé classe abstraite](#exposé-classe-abstraite)
  - [Introduction](#introduction)
  - [Définition](#définition)
  - [Exemple](#exemple)
  - [Avantages de la classe abstraite](#avantages-de-la-classe-abstraite)
  - [Utilisation de la classe abstraite](#utilisation-de-la-classe-abstraite)
  - [Conclusion](#conclusion)
  - [Points à retenir](#points-à-retenir)
  - [Ressources supplémentaires](#ressources-supplémentaires)
<!-- new slide -->



# Exposé classe abstraite
## Introduction
![Exposé classe abstraite](/lab-poo/exposé-abstract-class/images/introduction.jpg){:width="500px" }*Figure: Introduction*
Une classe abstraite en programmation orientée objet offre un cadre pour définir des méthodes sans les implémenter. Cela permet aux classes enfants de fournir leur propre implémentation.

## Définition
![Exposé classe abstraite](/lab-poo/exposé-abstract-class/images/definition.jpg){:width="500px" }*Figure: Définition*

Une classe abstraite est définie par le mot-clé `abstract`. Elle peut contenir des méthodes abstraites, qui sont des méthodes déclarées mais non implémentées.

## Exemple

```php
abstract class Forme {
    abstract public function calculerAire();
}

class Rectangle extends Forme {
    private $largeur;
    private $longueur;

    public function __construct($largeur, $longueur) {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function calculerAire() {
        return $this->largeur * $this->longueur;
    }
}

$rectangle = new Rectangle(5, 10);
echo "L'aire du rectangle est : " . $rectangle->calculerAire();
```

## Avantages de la classe abstraite
![Exposé classe abstraite](/lab-poo/exposé-abstract-class/images/avantages.jpg){:width="500px" }*Figure: Avantages*

* Encourage une structure de code plus modulaire et évite la redondance.
* Définit un contrat pour les classes enfants à suivre.
* Favorise la flexibilité et l'extensibilité du code.

## Utilisation de la classe abstraite
![Exposé classe abstraite](/lab-poo/exposé-abstract-class/images/cas-utilisation.jpg){:width="500px" }*Figure: Cas d'utilisation*

* Définir un comportement commun pour un groupe de classes.
* Forcer l'implémentation de méthodes spécifiques dans les classes enfants.
* Centraliser la logique métier commune sans fournir d'implémentation.

## Conclusion

![Exposé classe abstraite](/lab-poo/exposé-abstract-class/images/conclusion.jpg){:width="500px" }*Figure: Conclusion*

Les classes abstraites offrent une solution élégante pour définir des contrats et des comportements communs dans la programmation orientée objet. Elles sont essentielles pour une conception modulaire et extensible.

## Points à retenir

* Une classe abstraite définit un modèle incomplet pour les classes enfants.
* Les méthodes abstraites définies dans une classe abstraite doivent être implémentées par les classes enfants.
* Les classes abstraites sont utiles pour définir des interfaces et des comportements communs.

## Ressources supplémentaires

  
- Documentation sur les classes abstraites en PHP :
    - https://www.php.net/manual/en/language.oop5.abstract.php

  
- Tutoriel sur les classes abstraites en PHP :
    - https://www.w3schools.com/php/php_oop_classes_abstract.asp