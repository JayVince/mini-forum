<?php

namespace App\View;

use App\Model\Question;

class PlayView
{

     private Question $question;

     public function __construct(Question $question)
     {
          $this->question = $question;
     }

     public function send()
     {
          $question = $this->question;

          include './templates/head.php';
          include './templates/script_form.php';
          include './templates/eval_banner.php';
          include './templates/view_q&a.php';
     }
}
