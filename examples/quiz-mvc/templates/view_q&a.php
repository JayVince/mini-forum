<h2 class="mt-4">Question n°<span id="question-id"><?= $question->getRank() ?></span></h2>
<form id="question-form" method="post">
     <p id="current-question-text" class="question-text"><?= $question->getText() ?></p>

     <div id="answers" class="d-flex flex-column">

          <?php foreach ($question->getAnswers() as $answer) : ?>
               <div class="custom-control custom-radio mb-2">
                    <input class="custom-control-input" type="radio" name="answer" id="answer<?= $answer->getId() ?>" value="<?= $answer->getId() ?>">
                    <label class="custom-control-label" for="answer<?= $answer->getId() ?>" id="answer<?= $answer->getId() ?>-caption"><?= $answer->getText() ?></label>
               </div>
          <?php endforeach; ?>

     </div>

     <input type="hidden" name="current-question" value="<?= $question->getId() ?>" />
     <button type="submit" class="btn btn-primary">Valider</button>
</form>
</div>
</body>

</html>