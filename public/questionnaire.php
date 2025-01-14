<?php
include_once '../utils/autoloader.php';
include_once '../utils/bdd.php';

// je crée un qcm vide
$qcm = new Qcm("Questionnaire PHP");


// connexion avec repo
$questionRepo = new QuestionRepository($pdo);

// Ca récupère les Questions du quizz avec l'iD 2, et ça transforme toutes les questions en instances Questions
$listeQuestions = $questionRepo->findAllQuizzId(1);

$qcm->setQuestions($listeQuestions);

var_dump($qcm);


// test pour afficher les réponses

$answerTest = new AnswerRepository($pdo);

$listeAnswer = $answerTest->findAllAnswer(1);
$question->setTouteLesReponse();
var_dump($listeAnswer);





// j'associe mes questions au qcm
$qcm->setQuestions([
    $question,
    $question2
]);

// var_dump($qcm->getQuestions());

$qcManager = new QcmManager();

// $qcm = $qcManager->getQcm();


// pour la bdd
// echo $qcManager->generateDisplay($qcm );

// var_dump($qcManager);
// die();

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