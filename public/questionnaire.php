<?php
include_once '../utils/autoloader.php';
include_once '../utils/bdd.php';

// je crée un qcm vide
$qcm = new Qcm("Questionnaire PHP");


// connexion avec repo
$questionRepo = new QuestionRepository($pdo);

// Ca récupère les Questions du quizz avec l'iD 2, et ça transforme toutes les questions en instances Questions
$listeQuestions = $questionRepo->findAllQuizzId(1);

foreach ($listeQuestions as $question) {

    $answerTest = new AnswerRepository($pdo);

    $id = $question->getId();

    $listeAnswer = $answerTest->findAllAnswer($id);
    $question->setTouteLesReponse($listeAnswer);
}


// test pour afficher les réponses

// A la fin, on met toutes les questions dans le QCM
$qcm->setQuestions($listeQuestions);
// var_dump($listeAnswer);
// var_dump($qcm->getQuestions());


// j'associe mes questions au qcm

$qcManager = new QcmManager();

// $qcm = $qcManager->getQcm();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/question.css">
    <script src="./assets/js/timer.js" defer></script>
</head>

<body>
    <main>

        <?= $qcManager->generateDisplay($qcm); ?>
      
    </main>

</body>

</html>