<?php

use App\Model\Question;

// Vérifie si l'utilisateur vient de répondre à une question
$formSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer']) && isset($_POST['current-question']);

// Si l'utilisateur vient de répondre à une question
if ($formSubmitted) {
     // Récupère la question précédente en base de données avec sa bonne réponse
     $previousQuestion = Question::findById($_POST['current-question']);
     // Vérifie si la réponse fournie par l'utilisateur correspond à la bonne réponse à la question précédente
     $rightlyAnswered = intval($_POST['answer']) === $previousQuestion->getRightAnswer()->getId();
}


