<?php

namespace App\View;

use Cda0521Framework\Html\AbstractView;

/**
 * Vue permettant d'afficher la page d'accueil
 */
class HomeView extends AbstractView
{
     /**
      * Les différents sujets à afficher dans la vue
      * @var array
      */
     private array $categories;

     public function __construct(array $categories)
     {
          parent::__construct('Mini-forum - Homepage');

          $this->categories = $categories;
     }

     /**
      * Génére le corps de la page HTML
      *
      * @see AbstractView::renderBody()
      * @return void
      */
     protected function renderBody(): void
     {
          $categories = $this->categories;

          // Affiche le contenu de la balise body
          include './templates/home.php';
          include './templates/footer.php';
     }
}
