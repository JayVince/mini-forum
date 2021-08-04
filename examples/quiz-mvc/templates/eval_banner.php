<?php if ($formSubmitted) : ?>
     <!-- Affiche une alerte uniquement si l'utilisateur vient de répondre à une question -->
     <div id="answer-result" class="alert alert-<?php if ($rightlyAnswered) {
                                                       echo 'success';
                                                  } else {
                                                       echo 'danger';
                                                  } ?>">
          <i class="fas fa-thumbs-<?php if ($rightlyAnswered) {
                                        echo 'up';
                                   } else {
                                        echo 'down';
                                   } ?>"></i>
          <!-- Affiche un texte différent selon que l'utilisateur a bien répondu à la question ou non -->
          <?php if ($rightlyAnswered) : ?>
               Bravo, c'était la bonne réponse!
          <?php else : ?>
               Hé non! La bonne réponse était <strong><?= $previousQuestion->getRightAnswer()->getText() ?></strong>
          <?php endif; ?>
     </div>
<?php endif; ?>