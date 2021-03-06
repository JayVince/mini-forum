<?php

namespace App\Controller;

use App\Model\Category;
use App\Model\Thread;
use App\View\ThreadView;
use Cda0521Framework\Exception\NotFoundException;
use Cda0521Framework\Interfaces\ControllerInterface;
use Cda0521Framework\Interfaces\HttpResponse;

/**
 * Contrôleur permettant d'afficher la vue de modification d'un sujet
 */
class ThreadController implements ControllerInterface
{
     /**
      * Le sujet à passer à la vue
      * @var Category
      */
     private Category $category;

     /**
      * Crée un nouveau contrôleur
      *
      * @param integer $id Identifiant en base de données du sujet à passer à la vue
      */
     public function __construct(int $id)
     {
          
          // Récupère le sujet demandé par le client
          $category = Category::findById($id);
          
          // Si le sujet n'existe pas, renvoie à la page 404
          if (is_null($category)) {
               throw new NotFoundException('Category #' . $id . ' does not exist.');
          }

          $this->category = $category;
     }

     /**
      * Examine la requête HTTP et prépare une réponse HTTP adaptée
      *
      * @see ControllerInterface::invoke()
      * @return HttpResponse
      */
     public function invoke(): HttpResponse
     {
          
          return new ThreadView($this->category);
     }
}
