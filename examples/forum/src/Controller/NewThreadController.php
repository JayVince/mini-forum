<?php

namespace App\Controller;

use App\Model\Thread;
use App\Model\Category;
use App\Model\UserModel;
use Cda0521Framework\Http\RedirectResponse;
use Cda0521Framework\Interfaces\ControllerInterface;
use Cda0521Framework\Interfaces\HttpResponse;

/**
 * Contrôleur permettant de traiter l'ajout d'un nouveau sujet
 */
class NewThreadController implements ControllerInterface
{
     /**
      * Examine la requête HTTP et prépare une réponse HTTP adaptée
      *
      * @see ControllerInterface::invoke()
      * @return HttpResponse
      */
     public function invoke(): HttpResponse
     {
          $errors = [];

          // Vérifie que tous les champs nécessaires sont bien présents
          if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['user-token'])) {
               // Vérifie le nombre de caractères du titre
               if (strlen($_POST['title']) < 5 || strlen($_POST['title']) > 100) {
                    $errors[] = 'Le titre doit être compris entre 5 et 100 caractères';
               }

               // Vérifie le nombre de caractères du message
               if (strlen($_POST['content']) < 5 || strlen($_POST['content']) > 3000) {
                    $errors[] = 'Le message doit être compris entre 5 et 3000 caractères';
               }

               if (empty($errors)) {
                    // Récupère l'auteur du message via son token
                    $author = UserModel::findWhere('token', $_POST['user-token'])[0];
                    dd($author);

                    // Crée une nouvelle instance de Topic et le sauvegarde en base de données
                    $category = new Category(null, $_POST['title'], date('Y-m-d H:i:s'), $author->getId());
                    $category->save();

                    // Crée une nouvelle instance de Message et le sauvegarde en base de données
                    $thread = new Thread(null, $_POST['content'], date('Y-m-d H:i:s'), $author->getId(), $category->getId());
                    $thread->save();

                    // Redirige vers la page d'accueil
                    return new RedirectResponse('/');
               }
          } else {
               $errors[] = 'Vous devez remplir tous les champs';
          }

          if (!empty($errors)) {
               // En cas d'erreur, redirige vers la page d'accueil
               return new RedirectResponse('/');
          }
     }
}
