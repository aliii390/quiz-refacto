


<?php 
include_once '../../utils/autoloader.php';

$qcm = new Qcm("Nom qcm");
$question = new Question("Question devWeb","Explication: ");
$answer = [
    new Answer("Choix numéro1", true),
    new Answer("choix numéro2")
];


$question->setTouteLesReponse($answer);


$questions = [
    $question
];
$qcm->setQuestions($questions);
$qcManager = new QcmManager();

echo $qcManager->generateDisplay($qcm , $question);

// var_dump($qcManager);
// die();


