<?php

namespace App\View;

use App\Model\Category;
use Cda0521Framework\Html\AbstractView;

/**
 * Vue permettant d'afficher la page de connexion
 */
class ThreadView extends AbstractView
{
     /**
      * Topic à afficher
      * @var Category
      */
     private Category $category;

     public function __construct(Category $category)
     {
          
          parent::__construct('Mini-forum - Threadlist "' . $category->getName() . '"');

          $this->category = $category;
     }

     /**
      * Génére le corps de la page HTML
      *
      * @see AbstractView::renderBody()
      * @return void
      */
     protected function renderBody(): void
     {
          $category = $this->category;

          // Affiche le contenu de la balise body
          include './templates/threadlist.php';
          include './templates/footer.php';
     }
}
