# PHP-OOP-Workshop

# Introduction

## Programmation orientée procédurale vs programmation orientée objets

Afin de comprendre l'approche de la programmation orientée objet (POO), nous devons commencer par discuter de l'approche de la programmation orientée procédure. L'approche procédurale est la manière conventionnelle d'écrire du code dans des langages de haut niveau où un problème est considéré comme une séquence de choses à réaliser, comme marcher, manger, lire, etc. Un certain nombre de fonctions peuvent être écrites pour accomplir de telles tâches. L'approche procédurale organise un ensemble d'instructions informatiques en groupes appelés procédures - également connues sous le nom de fonctions. Par conséquent, les fonctions sont des citoyens de première classe dans votre code. Lorsque nous nous concentrons autant sur les fonctions, les données reçoivent par conséquent moins d'attention.

Dans un programme multifonction, bien que les fonctions puissent contenir des données locales, de nombreuses données importantes sont définies comme des données globales. Plusieurs fonctions peuvent opérer sur ces données globales et, par conséquent, les données peuvent devenir vulnérables. En outre, une telle approche ne permet pas d'établir un moyen sûr d'interagir avec les données à l'aide de fonctions.

La figure suivante vous montre comment les fonctions opèrent sur les données globales et comment elles interagissent entre elles :

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/1e00aaa3-2b93-4b40-a2ee-87d2e10a7970/programmation_procdurale.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/1e00aaa3-2b93-4b40-a2ee-87d2e10a7970/programmation_procdurale.jpg)

## L'orienté objet (POO ou OOP)

En programmation, une chose qui peut être décrite et qui possède un certain nombre d'actions peut être appelée un objet. Un objet peut représenter une entité de la vie réelle ayant un certain nombre d'actions à effectuer. Un chien peut être décrit à l'aide de certains états, tels que la couleur, la race, l'âge, etc., et effectuer certaines actions, comme aboyer, courir, remuer la queue, etc. Un ventilateur de table peut être décrit par sa couleur, sa vitesse, sa direction, etc., et effectuer des actions telles que changer de vitesse, changer de direction, tourner, etc.

Dans la POO, les données et le code sont regroupés en une entité, appelée objet. Les objets interagissent les uns avec les autres. Prenons l'exemple d'un objet professeur et d'un objet élève. Le professeur peut avoir certaines matières à proposer et l'étudiant peut s'inscrire à ces matières. Par conséquent, si nous considérons l'inscription comme une action de l'étudiant, l'objet étudiant peut avoir besoin d'interagir avec l'objet professeur concernant les matières disponibles et s'inscrire à une ou plusieurs matières. En termes simples, un objet est une donnée qui exécute des actions.

Le regroupement du code en objets a ses 0 avantages, comme le fait que votre base de code devient modulaire, ce qui signifie que vous pouvez maintenir, réutiliser et déboguer votre code individuellement par rapport aux objets. L'implémentation d'un objet (code) reste cachée du monde extérieur, ce qui signifie que nous pouvons cacher nos données et nos complexités internes et que nous pouvons interagir avec l'objet via un ensemble standard de procédures. Par exemple, pour utiliser un ventilateur de table, vous n'avez pas besoin d'apprendre à connaître les moteurs à courant alternatif ou les circuits électroniques ; vous pouvez plutôt utiliser le ventilateur de table par le biais des actions fournies, comme les boutons de contrôle de la vitesse ou le contrôle de la rotation. La dissimulation de ces informations est donc un autre aspect important de la POO.

Ce regroupement de code différencie également la POO de la programmation procédurale. Un objet contient simplement des attributs, également appelés données, et un ensemble de méthodes permettant de communiquer avec cet objet. Ces méthodes sont les fonctions de la programmation procédurale. En POO, certaines de ces méthodes peuvent être utilisées pour interagir avec cet objet, et ces méthodes constituent donc son interface.

