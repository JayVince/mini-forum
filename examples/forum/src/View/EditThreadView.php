<?php

namespace App\View;

use App\Model\Thread;
use Cda0521Framework\Html\AbstractView;

/**
 * Vue permettant d'afficher la page de connexion
 */
class EditThreadView extends AbstractView
{
     /**
      * Topic à afficher
      * @var Thread
      */
     private Thread $thread;

     public function __construct(Thread $thread)
     {
          parent::__construct('Mini-forum - Modifier le sujet "' . $thread->getThreadTitle() . '"');

          $this->thread = $thread;
     }

     /**
      * Génére le corps de la page HTML
      *
      * @see AbstractView::renderBody()
      * @return void
      */
     protected function renderBody(): void
     {
          $thread = $this->thread;

          // Affiche le contenu de la balise body
          include './templates/edit-topic.php';
     }
}
