---
layout: default
chapitre: Mécanisme de oop
order: 4
---

# Mécanisme de oop

<!-- new slide -->

## Introduction
![Introduction](/lab-poo/4.Mécanisme-de-oop/images/mecanisme-de-oop.png){:width="50%" }
*figure: Introduction mécanisme de oop*

<!-- note -->

## Encapsulation 

 Il s'agit de regrouper les données (variables) et les méthodes (fonctions) qui les manipulent au sein d'une même entité appelée objet. L'encapsulation permet de restreindre l'accès direct aux données, en les protégeant à l'aide de méthodes d'accès.

### Example

```bash
<?php
#  Exemple d'encapsulation, d'héritage et de polymorphisme en PHP

#  Classe parent
class Personne {
    protected $nom;
    protected $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficherInfos() {
        echo "Nom : {$this->nom}, Âge : {$this->age}\n";
    }

}
```

## Abstraction 

 L'abstraction consiste à représenter les caractéristiques essentielles d'un objet, en ignorant les détails de mise en œuvre. Elle permet de créer des modèles simples et réutilisables en cachant la complexité interne.

### Example

```bash
<?php
# Classe abstraite
abstract class Personne {
    # Méthode abstraite
    abstract public function afficherInformation();
}

# Classe concrète implémentant la classe abstraite Personne
class Stagiaire extends Personne {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    # Implémentation de la méthode abstraite afficherInformation() pour la classe Stagiaire
    public function afficherInformation() {
        return "Stagiaire: " . $this->nom;
    }
}

class Étudiant extends Personne {
    private $nom;
    private $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    # Implémentation de la méthode abstraite afficherInformation() pour la classe Étudiant
    public function afficherInformation() {
        return "Étudiant: " . $this->nom . ", Âge: " . $this->age;
    }
}

# Création des objets
$stagiaire = new Stagiaire("Alice");
$étudiant = new Étudiant("Bob", 20);

# Appel de la méthode afficherInformation() sans connaître les détails d'implémentation internes
echo $stagiaire->afficherInformation() . "\n"; 
# Résultat : Stagiaire: Alice
echo $étudiant->afficherInformation() . "\n"; 
# Résultat : Étudiant: Bob, Âge: 20
?>


```

## Héritage 

### Example

```bash
# Classe enfant héritant de Personne
class Étudiant extends Personne {
    private $numéroÉtudiant;

    public function __construct($nom, $age, $numéroÉtudiant) {
        parent::__construct($nom, $age);
        $this->numéroÉtudiant = $numéroÉtudiant;
    }

    public function afficherInfos() {
        parent::afficherInfos();
        echo "Numéro Étudiant : {$this->numéroÉtudiant}\n";
    }
}
```

 Le mécanisme d'héritage permet à une classe (appelée sous-classe ou classe dérivée) d'hériter les attributs et les méthodes d'une autre classe (appelée classe de base ou classe mère). Cela favorise la réutilisation du code et la hiérarchisation des objets.

## Polymorphisme 

Le polymorphisme permet à un objet d'adopter différents comportements en fonction du contexte. Il peut se manifester de différentes manières, notamment par le biais du surcharge de méthodes (méthodes portant le même nom mais avec des paramètres différents) et du remplacement de méthodes (méthodes héritées pouvant être redéfinies dans la classe dérivée).

## Référence

[https://www.spiceworks.com/tech/devops/articles/object-oriented-programming/](https://www.spiceworks.com/tech/devops/articles/object-oriented-programming/)

<!-- new slide -->