Un bon nombre de langages de programmation célèbres, tels que C++, Java, PHP, Python, C#, JavaScript, Ruby, Dart, Swift, Objective-C, etc. supportent la POO. Depuis l'introduction de PHP jusqu'à sa version la plus récente, PHP supporte l'ensemble des modèles orientés objet. PHP supporte l'initiation des objets par les classes, les constructeurs et destructeurs, l'héritage, la visibilité des propriétés, le polymorphisme, les classes abstraites et finales, les champs et méthodes statiques, les classes anonymes, les interfaces, les espaces de noms, les méthodes magiques, le clonage d'objets, les comparaisons d'objets, les indications de type, les traits, et bien d'autres techniques et outils de POO intéressants.

# Travail à Faire

## 1. Classes, Getters et Setters

Dans l'exercice suivant, vous allez déclarer une classe Véhicule avec des attributs tels que la marque, le modèle, la couleur et le nombre de roues. De plus, pour accéder à ces attributs et les utiliser, nous allons déclarer certaines méthodes, comme celles permettant d'obtenir le nom du modèle, le numéro du moteur, le nombre de roues, et ainsi de suite :

1. Créez un fichier PHP nommé `Vehicle.php` et déclarez la classe `Vehicle` avec les attributs suivants : `make`, `model`, `color`, `noOfWheels`, `engineNumber`
2. Il est maintenant temps d'ajouter des méthodes membres à la classe. Conformément au but de l'exercice, nous devons connaître des informations telles que le nombre de roues du véhicule, le numéro du moteur, la marque, le modèle et la couleur. Afin d'obtenir ces informations, ajoutez cinq méthodes `getter` : `getMake(), getModel(), getColor(), getNoOfWheels(), getEngineNumber()`.
3. Pour définir la marque, le modèle, la couleur, le nombre de roues et le numéro de moteur du véhicule, nous avons besoin de méthodes setter. Maintenant, ajoutez les méthodes `setters` correspondantes après les cinq `getters` précédents : `setMake($make), setModel($model), setColor($color), setNoOfWheels($wheels), setEngineNumber($engineNo)`.
4. Créez un objet de la classe `Vehicle`, en réalisant une instanciation via le mot clé  `new`. 
5. Définissez les attributs de l'objet à l'aide des méthodes `setter`.
6. Affichez dans le console les information de l’objet via les méthodes `getter`.

## 2. Constructeur

Un constructeur, tel que `__construct()`, est un type particulier de méthode qui est invoqué automatiquement lors de l'instanciation d'une classe.

L'idée principale derrière l'utilisation d'une méthode __construct() est d'effectuer la série initiale d'exécutions qui doivent être faites immédiatement après la création de l'objet. Dans l'approche simple, une méthode __construct() effectue une ou plusieurs affectations d'attributs.

### T.A.F

Remplacez le méthodes setter par un `constructeur` permettant de définir ces les information de l'objet de `Vehicle` au moment de l'instanciation.

## 3. Héritage (inheretence)

Pour mettre en œuvre l'idée de réutilisation, nous devons apprendre le processus d'acquisition des propriétés des objets d'une classe (la classe parent) à l'aide des objets d'une autre classe (la classe enfant). Par conséquent, l'héritage est le processus de dérivation d'une classe à partir d'une classe de base (la classe parent) et de la classe dérivée (une classe enfant ou sous-classe).

### T.A.F

En utilisant ce que vous avez appris dans l'exercice précédent et le concept de l’héritage. Implémenter le diagramme de classe illustré dans la figure suivante :

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/b45d48ae-71e2-49a8-acab-820e57b7ddc5/inheretence.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/b45d48ae-71e2-49a8-acab-820e57b7ddc5/inheretence.jpg)

## 4. Modificateurs d'accès (Access modifiers)

Deux concepts fondamentaux au cœur de la `POO` sont la modularité (qui permet la réutilisation) et l'encapsulation (qui regroupe les données et les méthodes afin de masquer les informations). Il est important d'établir des directives d'accès aux données et à l'interface entre les objets afin de définir qui peut accéder à quoi et dans quelle mesure. Les modificateurs d'accès permettent de protéger l'accès aux constantes, attributs et méthodes des objets. Le concept consiste à sécuriser les membres de l'objet afin de pouvoir déclarer des constantes, des attributs et des méthodes publics, protégés et privés pour l'objet. Les mots-clés public, `protected` et `private` sont également connus sous le nom de mots-clés de visibilité en PHP. Le mot-clé public peut être utilisé devant un membre pour accéder à ce membre depuis l'extérieur via l'objet. Le mot-clé `protected` peut être utilisé pour accéder à un membre depuis la classe dérivée mais pas depuis l'extérieur. Le mot-clé `private` peut être utilisé pour restreindre l'accès d'un membre à sa propre classe uniquement et pour qu'il ne soit pas accessible via la dérivation ou depuis l'extérieur.

