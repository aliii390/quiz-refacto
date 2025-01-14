<?php
include_once '../utils/autoloader.php';

// je crée un qcm vide
$qcm = new Qcm("Nom qcm");

// je crée une question vide
$question = new Question("Question devWeb", "Explication: ");

// j'associe mes réponses à ma question
$question->setTouteLesReponse([
    new Answer("Choix numéro1", true),
    new Answer("choix numéro2")
]);

// je fais une deuxieme question vide
$question2 = new Question("Question POO", "La réponse est Programmation orientée objet");

// j'associe des réponses possible à ma question 2
$question2->setTouteLesReponse([
    new Answer("Choix q2 numéro1", true),
    new Answer("choix q2 numéro2")
]);

// j'associe mes questions au qcm
$qcm->setQuestions([
    $question,
    $question2
]);

// var_dump($qcm->getQuestions());

$qcManager = new QcmManager();

$qcm = $qcManager->getQcm(1);

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