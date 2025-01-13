


<?php 
include_once '../../utils/autoloader.php';

$qcm = new Qcm("Nom qcm");
$question = new Question("Nom question","Explication: ");
$answer = [
    new Answer("salut", true),
    new Answer("test")
];


$question->setTouteLesReponse($answer);


$questions = [
    $question
];
$qcm->setQuestions($questions);
$qcManager = new QcmManager();

echo $qcManager->generateDisplay($qcm);

// var_dump($qcManager);
// die();