### T.A.F

Appliquez des modificateurs d'accès devant les attributs de la classe `Vehicule` afin d'assurer l'encapsulation des données de la variable numéro de moteur, `$engineNumber`. Le numéro du moteur ne peut être obtenu que par la méthode membre getter `getEngineNumber()`. De même, le nombre de roues `$numberOfWheels` ne doit pas être disponible en dehors de la classe ; il doit plutôt être disponible pour les classes dérivées afin d'implémenter leur propre nombre de roues et le reste des attributs peut être accédé en dehors de la classe.

## 5. Propriétés et méthodes statiques

Lorsque les instances ou les objets d'une classe veulent avoir les mêmes données entre eux, la classe doit déclarer ces données comme statiques. Chaque instance peut avoir sa propre copie des données, mais nous utilisons les membres statiques pour avoir une certaine portion de données et de comportement qui doit être la même pour toutes les instances.

Les champs ou attributs et méthodes statiques sont simplement des attributs et des méthodes déclarés avec le mot-clé `static` après les modificateurs d'accès et ont pour but particulier de vous permettre d'accéder aux attributs, constantes et méthodes statiques sans instancier la classe. Jusqu'à présent, nous avons accédé aux membres qui sont déclarés à l'intérieur d'une classe à partir du contexte de l'objet. Dans le cas de l'accès aux membres de la classe sans objet, nous les déclarons comme membres statiques et nous y accédons à l'aide de l'opérateur de portée `::` (deux points).

Ainsi, on peut accéder aux membres statiques en dehors de la classe en utilisant le nom de la classe et l'opérateur de portée `::`. De même, pour accéder aux membres statiques à l'intérieur de la classe, nous pouvons utiliser le mot-clé `self` suivi de l'opérateur `::` .

Pour accéder aux propriétés ou méthodes statiques des sous-classes, nous utilisons le mot-clé `parent` suivi de l'opérateur `::` . 

### T.A.F

- Ouvrez `Vehicle.php` et ajoutez une propriété statique dans la classe, comme suit :

```php
<?php
classe Véhicule
{
public $make ;
public $model ;
public $color ;
protected $noOfWheels ;
private $engineNumber ;
public static $counter = 0 ;
```

- Maintenant, il suffit d'ajouter une ligne dans le constructeur pour incrémenter `$counter`.
- Ouvrez `Car.php` et créez des objets Car plusieurs fois. Imprimez la variable statique `$counter` en utilisant `Car::$counter`.
- Maintenant, ouvrez `Motorcycle.php` et créez des objets Car plusieurs fois, Imprimez la variable statique `$counter` en utilisant `Motorcycle::$counter`.
- Que constatez vous?

## 6. Abstraction

Dans la POO, l'abstraction de classe est la manière de définir les comportements communs des objets afin que les classes dérivées puissent implémenter ces comportements à leur manière pour atteindre des objectifs différents. Prenons l'analogie du véhicule : les voitures et les motos ont des moteurs en commun, mais vous savez que les moteurs sont complètement différents pour chaque type de véhicule. Ainsi, l'abstraction de classe devrait fournir un moteur abstrait pour les deux types de véhicules. Pour correspondre à une définition commune exacte d'un moteur, le moteur devrait démarrer, le moteur devrait s'arrêter, et nous pourrions vouloir connaître l'état du moteur - s'il est en marche ou non. Chaque type de véhicule doit mettre en œuvre sa propre façon de démarrer le moteur. Par exemple, le moteur d'une voiture peut être démarré à l'aide d'une clé dans le contact, tandis qu'une moto peut nécessiter un coup de pied pour démarrer le moteur.

