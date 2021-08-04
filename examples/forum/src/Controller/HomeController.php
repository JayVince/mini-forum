<?php

namespace App\Controller;

use App\View\HomeView;
use App\Model\Category;
use Cda0521Framework\Interfaces\ControllerInterface;
use Cda0521Framework\Interfaces\HttpResponse;

/**
 * Contrôleur permettant d'afficher la page d'accueil
 */
class HomeController implements ControllerInterface
{
     /**
      * Examine la requête HTTP et prépare une réponse HTTP adaptée
      *
      * @see ControllerInterface::invoke()
      * @return HttpResponse
      */
     public function invoke(): HttpResponse
     {
          $categories = Category::findAll();

          return new HomeView($categories);
     }
}
