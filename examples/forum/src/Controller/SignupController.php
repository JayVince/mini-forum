<?php

namespace App\Controller;

use App\View\SignupView;
use Cda0521Framework\Interfaces\ControllerInterface;
use Cda0521Framework\Interfaces\HttpResponse;

/**
 * Contrôleur permettant d'afficher la page de création de compte
 */
class SignupController implements ControllerInterface
{
     /**
      * Examine la requête HTTP et prépare une réponse HTTP adaptée
      *
      * @see ControllerInterface::invoke()
      * @return HttpResponse
      */
     public function invoke(): HttpResponse
     {
          return new SignupView();
     }
}