![https://s3-us-west-2.amazonaws.com/secure.notion-static.com/cc80c1cc-c1c1-4e8d-8aad-d03307981a8f/Abstraction.jpg](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/cc80c1cc-c1c1-4e8d-8aad-d03307981a8f/Abstraction.jpg)

PHP supporte les classes et méthodes abstraites et elles peuvent être écrites avec le mot clé abstract au début. Une classe abstraite ne peut pas être instanciée ; elle peut être héritée pour obtenir des comportements communs entre les objets. Une classe doit contenir au moins une méthode abstraite pour être une classe abstraite. En utilisant une telle classe, nous fournissons des méthodes communes aux sous-classes. Dans une classe abstraite, les méthodes communes pourraient être abstraites parce qu'elles n'ont que les signatures et que les sous-classes implémentent ces méthodes à leur manière. Une méthode déclarée comme méthode abstraite ne doit pas avoir l'implémentation écrite en elle.

Jetez un coup d'œil à la syntaxe suivante :

```php
abstract class ClassName
{
   abstract function methodName(param1);
   // more abstract method declarations
   function anotherMethod()
   {
     //function body
   }
     //more implemented functions
}
class MyChildClass extends ClassName
{
   function methodName(param1, param2)
   {
     //the implementation goes here
   }
}
```

Une classe abstraite peut contenir des méthodes implémentées, ainsi que des méthodes abstraites. En général, nous laissons ces méthodes abstraites, qui doivent avoir une implémentation différente dans les différentes classes filles. En plus de l'implémentation de la méthode abstraite, la classe enfant doit ajouter tous les arguments donnés dans la méthode abstraite et peut éventuellement ajouter des arguments supplémentaires. Si la méthode abstraite contient deux paramètres, la classe enfant doit ajouter les deux paramètres donnés et peut éventuellement ajouter ses propres paramètres. Dans l'exercice suivant, nous allons ajouter une fonctionnalité de base du moteur aux voitures et aux motos afin de pouvoir allumer et éteindre le moteur.

### T.A.F

Dans cet exercice , votre tâche consiste à implémenter les scripts `University.php` qui hérite de la `class` abstraite `AbstractUniversity.php`, `Subject.php`, `Student.php` et `index.php`. Les consignes de l'implémentation sont mentionnées sous formats de commentaires de chaque fichier. Voici le lien du `repo` : 

[https://github.com/aymanebenhima/php_oop_workshop](https://github.com/aymanebenhima/php_oop_workshop)

## 7. les espaces de noms (namespaces)

En programmation, un espace de noms résout des problèmes tels que les collisions de noms, lorsque des classes ou des bibliothèques portent le même nom afin de pouvoir être utilisées sous un nom différent. Nous ne voulons certainement pas écrire une classe qui pollue la portée globale en entrant en conflit avec le nom d'une autre classe.

PHP supporte l'espace de noms avec le mot clé `namespace`, comme suit :

```php
<?php
namespace MyNamespace;
const MYCONST = 'constant';
function myFunction()
{
...
}
class MyClass
{
...
}
echo MyNamespace\MYCONST;
echo myFunction(); //resolves to MyNamespace\myFunction
echo MyNamespace\myFunction();//explicitly resolves to MyNamespace\myFunction
$object = new MyNamespace\MyClass();
```

Nous pouvons importer un espace de noms en utilisant le mot-clé `use` et, facultativement, nous pouvons aliaser l'espace de noms avec le mot-clé `as` comme suit :

```php
//file1.php
<?php
namespace MyNamespaceA;
const MYCONST = 'constant';
function myFunction()
{
...
}
class MyClass
{
...
}
//file2.php
<?php
namespace MyNamespaceB;
require_once 'file1.php';
use MyNamespaceA\MyClass as A; //imports the class name
$object = new A();//instantiates the object of class MyNamespaceA\MyClass
use function MyNamespaceA\myFunction;//importing a function
myFunction();//calls MyNamespaceA\myFunction
use function MyNamespaceA\myFunction as func;//aliasing a function
func();//calls MyNamespaceA\myFunction
use const MyNamespaceA\MYCONST; //imports a constant
echo MYCONST;//prints the value of MyNamespaceA\MYCONST
```

### T.A.F

Dans l'exercice précédant, utilisez des `namespaces`  au lieu de `require-once`.
