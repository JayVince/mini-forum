# M2i CDA 05/21 PHP Framework

> ⚠️ This is a PHP MVC micro-framework created for educational purposes.

## Installation

### Prérequis

- Une installation de PHP: https://www.php.net/downloads.
- Une installation de Composer: https://getcomposer.org/download/.
- Une installation d'un système de base de données (MySQL, PostgreSQL…).

### Lancer une application exemple

- Depuis le dossier d'une application exemple (par exemple: `examples/quiz-mvc`), installer les dépendances:

> `composer install`

- Puis, lancer le serveur local de PHP:

> `php -S localhost:8000`

- Ajouter un fichier `database.json` dans ce dossier (sur le modèle de `database.example.json`) afin de spécifier l'adresse de votre serveur de base de données, le nom de la base de données, ainsi que les identifiants permettant de s'y connecter.

L'application est alors accessible à partir de http://localhost:8000.


### Création des vues

Découper la page play.php en différents fichiers PHP dans un dossier /templates pour chaque partie de la page.

Créer un nouveau template permettant d'afficher le nom du site avec un mesagea de bienvenue afin de réaliser une page d'accueil.

Dans un nouveau dossier /src/View, créer une classe HomeView possédant une méthode send(). Cette méthode doit charger les bons templates pour assembler 
la page d'accueil complète. Dans la route correspondante, instancier cette classe et appeler sa méthode send() afin d'afficher la page d'accueil.

Puis, créer une classe PlayView nécessitant un objet Question comme argument à sa construction. La méthode send() de cette classe doit assembler la page "jouer au quiz" à partir de l'objet Question passé lors de sa construction.

### BONUS

Créer une classe abstraite AbstractView dans le code du framework qui factorise le code des deux classes précédemment créées. La méthode send() de cette classe doit décrire la façon générale de créer une page HTML, et laisser la possibilités à ses descendants de préciser certaines parties de la création de la page.
