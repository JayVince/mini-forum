<?php

namespace App\Controller;

use App\Model\Thread;
use App\Model\PostModel;
use App\View\PostView;
use Cda0521Framework\Exception\NotFoundException;
use Cda0521Framework\Interfaces\ControllerInterface;
use Cda0521Framework\Interfaces\HttpResponse;

/**
 * Contrôleur permettant d'afficher la vue de modification d'un sujet
 */
class PostController implements ControllerInterface
{
     /**
      * Le sujet à passer à la vue
      * @var Thread
      */
     private Thread $thread;

     /**
      * Crée un nouveau contrôleur
      *
      * @param integer $id Identifiant en base de données du sujet à passer à la vue
      */
     public function __construct(int $id)
     {
          
          // Récupère le thread demandé par le client
          $thread = Thread::findById($id);
          
          // Si le thread n'existe pas, renvoie à la page 404
          if (is_null($thread)) {
               throw new NotFoundException('Thread #' . $id . ' does not exist.');
          }

          $this->thread = $thread;
     }

     /**
      * Examine la requête HTTP et prépare une réponse HTTP adaptée
      *
      * @see ControllerInterface::invoke()
      * @return HttpResponse
      */
     public function invoke(): HttpResponse
     {
          
          return new PostView($this->thread);
     }
}
